<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    $al = Loader::helper('concrete/asset_library');

?>

<div class="ccm-ui">

    <div class="ccm-pane">
        
        <div class="ccm-pane-body">

            <fieldset>

                <div class="control-group">
                    <?php echo $form->label('month', t('Month (Short hande.g. Aug)')); ?>
                    <div class="controls"><?php echo $form->text('month', $month, array('style' => 'width:100%; height:30px;')); ?></div>
                </div>

            </fieldset>

        </div>

    </div>

</div>