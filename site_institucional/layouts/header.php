<!--Main Navigation-->
<header>
  <!--Navbar-->
  <?php 
      if (isset($_SESSION['user_id'])) {
        include ('partials/nav-menu.php');
      } else {
        include ('partials/nav-landing.php');
        include ('partials/intro-section.php'); 
      }
    ?>
</header>
<!--Main Navigation-->