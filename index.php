<?php
get_header();
if (have_posts()) {
?>

  <?php
  while (have_posts()) {
    the_post(); ?>
    <section>
      <div>
        <?php if (has_post_thumbnail()) {
          the_post_thumbnail();
        }
        ?>

        <h2>Nimi:
          <?php
          echo (get_post_meta(get_the_ID(), $key = 'fullname', $single = true));
          ?>
        </h2>
        <p>Tutvustus:
          <?php
          echo (get_post_meta(get_the_ID(), $key = 'short_bio', $single = true));
          ?>
        </p>
        <p>e-mail:
          <?php
          echo (get_post_meta(get_the_ID(), $key = 'email', $single = true));
          ?>
        </p>
        <p>Amet:
          <?php
          echo (get_post_meta(get_the_ID(), $key = 'job_role', $single = true));
          ?>
        </p>
    </section>
    </div>

  <?php
  }
  ?>


<?php
}
?>
<?php
get_footer();
?>