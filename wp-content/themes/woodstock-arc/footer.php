  <footer>
    <div id="footer">
      <p>2015 &copy; Schaefer Design Solutions</p>

      <?php 

        $defaults = array(
          'container' => false,
          'div' => false,
          'theme_location' => 'footer-menu',
          'menu_id' => 'footer-nav'
        );

        wp_nav_menu( $defaults );

      ?>

    </div>
  </footer>

  <?php wp_footer(); ?>

</body>
</html>