<?php
	/*
		Template Name: Contact
	*/
?>

<?php get_header(); ?>

<section>
  <div id="contact-wrapper">
    <h1>Contact Us</h1>
    <div id="primary">
      <div id="contact-list1">
        <h2><?php the_field( 'pastor' ); ?></h2>
        <ul class="contact-info">
          <li class="phone"><a href="tel:<?php the_field( 'pastor_phone' ); ?>"><?php the_field( 'pastor_phone' ); ?></a></li>
          <li class="mail"><a href="mailto:<?php the_field( 'pastor_email' ); ?>"><?php the_field( 'pastor_email' ); ?></a></li>
          <li class="facebook"><a href="<?php the_field( 'pastor_facebook_link' ); ?>"><?php the_field( 'pastor_facebook_text' ); ?></a></li>
        </ul>
      </div>
      <div id="contact-list2">
        <h2><?php the_field( 'administrator' ); ?></h2>
        <ul class="contact-info">
          <li class="phone"><a href="tel:<?php the_field( 'administrator_phone' ); ?>"><?php the_field( 'administrator_phone' ); ?></a></li>
          <li class="mail"><a href="mailto:<?php the_field( 'administrator_email' ); ?>"><?php the_field( 'administrator_email' ); ?></a></li>
          <li class="facebook"><a href="<?php the_field( 'church_facebook_link' ); ?>">American Reformed Church</a></li>
        </ul>
      </div>
      <p>*The best way to contact us is through email.</p>
    </div>
    <div id="secondary">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2869.660439926043!2d-96.10197!3d44.00774500000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x878bc0d302f092bf%3A0x8fb0bccd9a0a765b!2sAmerican+Reformed+Church!5e0!3m2!1sen!2sus!4v1431826590884" width="400" height="300" frameborder="0" style="border:0"></iframe>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>