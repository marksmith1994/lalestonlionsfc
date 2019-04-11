<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    $al = Loader::helper('concrete/asset_library');
    $pageSelector = Loader::helper('form/page_selector');
    Loader::element('editor_init');
    Loader::element('editor_config', array('editor_mode' => 'CUSTOM'));

    $gameType = array('Cup Match' => 'Cup','Friendly' => 'Friendly', 'League Match' => 'League');
?>

<div class="ccm-ui">

    <div class="ccm-pane">
        
        <div class="ccm-pane-body">

            <fieldset>

                <div class="control-group">
                    <?php echo $form->label('game_type', t('Type of fixture?')); ?>
                    <div class="controls">
                        <?php echo $form->select('game_type', $gameType, $game_type); ?>
                    </div>
                </div>

                <div class="control-group">
                    <?php echo $form->label('fixture', t('Against who?')); ?>
                    <div class="controls">
                        <?php echo $form->text('fixture', $fixture, array('style' => 'width:100%; height:30px;')); ?>
                    </div>
                </div>
                
                <div class="control-group">
                    <?php echo $form->label('date', t('Date of Fixture')); ?>
                    <div class="controls">
                        <?php echo $form->text('date', $date, array('style' => 'width:100%; height:30px;')); ?>
                    </div>
                </div>


                <div class="control-group">
                    <?php echo $form->label('lalResult', t('Laleston Lions Score?')); ?>
                    <div class="controls">
                        <?php echo $form->text('lalResult', $lalResult, array('style' => 'width:100%; height:30px;')); ?>
                    </div>
                </div>

                <div class="control-group">
                    <?php echo $form->label('secondResult', t('Second Team Score?')); ?>
                    <div class="controls">
                        <?php echo $form->text('secondResult', $secondResult, array('style' => 'width:100%; height:30px;')); ?>
                    </div>
                </div>

                <div class="control-group">
                        <?php echo $form->label('extraInfo', 'Game Description (Goal scorers, Cards?)'); ?>
                    <div class="controls">
                        <?php Loader::element('editor_controls'); ?>
                        <?php echo $form->textarea('extraInfo', $controller->getContent(true), array('class'=>'ccm-advanced-editor')); ?>
                    </div>
                </div>

            </fieldset>

        </div>

    </div>

</div>