<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $this->inc('elements/header.php'); 
?>

<div class="hero">
        
    <div class="hero--content">
    
        <h1><span class="show">THE</span> <span class="show">LIONS</span> <span class="show">RESULTS</span></h1>

    </div>
        
    <section id="section04" class="scroll-down">
            <a href="#body"><span></span></a>
        </section>
</div>

<?php 
    $a = new Area('Main Area Block');
    $a->display($c);
?>

<?php  $this->inc('elements/footer.php'); ?>