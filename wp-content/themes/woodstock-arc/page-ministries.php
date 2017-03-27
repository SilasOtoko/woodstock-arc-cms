<?php
	/*
		Template Name: Ministries
	*/
?>

<?php get_header(); ?>

<section id="ministries-section">
  <h1>Ministries</h1>
  <div class="content1">
    <h2>Children's Ministry</h2>

    <?php

      $args = array(
        'post_type' => 'ministry',
        'meta_value' => 'Children',
        'orderby' => 'date',
        'order' => 'ASC',
      );
      $query = new WP_Query( $args );

    ?>

    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

			<div class="ministry">

				<?php

					$image = wp_get_attachment_image_src( get_field( 'icon' ), 'icon');

				?>

	     	<img src="<?php echo $image[0]; ?>"/>
	     	<div class="description">
	       	<h3><?php the_field( 'title' ); ?></h3>
	       	<p><?php the_field( 'time' ); ?></p>
	       	<p><?php the_field( 'description' ); ?></p>
	      </div>
	    </div>

    <?php endwhile; ?>

    <?php endif; ?>

    <h2>Youth Ministry</h2>

    <?php

      $args = array(
        'post_type' => 'ministry',
        'meta_value' => 'Youth',
        'orderby' => 'date',
        'order' => 'ASC',
      );
      $query = new WP_Query( $args );

    ?>

    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

			<div class="ministry">

				<?php

					$image = wp_get_attachment_image_src( get_field( 'icon' ), 'icon');

				?>

	     	<img src="<?php echo $image[0]; ?>"/>
	     	<div class="description">
	       	<h3><?php the_field( 'title' ); ?></h3>
	       	<p><?php the_field( 'time' ); ?></p>
	       	<p><?php the_field( 'description' ); ?></p>
	      </div>
	    </div>

    <?php endwhile; ?>

    <?php endif; ?>

  </div>
  <div class="content2">
    <h2>Adult Ministries</h2>

    <?php

      $args = array(
        'post_type' => 'ministry',
        'meta_value' => 'Adult',
        'orderby' => 'date',
        'order' => 'ASC',
      );
      $query = new WP_Query( $args );

    ?>

    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

			<div class="ministry">

				<?php

					$image = wp_get_attachment_image_src( get_field( 'icon' ), 'icon');

				?>

	     	<img src="<?php echo $image[0]; ?>"/>
	     	<div class="description">
	       	<h3><?php the_field( 'title' ); ?></h3>
	       	<p><?php the_field( 'time' ); ?></p>
	       	<p><?php the_field( 'description' ); ?></p>
	      </div>
	    </div>

    <?php endwhile; ?>

    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>