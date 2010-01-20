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
					array('what' => $data[1], 'uuid' => $data[0])));
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
