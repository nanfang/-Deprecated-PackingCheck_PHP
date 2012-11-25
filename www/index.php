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
</head>
<body>
<div class="navbar  navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="/">PackingCheck</a>
            <div class="nav-collapse collapse pull-right">
                <ul class="nav">
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Sign Out</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<div class="container">
    <p>
        <button class="btn btn-large btn-primary">
            Create New Packing List
        </button>
    </p>
    <ul class="thumbnails">
        <? for ($i = 1; $i <= 10; $i++) { ?>
        <li class="span3">
            <a href="/items.php" class="thumbnail">
                <img src="http://placehold.it/300x200" alt="">
                <div class="caption">
                    <h3>Go Hiking</h3>
                </div>
            </a>
        </li>
        <? } ?>
    </ul>
</div>
<!-- /container -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
</body>
</html>
