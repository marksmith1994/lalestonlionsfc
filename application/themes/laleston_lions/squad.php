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
            
        <li class="slide-container">

            <div class="team-member" style="background-image: url('/application/themes/laleston_lions/images/player-placeholder.jpg');">
                <div class="player-details">
                    <h4 class="position">GK</h4>
                    <p class="name">Owain Evans</p>
                    <p class="name">Matches Played: 0</p>
                    <p class="name">Goals Scored: 0</p>
                    <p class="name">Fantasy Points: 0</p>
                </div>
            </div>
            
        </li>
        
    <ul>

</div>


<?php  $this->inc('elements/footer.php'); ?>