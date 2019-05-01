<?php defined('C5_EXECUTE') or die(_("Access Denied."));
	
class LeagueDetailsBlockController extends BlockController 
{
	
	protected $btTable = 'btLeagueDetails';
	protected $btInterfaceWidth = '800';
	protected $btInterfaceHeight = '600';
	protected $btWrapperClass = 'ccm-ui';

	public function getBlockTypeName() {
		return t('League Information');
	}

	public function getBlockTypeDescription() 
	{
		return t('League position and league information block');
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