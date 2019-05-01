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
                    <?php echo $form->label('title', t('Title')); ?>
                    <div class="controls"><?php echo $form->text('title', $title, array('style' => 'width:100%; height:30px;')); ?></div>
                </div>

                <div class="control-group">
                    <?php echo $form->label('content', t('Content')); ?>
                    <div class="controls">
                        <?php echo $form->textarea('content_h', $controller->getContent(true), array('class'=>'ccm-advanced-editor')); ?>
                    </div>
                </div>
                
                <div class="control-group">
                    <?php echo $form->label('buttonText', t('Button Text')); ?>
                    <div class="controls"><?php echo $form->text('buttonText', $buttonText, array('style' => 'width:100%; height:30px;')); ?></div>
                </div>
                
                <div class="control-group">
                    <?php echo $form->label('isExternalURL', t('Is external URL?')); ?>
                    <div class="controls"><?php echo $form->checkbox('isExternalURL', '1', $isExternalURL); ?></div>
                </div>

                <div class="control-group">
                    <?php echo $form->label('externalURL', t('External URL (inc. http://)')); ?>
                    <div class="controls"><?php echo $form->text('externalURL', $externalURL, array('style' => 'width:100%; height:30px;')); ?></div>
                </div>
                
                <div class="control-group">
                    <?php echo $form->label('', t('Choose Page to Link To')); ?>
                    <div class="controls">
                        <?php echo $pageSelector->selectPage('linkCID', $linkCID); ?>
                    </div>
                </div>

                <div class="control-group">
                    <?php echo $form->label('', t('Choose Image (500px x 300px)')); ?>
                    <div class="controls">	
                        <?php echo $al->image('ccm-b-image', 'fID', t('Choose Image'), $controller->getFileObject($fID)); ?>
                    </div>
                </div>

                <div class="control-group">
                    <?php echo $form->label('reverseLayout', t('Reverse layout?')); ?>
                    <div class="controls">
                        <?php echo $form->checkbox('reverseLayout', '1', $reverseLayout); ?>
                    </div>
                </div>

            </fieldset>

        </div>

    </div>

</div>