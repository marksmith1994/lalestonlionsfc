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

            <?php 
                $a = new Area('Introduction');
                $a->display($c);
            ?>

            <div class="small-12 medium-10 large-8 column medium-centered">

                <form class="form">

                    <div class="row">

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

                    <div class="row">

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

                    <div class="row">
                    
                        <div class="small-12 column medium-centered">

                            <div class="field">
                                <textarea  placeholder="Message"></textarea>
                            </div>

                        </div>

                    </div>
                        
                    <div class="row">

                        <div class="small-12 medium-6 column medium-centered">

                            <div class="field">
                                <button class="button white" type="submit" >Send</button>
                            </div>

                        </div>

                    </div>

                </form>

            </div>

            <?php 
                $a = new Area('Contact Details');
                $a->display($c);
            ?>


            <div class="football-vector">
                <img src="<?php echo $this->getThemePath(); ?>/images/ball-vector.png" />
            </div>

        </div>

    </div>

    <?php 
    $this->inc('elements/footer.php');    
?>
    