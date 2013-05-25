<?php require_once 'ti.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Packing Check</title>
    <meta charset="UTF-8">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet">
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
            <a class="brand" href="/">PackingCheck</a>
            <div class="nav-collapse collapse pull-right">
                <ul class="nav">
                    <li><a href="#about">About</a></li>
                    <li><a href="/login.php">Log In</a></li>
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
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
</body>
</html>
