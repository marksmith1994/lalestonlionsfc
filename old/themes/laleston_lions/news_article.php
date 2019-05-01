<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $this->inc('elements/header.php');
    $nh = Loader::helper('navigation');
    $URL = $nh->getCollectionURL($c);

    if ($c->getAttribute('news_feature_image')) {
        $feature_image = $c->getAttribute('news_feature_image')->getRelativePath();
    } else {
        $feature_image = false;
    }
    
?>
<div class="news-article">

    <div class="row">

        <div data-aos="fade-up" data-aos-duration="1000" class="landing-page-article" style="background-image:url(<?php echo $feature_image?>);">

            <div class="opacity"></div>
            
            <div class="news-article--title">    
                <p class="news-article-date white"><?php echo $c->getCollectionDatePublic('jS F Y'); ?></p>
                <h2 class="white"><?php echo $c->getCollectionName(); ?></h2>
            </div>

        </div>

        <div class="news-main">
            <div class="global-margin">
            <?php 
                $a = new Area('Main Body');
                $a->setBlockWrapperStart('<div data-aos="fade-up" data-aos-duration="1000" ><div class="row"><div class="small-12 medium-10 medium-centered column"><p>');
                $a->setBlockWrapperEnd('</p></div></div></div>');
                $a->display($c); 
            ?>
            </div>

        </div>

    </div>

</div>


<?php if (!empty($latest)) { ?>

    
    <div class="news-grid-blogs related-posts">

        <div class="row">

            <div class="related-posts--title">
            
                <h2>You may also like...</h2>
                <a class="right" href="/news">View all news</a>

            </div>
        	
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">

                <?php foreach ($latest as $p) { ?>

                <li data-aos="fade-up" data-aos-duration="1000">
                    <a class="news-content--link" href="<?php echo $p['url']; ?>">
                        <div class="news-image-container">
                            <img src="<?php echo ($p['img']) ? $p['img']->src : '/themes/weholite/images/bluelogo.png'; ?>">
                        </div> 
                        <div class="news-content-container">                                             
                            <p class="news-content--title blue"><?php echo $p['title']; ?></p>
                        </div>      
                        </a>
                </li>
                
                <?php } ?>

            </ul>

        </div>        
        
    </div>

<?php } ?>

<script>
	var featureImageWrap = document.querySelector('.news-article-image');
	var featureImage = featureImageWrap.querySelector('img');

	if(typeof featureImage !== 'undefined' && featureImage !== null ) {
		var featureImageSrc = featureImage.getAttribute('src');
		featureImageWrap.style.backgroundImage = 'url(' + featureImageSrc + ')';
	}
</script>

<?php $this->inc('elements/footer.php'); ?>