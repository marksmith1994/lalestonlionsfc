<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    
    if ($c->getCollectionAttributeValue('replace_link_with_newest_child')) {
        Loader::model('page_list');
        
        $pl = new PageList();
        $pl->setItemsPerPage(1);
        $pl->sortByPublicDateDescending();
        $pl->filterByParentID($c->getCollectionID());
        $pl->filter('cvDatePublic', date('Y-m-d H:i:s'), '<');
        
        if (($pages = $pl->getPage())) {
            $nh = Loader::helper('navigation');
            header('Location: '.$nh->getCollectionURL($pages[0]));
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
?>
<!DOCTYPE html>
<head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NGXPR88');</script>
        <!-- End Google Tag Manager -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laleston Lions FC</title>
        <?php Loader::element('header_required'); ?>
        <!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers--> 
        
        <?php if ($c->getAttribute('no_index')) { ?>
        <meta name="robots" content="NOINDEX" />
        <?php } ?>
        
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <?php if (isset($_COOKIE['cookieComplianceStatus']) && $_COOKIE['cookieComplianceStatus'] == 'true') { ?>
        <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
        <?php } ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/site.css?v1.01">
        <script type="text/javascript" src="<?=ASSETS_URL_JAVASCRIPT?>/jquery.js"></script>

    </head>
    <body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGXPR88"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <svg style="position: absolute; width: 0; height: 0;" aria-hidden="true">

        <symbol id="icon-facebook" viewBox="0 0 32 32">
            <title>facebook</title>
            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
        </symbol>

        <symbol id="icon-instagram" viewBox="0 0 32 32">
            <title>instagram</title>
            <path d="M16 13.152c-1.547 0-2.848 1.266-2.848 2.848 0 1.547 1.266 2.848 2.848 2.848 1.547 0 2.848-1.266 2.848-2.848-0.035-1.582-1.301-2.848-2.848-2.848 0 0 0 0 0 0zM22.611 10.971c-0.281-0.738-0.879-1.336-1.618-1.618-0.492-0.176-1.020-0.281-1.582-0.281-0.914-0.035-1.16-0.035-3.446-0.035s-2.532 0-3.446 0.035c-0.527 0-1.090 0.105-1.582 0.281-0.738 0.281-1.336 0.879-1.618 1.618-0.176 0.492-0.281 1.055-0.281 1.582-0.035 0.914-0.035 1.16-0.035 3.446s0 2.532 0.035 3.446c0 0.527 0.105 1.055 0.281 1.582 0.281 0.738 0.879 1.336 1.618 1.618 0.492 0.176 1.055 0.281 1.582 0.281 0.914 0.035 1.16 0.035 3.446 0.035s2.532 0 3.446-0.035c0.527 0 1.055-0.105 1.582-0.281 0.387-0.141 0.703-0.352 0.985-0.633s0.492-0.598 0.633-0.985c0.176-0.492 0.281-1.055 0.281-1.582 0.035-0.914 0.035-1.16 0.035-3.446s0-2.532-0.035-3.446c0-0.527-0.070-1.055-0.281-1.582zM16 20.36c-2.426 0-4.36-1.969-4.36-4.36s1.969-4.36 4.36-4.36c2.391 0 4.36 1.969 4.36 4.36s-1.934 4.36-4.36 4.36c0 0 0 0 0 0zM20.536 12.484c-0.563 0-1.020-0.457-1.020-1.020s0.457-1.020 1.020-1.020c0.563 0 1.020 0.457 1.020 1.020 0 0 0 0 0 0 0 0.563-0.457 1.020-1.020 1.020 0 0 0 0 0 0zM16 0c-8.826 0-16 7.174-16 16s7.174 16 16 16 16-7.174 16-16v0c0-8.826-7.174-16-16-16zM24.44 19.481c0 0.703-0.141 1.407-0.387 2.075-0.457 1.125-1.336 2.040-2.497 2.497-0.668 0.246-1.371 0.387-2.075 0.387-0.914 0.035-1.196 0.035-3.516 0.035s-2.602 0-3.516-0.035c-0.703 0-1.407-0.141-2.075-0.387-0.563-0.211-1.090-0.563-1.512-0.985s-0.774-0.949-0.985-1.512c-0.246-0.668-0.387-1.371-0.387-2.075-0.035-0.914-0.035-1.196-0.035-3.516s0-2.602 0.035-3.516c0-0.703 0.141-1.407 0.387-2.075 0.457-1.125 1.336-2.040 2.497-2.497 0.668-0.246 1.371-0.387 2.075-0.387 0.914-0.035 1.196-0.035 3.516-0.035s2.602 0 3.516 0.035c0.703 0 1.407 0.141 2.075 0.387 0.563 0.211 1.090 0.563 1.512 0.985s0.774 0.949 0.985 1.512c0.246 0.668 0.387 1.371 0.387 2.075 0.035 0.914 0.035 1.196 0.035 3.516s0 2.637-0.035 3.516z"></path>
        </symbol>

        <symbol id="icon-twitter" viewBox="0 0 32 32">
            <title>twitter</title>
            <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
        </symbol>


    </svg>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>

            <div class="main__header">

                <div class="main-header__item main-header__item--left">
                    <a href="/" class="main-header-logo">Laleston Lions</a>
                </div>

                <nav class="main-nav" role="navigation">
                
                    <?php
                        $bt = BlockType::getByHandle('autonav');
                        $bt->controller->displayPages = 'top';
                        $bt->controller->orderBy = 'display_asc';
                        $bt->render('templates/mobile_menu');
                    ?>
                
                </nav>

                <div class="burger-container">
                    <div>
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>

                <div class="mobile-menu">
                    <?php
                        $bt = BlockType::getByHandle('autonav');
                        $bt->controller->displayPages = 'top';
                        $bt->controller->orderBy = 'display_asc';
                        $bt->render('templates/mobile_menu');
                    ?>
                </div>

            </div>

        </header>
