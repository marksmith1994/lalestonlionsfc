<?php defined('C5_EXECUTE') or die(_("Access Denied."));
	
class FixturesBlockController extends BlockController 
{
	
	protected $btTable = 'btFixtures';
	protected $btInterfaceWidth = '800';
	protected $btInterfaceHeight = '600';
	protected $btWrapperClass = 'ccm-ui';

	public function getBlockTypeName() {
		return t('Fixture/Results');
	}

	public function getBlockTypeDescription() 
	{
		return t('Add a Fixture or Result block');
	}
	
	/**
	 * get file object
	 */
	public function getFileObject() {
		return File::getByID( $this->fID );
	}
	
	public function getContent($edit_mode = false) 
	{
		if( $edit_mode ) {
			return Loader::helper('content')->translateFromEditMode($this->extraInfo);
		} else {
			return Loader::helper('content')->translateFrom($this->extraInfo);
		}
	}
	
	function save($data) 
	{
		$ch = Loader::helper('content');
		$data['extraInfo'] = $ch->translateTo($data['extraInfo']);
		parent::save($data);
	}
	
	public function view() 
	{

	}
}