<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <title>Nerdtopia</title>
    <link href="promo/css/bootstrap.css" rel="stylesheet" />
    <link href="promo/css/custom.css" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="main" style="background-image: url('promo/images/wallpaper.jpg')">
    <div class="cover black" data-color="black"></div>
    <div class="container">
        <div class="row">
            <h1 class="logo cursive" style="margin-top: 50px;">
                <img src="promo/images/base_icon.png" style="height: 128px; margin-bottom: 20px;" /><br/>
                Nerdtopia
            </h1>
        </div>

        <div class="content">
            <h4 class="motto">
                We are busy building the perfect place for all you nerds.<br/>
                A place where you can share, learn and be yourself without<br/>
                being judged! Created by the nerds for the nerds!
            </h4>
            <div class="subscribe row" align="center">
                <h5 class="info-text" style="margin-bottom: 15px;">
                    Help us make this project a reality. We really need your help!
                </h5>
                <button class="btn-lg btn-warning btn-fill" style="width: 280px;" onclick="navigateToDemo();">
                    <i class="fa fa-globe"></i>
                    Website Demo
                </button><br/>
                <button class="btn-lg btn-danger btn-fill" style="width: 280px; margin-top: 10px;" onclick="navigateToGithub();">
                    <i class="fa fa-github"></i>
                    Github Project
                </button><br/>
                <button class="btn-lg btn-info btn-fill" style="width: 280px; margin-top: 10px;" onclick="navigateToTwitter();">
                    <i class="fa fa-twitter"></i>
                    Follow me
                </button>
            </div>
        </div>
    </div>
</div>

</body>
<script src="promo/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="promo/js/bootstrap.min.js" type="text/javascript"></script>
<script>
    function navigateToDemo() {
        window.location.href = "home";
    }

    function navigateToGithub() {
        var win = window.open('https://github.com/8bitNerd/Nerdtopia', '_blank');
        win.focus();
    }

    function navigateToTwitter() {
        var win = window.open('https://twitter.com/An8bitNerd', '_blank');
        win.focus();
    }
</script>

</html>