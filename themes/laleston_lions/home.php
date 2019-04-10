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
        
    <div class="hero--content">

        <!-- <h1><span class="show">THE</span> <span class="show">HOME</span> <span class="show">OF</span> <span class="show">LALESTON</span> <span class="show">LIONS</span></h1> -->

    </div>

    
</div>

<?php 
    $this->inc('elements/footer.php'); 
?>          