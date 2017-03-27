<?php
	/*
		Template Name: Pastor
	*/
?>

<?php get_header(); ?>

<section>
  <div id="pastor-summary">
    <div class="content1">
      <div id="pastor-img">

				<?php

					$image = wp_get_attachment_image_src ( get_field( 'pastor_image' ), 'pastor-image');

				?>

       	<img src="<?php echo $image[0]; ?>" alt="pastor chris"/>
      </div>
      <?php the_field( 'column_1_text' ); ?>
    </div>
    <div class="content2">
      <?php the_field( 'column_2_text' ); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>