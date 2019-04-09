<?php defined('C5_EXECUTE') or die(_("Access Denied.")); 


?>

<li>
    <div class="team-member" style="background-image: url('<?php echo $image; ?>');">
        <div class="player-details">
            <h4 class="position"><?php echo $position;?></h4>
            <p class="name"><?php echo $name;?></p>
            <p class="name">Matches Played: <?php echo $played;?></p>
            <p class="name">Goals Scored: <?php echo $scored;?></p>
            <p class="name">Fantasy Points: <?php echo $points;?></p>
        </div>
    </div>
</li>