<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IdeaScale Themer</title>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles 
    <link href="../1.3.0/bootstrap.css" rel="stylesheet">-->
    <?php display_css(
	    array(
		    'bootstrap/bootstrap.min.css'
		)
	); 
	?>

    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }

      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }

    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?=site_url()?>/assets/images/favicon.ico">

  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="<?= site_url(); ?>">IdeaScale Themer</a>

          <ul class="nav">
            <li><a href="<?= site_url(); ?>">Home</a></li>
          </ul>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Page name <small>Supporting text or tagline</small></h1>
        </div>
        <div class="row">
          <div class="span10">
            <h2>Main content</h2>

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
