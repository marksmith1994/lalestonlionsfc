<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $this->inc('elements/header.php'); 

    // if($c->getAttribute("banner_image")){
    //     $bannerImage = $c->getAttribute("banner_image")->getRelativePath();
    // }else{
    //     $banenrImage = '';
    // }
?>

<div class="hero <?php if($c->getCollectionTypeName() == 'Home'){ echo ' home'; } ?>"">
    
    <img src="application/themes/laleston_lions/images/banner-images/HOMEPAGEBANNER.jpg" alt="homepage background" />
    
</div>

<div class="main-container">

    <div class="row">

            <div class="small-12 column">

            <div class="info-block">

                <div class="info-content">
                    <div class="info-content-inner">
                        <h2>Fancy a game?</h2>
                        <p>We are always open for a friendly in the pre season, and maybe in between if we are free, Why not contact us and arrange a game!</p>
                        <a class="button black" href="/contact-us">Contact us</a>
                    </div>
                </div>

                <div class="info-image">
                    <img src="http://placehold.it/400x250" />
                </div>

            </div>

            <div class="info-block reverse">

                <div class="info-content">
                    <div class="info-content-inner">
                        <h2>Want to sponsor?</h2>
                        <p>We are a Sunday League Team from Bridgend, if you are a business owner wanting to get your name around the town, we can help by advertising your business on our kits.</p>
                        <a href="/contact-us" class="button black">Contact us</a>
                    </div>
                </div>

                <div class="info-image">
                    <img src="http://placehold.it/400x250" />
                </div>

            </div>

        </div>

    </div>

</div>

<?php
        // echo '<pre>' . print_r('here' . $loadUrl, true) . '</pre>'; 
    $this->inc('elements/footer.php'); 
?>          