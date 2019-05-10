
    <footer>

        <div class="row">

            <div class="small-12 medium-7 large-5 column medium-centered">
                <p class="footer-text"><?php //echo  "&copy;" . date("Y ") . SITE .  " All Rights Reserved";?></p>
            </div>

        </div>

        <div class="row">

            <div class="small-12 medium-7 large-5 column medium-centered">
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


    <script src="<?php echo $view->getThemePath(); ?>/js/min/site-min.js"></script>        
    <?php Loader::element('footer_required'); ?>
    </footer>
    </body>

</html>