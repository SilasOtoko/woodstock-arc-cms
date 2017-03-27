<?php get_header(); ?>

  <?php

    $image = wp_get_attachment_image_src ( get_field( 'banner_image' ), 'banner-image');

  ?>

  <div class="banner" style="background-image: url('<?php echo $image[0]; ?>');">
    <h1><?php the_field( 'banner_text' ); ?></h1>
  </div>
  <div id="arrow">
     <img src="<?php bloginfo('template_directory'); ?>/images/arrow.svg"/>
    </div>
  <section id="home-section">
    <div class="schedule">
      <?php the_field( 'church_schedule' ); ?>
    </div>
    <div id="about">
      <h2><?php the_field( 'about_arc_title' ); ?></h2>
        <div id="about1">
          <p><?php the_field( 'about_arc_text_1' ); ?></p>
        </div>
        <div id="about2">
          <p><?php the_field( 'about_arc_text_2' ); ?></p>
        </div>
    </div>
  </section>
  <section>
    <div id="connect-center">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2869.660439926043!2d-96.10197!3d44.00774500000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x878bc0d302f092bf%3A0x8fb0bccd9a0a765b!2sAmerican+Reformed+Church!5e0!3m2!1sen!2sus!4v1431826590884"frameborder="0" style="border:0"></iframe>
      </div>
      <div id="connect">
        <h2><?php the_field( 'connect_title' ); ?></h2>
        <h3><?php the_field( 'address' ); ?></h3>
        <ul class="contact-info-home">
          <li class="phone"><a href="tel:<?php the_field( 'phone_number' ); ?>"><?php the_field( 'phone_number' ); ?></a></li>
          <li class="mail"><a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a></li>
        </ul>
        <div id="buttons">
          <ul>
            <li><a href="contact.html">More Info</a></li>
            <li><a href="https://www.facebook.com/groups/164121013615974/">Facebook</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <?php get_footer(); ?>