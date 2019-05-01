<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $this->inc('elements/header.php'); 

    if($c->getAttribute("banner_image")){
        $bannerImage = $c->getAttribute("banner_image")->getRelativePath();
    }else{
        $banenrImage = '';
    }
?>

<div class="hero photo-image"  style="background-image: url('<?php echo $bannerImage?>')">
        
    <div class="hero--content">
        <h1><span class="show">MEET</span> <span class="show">THE</span> <span class="show">LIONS</span></h1>
    </div>

</div>

<div class="team-container global-margin">

    <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4 team-member-container">
        
        <?php 
            $a = new Area('Main Area Block');
            $a->display($c);
        ?>
        
    <ul>

</div>


<?php  $this->inc('elements/footer.php'); ?>