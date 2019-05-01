<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $this->inc('elements/header.php'); 

    if($c->getAttribute("banner_image")){
        $bannerImage = $c->getAttribute("banner_image")->getRelativePath();
    }else{
        $banenrImage = '';
    }
?>

<div class="hero <?php if($c->getCollectionTypeName() == 'Home'){ echo ' home'; } ?>"">
    
    <img src="<?php echo $bannerImage?>" alt="homepage background" />
    
</div>

<div class="" id="post-wall">
</div>

<?php
        // echo '<pre>' . print_r('here' . $loadUrl, true) . '</pre>'; 
    $this->inc('elements/footer.php'); 
?>          