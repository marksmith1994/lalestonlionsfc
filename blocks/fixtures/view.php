<?php defined('C5_EXECUTE') or die(_("Access Denied.")); 
?>

<div class="fixture-result">
    <p class="match-type"><?php echo $game_type;?></p>
    <h2 class="fixture">Laleston Lions FC vs <?php echo $fixture; ?></h2>
    <p class="date"><?php echo $date;?></p>

    <?php
        if($lalResult != '' || $secondResult != ''){
    ?>
        <div class="score">
            <span><?php echo $lalResult?> - <?php echo $secondResult?></span>
        </div>

        <?php echo $extraInfo; ?>
    <?php 
        }
    ?>
</div>