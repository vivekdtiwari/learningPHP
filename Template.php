<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="styles/stylesheet.css" media="screen" title="no title" charset="utf-8">
        <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
        <div id="wrapper" class="container-fluid">
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
                    <li><a href="#">Coffee</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                  </ul>
                </div>
              </div>
            </nav>
            <div id="banner" class="jumbotron">
                <h1 id="tagline">Jumbotron</h1>
            </div>
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            <div id="sidebar">

            </div>
            <footer>
                <p>
                    All rights reserved.
                </p>
            </footer>
        </div>
    </body>
</html>
