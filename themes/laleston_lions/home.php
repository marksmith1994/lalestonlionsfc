<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $this->inc('elements/header.php'); 
?>

<div class="hero<?php if($c->getCollectionTypeName() == 'Home'){ echo ' home'; } ?>">
        
    <div class="hero--content">

        <h1><span class="show">THE</span> <span class="show">HOME</span> <span class="show">OF</span> <span class="show">LALESTON</span> <span class="show">LIONS</span></h1>

    </div>

    <section id="section04" class="scroll-down">
        <a href="#body"><span></span></a>
    </section>
    
</div>

<?php 
    $this->inc('elements/footer.php'); 
?>          