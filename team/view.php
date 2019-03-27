<?php 
    defined('C5_EXECUTE') or die ('Access Denied');
?>


<div class="team-container">

    <div class="row">

        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">

            <?php 
            foreach ($items as &$item) { 
                $name       =   $item['name'];
                $position   =   $item['position'];
                $played     =   $item['played'];
                $scored     =   $item['scored'];
                $points     =   $item['points'];
            ?>
            <!-- <img src="<?php echo $item['image']->getRelativePath(); ?>" alt="<?php echo $name; ?>">     -->
                <li>
                    <div class="team-member">
                        <div class="player-details">
                            <h4 class="position"><?php echo $position;?></h4>
                            <p class="name"><?php echo $name;?></p>
                            <p class="name">Played: <?php echo $played;?></p>
                            <p class="name">Scored: <?php echo $scored;?></p>
                            <p class="name">Points: <?php echo $points;?></p>
                        </div>
                    </div>
                </li>
                
            <?php } ?>

        <ul>

    </div>

</div>
