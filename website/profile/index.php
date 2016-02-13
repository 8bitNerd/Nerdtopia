<?php
include '../php/sidebar.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile | Nerdtopia</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/materialize.min.css" rel="stylesheet" />
        <link href="../css/custom.css" rel="stylesheet" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
    </head>
    <body class="full-body">
        <?php sidebar::generateSidebar(4); ?>
        <div class="main-content">
            <h4>Profile <a href="#" style="margin-left: 15px;"><i class='fa fa-pencil'></i></a></h4>
            <hr/><br/>
            <div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card-panel white">
                        <img class="round-image" src="../img/batman.jpg" height="170px" style="float:left; margin-right: 50px;"/>
                        <div style="margin-bottom: 25px;">
                            <h4>Bruce Wayne</h4>
                            <h6 style="margin-top: -10px; color:#888"><i>it not who i am underneath but what do that defines me</i></h6>
                        </div>
                        <h6>
                            <i class='fa fa-star'></i>
                            <b>75364</b> reputation
                        </h6>
                        <h6>
                            <i class='fa fa-user'></i>
                            <b>419</b> friends
                        </h6>
                        <h6>
                            <i class='fa fa-rss'></i>
                            <b>13</b> channels
                        </h6>
                        <div style="clear: both"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card-panel white">
                        <div style="margin-left: 20px;">
                            <h5>Details</h5>
                            <hr style="margin-bottom: 23px;"/>
                            <h6><b>Date of birth:</b> 27 May 1939</h6>
                            <h6><b>Gender:</b> Male</h6>
                            <h6><b>Occupation:</b> CEO</h6>
                            <h6><b>Company:</b> Wayne Tech</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/materialize.min.js"></script>
    </body>
</html>