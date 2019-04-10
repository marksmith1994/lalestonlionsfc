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

            <h1><span class="show">THE</span> <span class="show">LATEST</span> <span class="show">LIONS</span> <span class="show">NEWS</span></h1>

        </div>

</div>

    <div class="news-container global-margin">

        <?php
        /*
        <div class="header-border black">
            <span></span>
            <h2><?php echo $c->getCollectionName(); ?></h2>
        </div>
        */
        ?>
        <div class="row">
            
            <div class="small-12 large-centered columns">
                <div id="blog-wall"></div>  
            </div>

        </div>

        <div class="load-more">                   
            <button class="load-more__btn button black" data-nextpage="1">Load more</button>  
        </div>

    </div>
    
    <script>
    
        var $wall       = $('#blog-wall');
        var loaderHTML  = '<div class="loader-wrap"><img src="<?php echo $this->getThemePath(); ?>/images/lionslogo.png" class="loader"></div>';
        var $loadmore   = $('.load-more__btn');
        
        $(function()
        {
            $loadmore.on('click', function() 
            {
                if ($(this).data('nextpage') != 'eor' || $(this).data('nextpage') != 'nr') {
                    getLatest($(this).data('nextpage'));
                }
            });
    
            getLatest(0);
        });
    
        function getLatest(pageNumber) 
        {
            $loadmore.before(loaderHTML);
            $loadmore.fadeOut();
    
            $.ajax({
                
                url: '<?php echo $loadUrl; ?>',
                type: 'GET',
                data: {
                    'cParentID':    '<?php echo $c->getCollectionID(); ?>', 
                    'page':         pageNumber,
                    'latest_date':  '<?php echo $latest['date']; ?>'
                },
                dataType: 'json',
                success: function(data) {
    
                    console.log("date: " + data);
                    setTimeout(function(){
    
                        $('.loader-wrap').fadeOut(function() 
                        {
                            var pageData = '';
    
                            if (data.pages && data.pages != '') {
                                pageData += data.pages;
                                $wall.append(pageData);
                            }
    
                            if (data.nextPage == 'eor') {
                                $loadmore.parent().hide().addClass('eor');
                            } else if (data.nextPage == 'nr' ) {
                                $loadmore.parent().hide();
                                $wall.append('<div class="small-12 columns"><h3 class="text-center no-blogs-message">Sorry no items found. Please try again.</h3></div>');
                            } else {
                                $loadmore.html('Load more').data('nextpage', data.nextPage).fadeIn(200);
                            }
    
                            $('.loader-wrap').remove();
    
                        });
                    }, 0);
                }
            });
        }
    
    </script>

<?php $this->inc('elements/footer.php'); ?>