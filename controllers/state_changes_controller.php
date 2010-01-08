<?

class StateChangesController extends AppController {
	var $components = array('RequestHandler');

	function status() {
		$status = $this->StateChange->find('first', array('order' => 'when desc'));
		$this->set(compact('status'));
	}

	function eeml_status() {
		$this->status();
	}

	function history() {
		$history = $this->StateChange->find('all', array('order' => 'when asc'));
		$this->set(compact('history'));
	}
}

?>
