<?php 
defined('C5_EXECUTE') or die("Access Denied.");

class NewsPageTypeController extends Controller 
{

    public function on_start() 
    {
        $cu = Loader::helper('concrete/urls');
        $loadUrl = '/index.php' . $cu->getToolsURL('get-latest');
        $this->set('loadUrl', $loadUrl);
    }

    public function getLatestNewsItem() 
    {   
        return $latest;
    }

    public function view() 
    {
        $this->set('latest', $this->getLatestNewsItem());
    }

}