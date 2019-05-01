<?php 
defined('C5_EXECUTE') or die("Access Denied.");

class HomePageTypeController extends Controller 
{

    public function on_start() 
    {
        $cu = Loader::helper('concrete/urls');
        $loadUrl = '/index.php' . $cu->getToolsURL('get-posts');
        $this->set('loadUrl', $loadUrl);
        echo '<pre>' . print_r($posts, true) . '</pre>';
    }

    // public function getLatestPosts() 
    // {   
    //     return $posts;
    // }

    public function view() 
    {
        echo '<pre>' . print_r($posts, true) . '</pre>';
        // $this->set('posts', $this->getLatestPosts());
    }

}