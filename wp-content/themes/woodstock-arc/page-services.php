<?php
	/*
		Template Name: Services
	*/
?>

<?php get_header(); ?>

<section>
  <div id="service-summary">
    <h1><?php the_field( 'page_title' ); ?></h2>
    <div class="content1">

	    <?php

	      $args = array(
	        'post_type' => 'service_entry',
	        'meta_value' => 'Column 1',
	        'orderby' => 'date',
	        'order' => 'ASC',
	      );
	      $query = new WP_Query( $args );

	    ?>

	    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

	      <div class="service">
	        <h3><?php the_field( 'title' ); ?></h3>
	        <p><?php the_field( 'time' ); ?></p>
	        <p><?php the_field( 'description' ); ?></p>
	      </div>
	      <br/>

      <?php endwhile; ?>

    	<?php endif; ?>

    </div>
    <div class="content2">

     	<?php

	      $args = array(
	        'post_type' => 'service_entry',
	        'meta_value' => 'Column 2',
	        'orderby' => 'date',
	        'order' => 'ASC',
	      );
	      $query = new WP_Query( $args );

	    ?>

	    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

	      <div class="service">
	        <h3><?php the_field( 'title' ); ?></h3>
	        <p><?php the_field( 'time' ); ?></p>
	        <p><?php the_field( 'description' ); ?></p>
	      </div>
	      <br/>

      <?php endwhile; ?>

    	<?php endif; ?>

    </div>
  </div>
</section>


<?php get_footer(); ?>