<?php
include '../php/sidebar.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home | Nerdtopia</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/materialize.min.css" rel="stylesheet" />
        <link href="../css/custom.css" rel="stylesheet" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
    </head>
    <body class="full-body">
        <?php sidebar::generateSidebar(0); ?>
        <div class="main-content">
            <h4>Welcome to Nerdtopia</h4>
            <hr/>
            <h6 style="font-size: 130%; margin-right: 30%;">
               <i style="color: #aaa">Please note that this is still a demo. You can not use the system at the moment!</i><br/><br/><br/>
                First of all, I would like to thank you for your interest in this project! You are AWESOME!<br/><br/>
                This project was started to create a new place for nerds and geeks to hang out. This project is developed
                for people that love comics, games, movies, music, series, science and technology. Here you will find people
                with similar interests. This is a place where you can learn how to program. You will learn more about
                technology and science. We discuss the latest comics, movies and all your favorite tv shows. Nobody here
                will judge you. This is the perfect place if you want to talk about your favorite operating system all day!
                This is a social network for the geeks and nerds!<br/><br/>
                Since this is not my full time job, this project will take some time to complete. That is why I decided to
                make it Open Source! I am also not a web developer, so the current website might be buggy. I am also planning
                on making the website more mobile friendly in the future. So if you like the current website, or would like
                to contribute to the project, you are welcome to check out the project on GitHub. We need people like you!
                This site is developed by the nerds for the nerds! Let's make something awesome!<br/><br/>
                <div>
                    <button class="waves-effect btn-lg btn-danger btn-fill" style="margin-top: 8px;" onclick="navigateToGithub();">
                        <i class="fa fa-github"></i>
                        Github Project
                    </button>
                    <button class="waves-effect btn-lg btn-info btn-fill" style="margin-top: 8px;" onclick="navigateToTwitter();">
                        <i class="fa fa-twitter"></i>
                        Follow me
                    </button>
                </div>
            </h6>
        </div>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/materialize.min.js"></script>
        <script>
            function navigateToGithub() {
                var win = window.open('https://github.com/8bitNerd/Nerdtopia', '_blank');
                win.focus();
            }

            function navigateToTwitter() {
                var win = window.open('https://twitter.com/An8bitNerd', '_blank');
                win.focus();
            }
        </script>
    </body>
</html>