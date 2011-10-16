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
          'bootstrap/bootstrap-twipsy.js',
          'bootstrap/bootstrap-popover.js',
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
          <a class="brand" href="<?=site_url(); ?>">IS Themer</a>

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
          <div class="span14">

            <h3>Color Widget</h3>
            <input type="text" name="color3" class="colors" size="7" value="#005294" />

            <hr>

            <h3>Image Widget</h3>
            <div class="imageupload">
              <div class="media-grid">
                <a href="#">
                  <img src="http://placehold.it/935x110" class="thumbnail" width="748" height="88" />
                </a> 
              </div>
              <input type="file" name="header" id="header" class="inputfile" />
              <span class="help-block">
                <strong>Note:</strong> Works best with 935x110 images.
              </span>
            </div>
            

            <hr>
                        

            <div class="actions" style="padding-left:620px;">
              <input type="submit" class="btn success" value="Generate" />&nbsp;<a class="btn" href="<?=site_url()?>">Cancel</a>
            </div>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; TheUXDepartment 2011 - Page rendered in <strong>{elapsed_time}</strong> seconds</p>

      </footer>

    </div> <!-- /container -->

  </body>
</html>
