<?php
if ($c->getAttribute('hero_banner_fileset')){
        $file_set	= FileSet::getByID($c->getAttribute('hero_banner_fileset'));
        $l = new FileList();
        $l->filterBySet($file_set);
        $l->sortByFileSetDisplayOrder();
        $files = $l->get();     
    }

    if($c->getCollectionAttributeValue('hero_content')){
        $heroContent = $c->getCollectionAttributeValue('hero_content');
    }

    $section = MultilingualSection::getCurrentSection(); 
    $language = $section->cPath;
?>

<div class="full-page-banner">

    <div class="fp-container">
        
        <div class="fp-image-container">    
        <?php 
        foreach($files as $f) 
        {
        ?>
            <img src="<?php echo $f->getRelativePath();?>">
        <?php 
        }     
        ?>
        </div>

        <div class="fp-content">
            <?php echo $heroContent; ?>
        </div>

    </div>

    <div class="header--social-links">

            <a href="https://www.facebook.com/pages/Bryngarw-House-Hotel/160749470635266" target="_blank">
                <svg class="icon icon-facebook, brand1, social1">
                    <use xlink:href="#icon-facebook"></use>
                </svg>
            </a>

            <a href="https://www.instagram.com/bryngarwhouse/" target="_blank">
                <svg class="icon icon-instagram">
                    <use xlink:href="#icon-instagram"></use>
                </svg>
            </a>

        </div>

        <a class="hero-scroll-down">
            <?php
                if($language == "/en"){
                    echo '<p>Scroll Down</p>';
                }else{
                    echo '<p>Sgroliwch i Lsawr</p>';
                }
            ?>
            
        </a>
    
    </div>

</div>
