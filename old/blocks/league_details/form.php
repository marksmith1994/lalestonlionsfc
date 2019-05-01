<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    $al = Loader::helper('concrete/asset_library');
    $pageSelector = Loader::helper('form/page_selector');
    Loader::element('editor_init');
    Loader::element('editor_config', array('editor_mode' => 'CUSTOM'));
?>

<div class="ccm-ui">

    <div class="ccm-pane">
        
        <div class="ccm-pane-body">

            <fieldset>

                <div class="control-group">
                    <?php echo $form->label('name', t('League Name')); ?>
                    <div class="controls"><?php echo $form->text('name', $name, array('style' => 'width:100%; height:30px;')); ?></div>
                </div>

                <div class="control-group">
                    <?php echo $form->label('position', t('League Position')); ?>
                    <div class="controls"><?php echo $form->text('position', $position, array('style' => 'width:100%; height:30px;')); ?></div>
                </div>

            </fieldset>

        </div>

    </div>

</div>