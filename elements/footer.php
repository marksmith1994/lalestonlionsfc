<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    Loader::element('footer_required');

    $section = MultilingualSection::getCurrentSection(); 
    $language_id = $section->cID;
    $langauge_path = $section->cPath;

    if($language_id == 152){
        $hpo = Loader::helper('site')->getHomePageObject();
    }else{
        $hpo = Loader::helper('site')->getWelshPageObject();

    }

    $pageLinks = $hpo->getAttribute('page_links', 'pageLinkArray');
    $copyright = $hpo->getAttribute('copyright', 'pageLinkArray');

    $sh = Loader::helper('site');
    $contactEmail = $sh->getHomePageObject()->getAttribute('contact_email_address');
    $contactNumber = $sh->getHomePageObject()->getAttribute('contact_telephone_number');

	$this->inc('elements/request.php'); 
    ?>

    <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/js/min/site-min.js"></script>
    <footer>

            <div class="footer--social-links">

                <a href="https://www.instagram.com/explore/locations/2911344/bryngarw-country-park/" target="_blank">
                    <svg class="icon icon-facebook, brand1, social1">
                        <use xlink:href="#icon-facebook"></use>
                    </svg>
                </a>

                <a href="https://www.instagram.com/explore/locations/2911344/bryngarw-country-park/" target="_blank">
                    <svg class="icon icon-instagram">
                        <use xlink:href="#icon-instagram"></use>
                    </svg>
                </a>

            </div>

            <ul class="page-links">
                <?php foreach ($pageLinks as $pl) { ?>
                <li class="page-links__item">
                    <a href="<?php echo $pl['url']; ?>" class="page-links__item"><?php echo $pl['name']; ?></a>
                </li>
                <?php } ?>
            </ul>          

            <div class="contact-details">
                <?php
                if($langauge_path == "/en"){
                    echo '<p>Get in touch</p>';
                }elseif($langauge_path == "/cy"){
                    echo '<p>Cysylltwch â ni</p>';
                }
                ?>
                <p>T: <a href="tel:<?php echo $contactNumber; ?>"><?php echo $contactNumber; ?></a></p>
                <p>E: <a href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a></p>
            </div>

            <a href="#top" class="scroll-up"><svg class="icon icon-cheveron-up"><use xlink:href="#icon-cheveron-up"></use></svg></a>

            <div class="copyright-section">

                <ul class="copyright-links">
                    <li class="copyright-links__item">&copy;<?php echo date("Y") . "\n" . SITE; ?></li>
                    <?php foreach ($copyright as $cr) { ?>
                    <li class="copyright-links__item">
                        <a href="<?php echo $cr['url']; ?>" class="page-links__item"><?php echo $cr['name']; ?></a>
                    </li>
                    <?php } ?>
                </ul>

                <div class="lgt-link">
                    <p><a href="htttp://www.limegreentangerine.co.uk">Made by Limegreentangerine</a></p>
                </div>

            </div>

    </footer>
    </body>
</html>

