<?php defined('C5_EXECUTE') or die(_("Access Denied."));
	
class MonthSeperatorBlockController extends BlockController 
{
	
	protected $btTable = 'btMonthSeperator';
	protected $btInterfaceWidth = '800';
	protected $btInterfaceHeight = '600';
	protected $btWrapperClass = 'ccm-ui';

	public function getBlockTypeName() {
		return t('Month Seperator');
	}

	public function getBlockTypeDescription() 
	{
		return t('Sperate fixtures by months');
	}
	
	/**
	 * get file object
	 */
	public function getFileObject() {
		return File::getByID( $this->fID );
	}
	
	public function view() 
	{

	}
}