<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IS Themer</title>

    <?php 
      display_css(
        array(
  		    'bootstrap/bootstrap.min.css',
          'minicolors/jquery.miniColors.css',
          'style.css'
  		)
  	); 
  	?>

    <?php 
      display_js(
        array(
          'jquery.min.js',
          'bootstrap/bootstrap-alerts.js',
          'bootstrap/bootstrap-popover.js',
          'bootstrap/bootstrap-twipsy.js',
          'bootstrap/bootstrap-dropdown.js',
          'bootstrap/bootstrap-scrollspy.js',
          'bootstrap/bootstrap-modal.js',
          'bootstrap/bootstrap-tabs.js',
          'ajaxupload/ajaxfileupload.js',
          'minicolors/jquery.miniColors.min.js',
          'app.js'
        )
      ); 
    ?>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?=site_url()?>/assets/images/favicon.ico">

  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="<?= site_url(); ?>">IS Themer</a>

          <ul class="nav">
            <li><a href="<?= site_url(); ?>">Home</a></li>
          </ul>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Build your own theme <small>Try it now! It's easy!</small></h1>
        </div>
        <div class="row">
          <div class="span10">
            <h2>Main content</h2>

            <input type="text" name="color3" class="colors" size="7" value="#005294" />

          </div>
          <div class="span4">
            <h3>Secondary content</h3>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; TheUXDepartment 2011 - Page rendered in <strong>{elapsed_time}</strong> seconds</p>

      </footer>

    </div> <!-- /container -->

  </body>
</html>
