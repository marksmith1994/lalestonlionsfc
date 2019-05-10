<?php
    defined('C5_EXECUTE') or die('Access Denied.');
    $view->inc('elements/header.php');
    
    if($c->getAttribute("banner_image")){
        $bannerImage = $c->getAttribute("banner_image")->getRelativePath();
    }else{
        $banenrImage = '';
    }
?>

<div class="hero" style="background-image: url('<?php echo $bannerImage?>')">
        
    <div class="hero--content">

        <h1><span class="show">CONTACT</span> <span class="show">THE</span> <span class="show">LIONS</span></h1>

    </div>

</div>

    <div id="body" class="contact-body global-margin">

        <?php
        /*
        <div class="header-border black">
            <span></span>
            <h2><?php echo $c->getCollectionName(); ?></h2>
        </div>
        */
        ?>

        <div class="contact-form">

            <h2>FANCY A FRIENDLY?</h2>
            <h2>SPONSORSHIP OPPORTUNITY?</h2>
            <h2>GET IN TOUCH.</h2>


            <div class="small-12 medium-10 large-8 column medium-centered">

                <form class="form">

                    <div class="row collapse">

                        <div class="small-12 medium-6 column">

                            <div class="field">
                                <input type="text" placeholder="Full Name" />
                            </div>

                        </div>

                        <div class="small-12 medium-6 column">

                            <div class="field">
                                <input type="text" placeholder="Email Address" />
                            </div>

                        </div>

                    </div>

                    <div class="row collapse">

                        <div class="small-12 medium-6 column">

                            <div class="field">
                                <input type="text" placeholder="Telephone Number"/>
                            </div>

                        </div>

                        <div class="small-12 medium-6 column">

                            <div class="field">
                                <input type="text"  placeholder="Subject"/>
                            </div>

                        </div>

                    </div>

                    <div class="row collapse">
                    
                        <div class="small-12 column medium-centered">

                            <div class="field">
                                <textarea  placeholder="Message"></textarea>
                            </div>

                        </div>

                    </div>
                        
                    <div class="row collapse">

                        <div class="small-12 medium-6 column medium-centered">

                            <div class="field">
                                <button class="button white" type="submit" >Send</button>
                            </div>

                        </div>

                    </div>

                </form>

            </div>

            <h3>ADDRESS: <a href="https://www.google.com/maps/place/Unnamed+Road,+Bridgend+CF31+3PN/@51.4977738,-3.5910763,17z/data=!3m1!4b1!4m5!3m4!1s0x486e6dd3d9861fa7:0xde2699ca4db81a4e!8m2!3d51.497334!4d-3.5891269" target="_blank">
                NEWBRIDGE FIELDS, BRIDGEND, CF31 3PN</a></h3>
            <h3>EMAIL: <a href="mailto:lalestonlions@gmail.com" target="_blank">LALESTONLIONS@GMAIL.COM</h3>
            <h3>TEL: <a href="tel:07525081817">07525 081 817</a></h3>

            <div class="football-vector">
                <img src="<?php echo $this->getThemePath(); ?>/images/ball-vector.png" />
            </div>

        </div>

    </div>

<?php 
    $view->inc('elements/footer.php');
?>
    