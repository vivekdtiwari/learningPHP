<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="styles/stylesheet.css" media="screen" title="no title" charset="utf-8">
        <link rel="icon" href="Images/favicon.png" type="image/png">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
        <div id="wrapper" class="container">
            <div id="banner" class="jumbotron">
                <h1 id="tagline">
                    <img src="Images/logo.png" alt="Cool Icon" id="taglineImage" />
                    Coder Coffee
                    <img src="Images/logo.png" alt="Cool Icon" id="taglineImage" />
                </h1>
            </div>
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">PHP</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="Coffee.php">Coffee</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                  </ul>
                </div>
              </div>
            </nav>
            <div id="content_area" class="col-md-9">
                <?php echo $content; ?>
            </div>
            <div id="sidebar" class="pull-right col-md-3">

            </div>
            <footer class="col-md-12">
                <p>
                    All rights reserved.
                </p>
            </footer>
        </div>
    </body>
</html>
