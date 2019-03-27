<?php

// init
defined('C5_EXECUTE') or die ('Access Denied');

?>

<!-- css -->
<style type="text/css">

    .item { background: rgba(0, 0, 0, 0.05); padding: 2em; border-radius: 0.25em; margin-bottom: 1em; position: relative; }
    .item .delete { position: absolute; left: 1em; bottom: 1em; }
    .item textarea { width: 100%; min-height: 100px; display: block; }
    .item .control-group:last-child { margin-bottom: 0; }

</style>

<!-- items -->
<div id="items">
    <?php 
        foreach ($items as $item) $this->inc('tools/item.php', array('item' => $item)); 
    ?>
</div>

<!-- add -->
<a class="btn" id="add">Add</a>