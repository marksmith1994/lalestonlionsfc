<?php 
    defined('C5_EXECUTE') or die(_("Access Denied.")); 

?>

<div class="info-block <?php echo ($reverseLayout == 1) ? 'reverse' : ''; ?>">

    <div class="info-content">

        <div class="info-content-inner">
            <h2><?php echo $title; ?></h2>
            <?php echo $controller->getContent(); ?>

            <?php 
                $url = $pageLink;
                if(!empty($url)){
            ?>
                <a href="<?php echo $url; ?>" target="<?php echo $pageLink['target']; ?>" class="button black"><?php echo (strlen($buttonText) > 0) ? $buttonText : 'More info'; ?></a>
            <?php 
                }
            ?>
        </div>

    </div>

    <div class="info-image">
        <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
    </div>

</div>