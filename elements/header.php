<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    $u = new User();
    
    
    if ($c->getCollectionAttributeValue('replace_link_with_newest_child')) {
        $nh = Loader::helper('navigation');
        
        $child = $c->getRecentChild();
        if ($child instanceof Page) {
            header('Location: '.$nh->getLinkToCollection($child));
            exit();
        }
    }

    if ($c->getAttribute('replace_link_with_first_in_nav')) {
        $nh = Loader::helper('navigation');
        
        $child = $c->getFirstChild();
        if ($child instanceof Page) {
            header('Location: '.$nh->getLinkToCollection($child));
            exit();
        }
    }

    $section = MultilingualSection::getCurrentSection(); 
    $language_id = $section->cID;
    $langauge_path = $section->cPath;
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo LANGUAGE?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php echo LANGUAGE?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php echo LANGUAGE?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo LANGUAGE?>"> <!--<![endif]-->
    <head>
        <?php Loader::element('header_required'); ?>
        <link href="<?php echo $this->getThemePath(); ?>/css/site.css?v1.21" type="text/css" rel="stylesheet" media="screen, print, projection" />
        <link rel="stylesheet" href="https://use.typekit.net/rmb0wyw.css">
        
        <link rel="stylesheet" href="https://s3.amazonaws.com/icomoon.io/26747/BryngarwHouse/style-svg.css?bmc2h9">
        <script defer src="https://s3.amazonaws.com/icomoon.io/26747/BryngarwHouse/svgxuse-s3.js?bmc2h9"></script>

        <link href="https://fonts.googleapis.com/css?family=Lancelot&amp;subset=latin-ext" rel="stylesheet">

        <!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers--> 
        <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/js/css3-mediaqueries.js"></script>
        
        <?php if ($c->getAttribute('no_index')) { ?>
        <meta name="robots" content="NOINDEX" />
        <?php } ?>
        
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="<?php echo $c->getCollectionHandle() ?> <?php if ($c->isEditMode()) { echo "loaded edit-mode"; } ?>">
    
    <?php
        $this->inc('elements/icons.php'); 

    ?>

    <header>
    
        <div class="main__header">
            
            <div class="main-header__item main-header__item--left">
                <?php
                    if($langauge_path == "/en"){
                        echo '<a href="/en" class="main-header-logo"><?php echo SITE; ?></a>';
                    }elseif($langauge_path == "/cy"){
                        echo '<a href="/cy" class="main-header-logo"><?php echo SITE; ?></a>';
                    }
                ?>
                
            </div>

            <nav class="main-nav" role="navigation">
                <?php
                    $bt = BlockType::getByHandle('autonav');
                    $bt->controller->displayPages = 'custom';
                    $bt->controller->displayPagesCID =  $language_id;
                    $bt->controller->orderBy = 'display_asc';
                    $bt->render('templates/header_menu.php');
                    $bt = BlockType::getByHandle('switch_language' );
                    $bt->render('templates/language-switcher-desktop');
                ?>
                

            </nav>
                            
            <div class="button_container" id="toggle">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>

            <div class="overlay" id="overlay">
                <nav class="overlay-menu">
                    <?php
                        if($langauge_path == "/en"){
                            echo '<ul><li><a href="/">Home</a></li>';
                        }elseif($langauge_path == "/cy"){
                            echo '<ul><li><a href="/">Hafan</a></li>';
                        }
                        $bt = BlockType::getByHandle('autonav');
                        $bt->controller->displayPages = 'custom';
                        $bt->controller->displayPagesCID =  $language_id;
                        $bt->controller->orderBy = 'display_asc';
                        $bt->render('templates/header_menu.php');
                        $bt = BlockType::getByHandle('switch_language');
                        $bt->render('templates/language-switcher-mobile');

                    ?>
                </nav>
            </div>

        </div>

    </header>