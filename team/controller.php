<?php 
// init
defined('C5_EXECUTE') or die ('Access Denied');

// controller
class TeamBlockController extends BlockController {
	protected $btTable = 'btTeam';
	protected $btInterfaceWidth = '800';
	protected $btInterfaceHeight = '600';
	protected $btWrapperClass = 'ccm-ui';

	public function getBlockTypeName() {

		return t('Add a team block');

	}

	public function getBlockTypeDescription() {
		return t('Add a team block to a page');
	}

	public function on_start() {
		$items = unserialize($this->items);
		$this->set('items', $items);
	}

	public function save($data) {
		$data['items'] = serialize($data['items']);
		parent::save($data);
	}

	public function getContent($edit_mode = false) {
		if( $edit_mode ) {
			return Loader::helper('content')->translateFromEditMode($this->content);
		} else {
			return Loader::helper('content')->translateFrom($this->content);
		}
	}
	
	function contentSave($data) {
		$ch = Loader::helper('content');
		$data['content'] = $ch->translateTo($data['content']);
		parent::contentSave($data);
	}
	

	public function view() {
		// process
		$items = unserialize($this->items);
		foreach ($items as &$item) {
			$item['image'] = File::getByID($item['fID']);
		}

		// set
		$this->set('items', $items);
	}
}