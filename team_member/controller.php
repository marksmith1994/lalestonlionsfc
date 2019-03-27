<?php defined('C5_EXECUTE') or die(_("Access Denied."));
	
class TeamMemberBlockController extends BlockController 
{
	
	protected $btTable = 'btTeamMember';
	protected $btInterfaceWidth = '800';
	protected $btInterfaceHeight = '600';
	protected $btWrapperClass = 'ccm-ui';

	public function getBlockTypeName() {
		return t('Team Member Icon');
	}

	public function getBlockTypeDescription() 
	{
		return t('Add a Player to the Squad Page');
	}
	
	/**
	 * get file object
	 */
	public function getFileObject() {
		return File::getByID( $this->fID );
	}

	/**	
	 * get image from the object
	 */
	public function getImage() 
	{
		if ( $this->fID > 0 ) {
			$image = $this->getFileObject()->getRelativePath();
		} else {
			$image = 'http://placehold.it/500x400';
		}

		return $image;
	}

		
	/**
	 * get page link URL
	*/
	public function getLinkUrl(){
		$nh = Loader::helper( 'navigation' );
		
			if ( $this->linkCID > 0 ) {
	
				$pageLink = $nh->getLinkToCollection( Page::getByID( $this->linkCID ) );
	
			} else {
	
				$pageLink = '';
	
			}

		$target = '_self';

		return $pageLink;
	}
	
	public function view() 
	{
		$this->set('image', $this->getImage());
		$this->set('pageLink', $this->getLinkUrl());
	}
}