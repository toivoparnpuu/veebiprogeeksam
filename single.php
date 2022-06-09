<?php 
    get_header();
    the_title();
?>

<div class="subpagecontainter">

<?php
    the_content();
?>
</div>
<div class="subpagecontainter">
<div>Kõrgus: 
    <?php 
    echo(get_post_meta(get_the_ID(), $key = 'height', $single = true)); 
    ?> 
</div>
<div>Asukoht: 
    <?php 
    echo(get_post_meta(get_the_ID(), $key = 'location', $single = true)); 
    ?> 
</div>
<div>Kivi tüüp: 
    <?php 
    echo(get_post_meta(get_the_ID(), $key = 'rocktype', $single = true)); 
    ?> 
</div>
<div>Radade arv: 
    <?php 
    echo(get_post_meta(get_the_ID(), $key = 'routes', $single = true)); 
    ?> 
</div>
</div>

<?php
get_footer();
?>