<?php defined('C5_EXECUTE') or die(_("Access Denied.")); 
?>

<div class="fixture-result">
    <p class="match-type"><?php echo $type;?></p>
    <h3 class="fixture"><?php echo $fixture; ?></h4>
    <p class="date"><?php echo $date;?></p>

    <?php
        if($lalResult != '' || $secondResult != ''){
    ?>
        <div class="score">
            <?php echo $lalResult?> - <?php echo $secondResult?>
        </div>

        <?php echo $extraInfo; ?>
    <?php 
        }
    ?>
</div>