<?php defined('C5_EXECUTE') or die(_("Access Denied."));
	
class InfoBoxBlockController extends BlockController 
{
	
	protected $btTable = 'btInfoBox';
	protected $btInterfaceWidth = '800';
	protected $btInterfaceHeight = '600';
	protected $btWrapperClass = 'ccm-ui';

	public function getBlockTypeName() {
		return t('Info Box');
	}

	public function getBlockTypeDescription() 
	{
		return t('Add a Info Box to a page');
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
			$image = '';
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
		
			
	public function getContent($edit_mode = false) 
	{
		if( $edit_mode ) {
			return Loader::helper('content')->translateFromEditMode($this->content_h);
		} else {
			return Loader::helper('content')->translateFrom($this->content_h);
		}
	}
	
	function save($data) 
	{
		$ch = Loader::helper('content');
		$data['content_h'] = $ch->translateTo($data['content_h']);
		parent::save($data);
	}
	
	public function view() 
	{
		$this->set('image', $this->getImage());
		$this->set('pageLink', $this->getLinkUrl());
	}
}