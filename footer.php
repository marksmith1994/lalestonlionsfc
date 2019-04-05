<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    Loader::element('footer_required');
?>
    <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/js/min/site-min.js"></script>        
    <footer>

        <div class="row">

            <div class="small-12 medium-7 large-5 column large-centered">
                <p class="footer-text"><?php echo  "&copy;" . date("Y ") . SITE .  " All Rights Reserved";?></p>
            </div>

        </div>

        <div class="row">

            <div class="small-12 medium-7 large-5 column large-centered">
                <a  href="https://www.instagram.com/lalestonlionsfc/" target="_blank">
                    <svg class="icon icon-instagram">
                        <use xlink:href="#icon-instagram"></use>
                    </svg>
                </a>
                <a href="https://twitter.com/LalestonLionsFC" target="_blank">
                    <svg class="icon icon-twitter">
                        <use xlink:href="#icon-twitter"></use>
                    </svg>
                </a>
                <a href="https://www.facebook.com/Laleston-Lions-FC-2117728371817972/" target="_blank">
                    <svg class="icon icon-facebook, brand1, social1">
                        <use xlink:href="#icon-facebook"></use>
                    </svg>
                </a>
            </div>

        </div>


    </footer>
    </body>
</html>