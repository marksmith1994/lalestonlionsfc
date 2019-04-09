<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $this->inc('elements/header.php'); 

    if($c->getAttribute("banner_image")){
        $bannerImage = $c->getAttribute("banner_image")->getRelativePath();
    }else{
        $banenrImage = '';
    }
?>

<div class="hero"  style="background-image: url('<?php echo $bannerImage?>')">
        
    <div class="hero--content">
        <h1><span class="show">MEET</span> <span class="show">THE</span> <span class="show">LIONS</span></h1>
    </div>

    <section id="section04" class="scroll-down">
        <a href="#body"><span></span></a>
    </section>

</div>

<div class="team-container">
    
    <div class="header-border black">
        <span></span>
        <h2><?php echo $c->getCollectionName(); ?></h2>
    </div>

    <div class="row">

        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
            
            <?php 
                $a = new Area('Main Area Block');
                $a->display($c);
            ?>
            
        <ul>

    </div>

</div>


<?php  $this->inc('elements/footer.php'); ?>