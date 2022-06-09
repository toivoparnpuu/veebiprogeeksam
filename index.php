<?php
get_header();
if (have_posts()) {
?>
  <main>
    <h1>Meie töötajad</h1>
    <section>

      <?php
      while (have_posts()) {?>
        <div class="box">
        <div class="pictures">
          <?php if (has_post_thumbnail()) {
            the_post_thumbnail();
            the_post_thumbnail('category-bigger');
            
          }
          ?>
        </div>

          <h2>Nimi:
            <?php
            echo (get_post_meta(get_the_ID(), $key = 'fullname', $single = true));
            ?>
          </h2>
          <p><b>Tutvustus:</b>
            <?php
            echo (get_post_meta(get_the_ID(), $key = 'short_bio', $single = true));
            ?>
          </p>
          <p><b>e-mail:</b>
            <?php
            echo (get_post_meta(get_the_ID(), $key = 'email', $single = true));
            ?>
          </p>
          <p><b>Amet:</b>
            <?php
            echo (get_post_meta(get_the_ID(), $key = 'job_role', $single = true));
            ?>
          </p>
        </div>



      <?php
      }
      ?>
    </section>
  </main>

<?php
}
?>
<?php
get_footer();
?>