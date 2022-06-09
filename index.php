<?php
get_header();
if (have_posts()) {
?>
  <div class="subpagecontainter">
    <?php
    while (have_posts()) {
      the_post(); ?>
      <div>
        <h2><?php the_title(); ?></h2>
        <div class="subpagecontainter">
          <div>Kõrgus:
            <?php
            echo (get_post_meta(get_the_ID(), $key = 'fullname', $single = true));
            ?>
          </div>
          <div>Asukoht:
            <?php
            echo (get_post_meta(get_the_ID(), $key = 'short_bio', $single = true));
            ?>
          </div>
          <div>Kivi tüüp:
            <?php
            echo (get_post_meta(get_the_ID(), $key = 'email', $single = true));
            ?>
          </div>
          <div>Radade arv:
            <?php
            echo (get_post_meta(get_the_ID(), $key = 'job_role', $single = true));
            ?>
          </div>
        </div>

      </div>

    <?php
    }
    ?>
  </div>

<?php
}
?>
<?php
get_footer();
?>