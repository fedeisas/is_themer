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
            
            <?=form_open('generator')?>

            <h4>Color Widget</h4>
            <input type="text" name="colors[main]" class="colors" size="7" value="#005294" />

            <hr>

            <h4>Image Widget</h4>
            <div class="imageupload">
              <span class="help-block">
                <strong>Note:</strong> Works best with 935x110 images.
              </span>
              <div class="media-grid">
                <a href="#" data-original-title="Click to change">
                  <img src="http://placehold.it/935x110" class="thumbnail" width="748" height="88" />
                </a> 
              </div>
              <input type="file" name="header" id="header" class="inputfile" style="display:none;"/>
              <input type="text" name="url[header]" id="header_image" style="display:none;" />
            </div>
            

            <hr>
            
            <h4>Vote Widget Selector</h4>
            <div class="multiplechoice">
              <ul class="media-grid">
                <li>
                  <a href="#" id="main" class="selected">
                    <img alt="" src="http://placehold.it/210x150" class="thumbnail">
                  </a>
                </li>
                <li>
                  <a href="#" id="main_2">
                    <img alt="" src="http://placehold.it/210x150" class="thumbnail">
                  </a>
                </li>
                <li>
                  <a href="#" id="main_3">
                    <img alt="" src="http://placehold.it/210x150" class="thumbnail">
                  </a>
                </li>
              </ul>
              <input type="text" name="import[vote_widget]" id="vote_widget" style="display:none;" value="main" />
            </div>

            <hr>                        

            <div class="actions" style="padding-left:620px;">
              <input type="submit" class="btn success" value="Generate" />&nbsp;<a class="btn" href="<?=site_url()?>">Cancel</a>
            </div>

            <?=form_close()?>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; TheUXDepartment 2011 - Page rendered in <strong>{elapsed_time}</strong> seconds</p>

      </footer>

    </div> <!-- /container -->

  </body>
</html>
