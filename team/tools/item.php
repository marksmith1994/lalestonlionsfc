<?php
    // init
    defined('C5_EXECUTE') or die ('Access Denied'); 
    $fh = Loader::helper('form');
    $al = Loader::helper('concrete/asset_library');

    Loader::element('editor_init');
    Loader::element('editor_config', array('editor_mode' => 'CUSTOM'));
?>


                $points     =   $item['points'];

<div class="item">

    <!-- delete -->
    <a href="#" class="btn error delete">Delete</a>

    <!-- fid -->
    <div class="control-group" data-name="fID">
        <?php echo $fh->label('fID', t('Image')); ?>
        <div class="controls">
            <?php echo $al->image(uniqid(), 'fID', t('Choose Image'), File::getByID($item['fID'])); ?>
        </div>
    </div>

    <!-- name -->
    <div class="control-group" data-name="name">
        <?php echo $fh->label('name', t('Team Member Name')); ?>
        <div class="controls">
            <?php echo $fh->text('name', $item['name']); ?>
        </div>
    </div>

    <!-- position -->
    <div class="control-group" data-name="position">
        <?php echo $fh->label('position', t('Team Member Position')); ?>
        <div class="controls">
            <?php echo $fh->text('position', $item['position']); ?>
        </div>
    </div>

    <!-- Games Played -->
    <div class="control-group" data-name="played">
        <?php echo $fh->label('played', t('Games Played')); ?>
        <div class="controls">
            <?php echo $fh->text('played', $item['played']); ?>
        </div>
    </div>

    <!-- Fantasy Points -->
    <div class="control-group" data-name="points">
        <?php echo $fh->label('points', t('Fantasy Points')); ?>
        <div class="controls">
            <?php echo $fh->text('points', $item['points']); ?>
        </div>
    </div>

</div>