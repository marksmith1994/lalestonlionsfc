<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $this->inc('elements/header.php'); 

    if($c->getAttribute("banner_image")){
        $bannerImage = $c->getAttribute("banner_image")->getRelativePath();
    }else{
        $banenrImage = '';
    }
?>

<div class="hero" style="background-image: url('<?php echo $bannerImage?>')">
        
    <div class="hero--content">
    
        <h1><span class="show">THE</span> <span class="show">LIONS</span> <span class="show">RESULTS</span></h1>

    </div>
        
</div>

<div class="header-border">
    <span></span>
    <h2><?php echo $c->getCollectionName(); ?></h2>
</div>

<?php 
    $a = new Area('Main Area Block');
    $a->display($c);
?>

<?php  $this->inc('elements/footer.php'); ?>