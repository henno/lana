<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lana :: teacherSoftware OÜ</title>

    <!-- Le styles -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Lana</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">
                        Avaleht
                    </a></li>
                    <li><a href="<?=URL::base()?>groups">
                        <i class="icon-user"></i> Rühmad
                    </a></li>
                    <li><a href="auth/logout">Välju</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <?php echo Notify::render(); ?>
    <?php echo $content ?>
</div> <!-- /container -->

</body>
</html>
