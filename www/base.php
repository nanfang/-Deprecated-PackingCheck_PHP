<?php
session_start();
require_once 'inc/ti.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Packing Check</title>
    <meta charset="UTF-8">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
        }
    </style>
    <?php startblock('head') ?><?php endblock() ?>
</head>
<body>
<div class="navbar  navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">Packing Check</a>
            <div class="nav-collapse collapse pull-right">
                <ul class="nav">
                    <li class="divider-vertical"></li>
                <?php if(isset($_SESSION['username'])) { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Welcome, <?=$_SESSION['username']?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/logout.php"><i class="icon-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li><a href="/login.php">Log In</a></li>
                <?php } ?>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">
<?php startblock('content') ?><?php endblock() ?>
</div>
<!-- /container -->

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</body>
</html>
