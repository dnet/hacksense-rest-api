<?

class StateChangesController extends AppController {
	var $components = array('RequestHandler');

	function status() {
		$status = $this->StateChange->find('first',
			array('order' => array('when desc', 'id desc'), 'fields' => array('id', 'when', 'what')));
		$this->set(compact('status'));
	}

	function eeml_status() {
		$this->status();
	}

	function history() {
		$history = $this->StateChange->find('all',
			array('order' => array('when asc', 'id asc'), 'fields' => array('id', 'when', 'what')));
		$this->set(compact('history'));
	}

	function submit($value) {
		$data = explode('!', $value);
		if (count($data) == 3) {
			$mac = hash_hmac('sha256', "{$data[0]}!{$data[1]}", file_get_contents(CONFIGS . 'hacksense.key'));
			if ($data[2] == $mac) {
				$success = $this->StateChange->save(array('StateChange' =>
					array('what' => $data[1], 'id' => $data[0])));
				$erlconf = CONFIGS . 'erlang.php';
				if ($success && file_exists($erlconf) && extension_loaded('peb')) {
					// notify erlang node using mypeb (http://code.google.com/p/mypeb/)
					include($erlconf);
					$link = peb_connect($erlang_node, $erlang_secret);
					if ($link) {
						$msg = peb_vencode('~a', array('hsapi_changed'));
						peb_send_byname('hsapi_listener', $msg, $link);
						peb_close($link);
					}
				}
			} else {
				$success = false;
			}
		} else {
			$success = false;
		}
		$this->set(compact('success'));
	}
}

?>
