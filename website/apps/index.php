<?php
include '../php/sidebar.php';
include '../php/apps.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Apps | Nerdtopia</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/materialize.min.css" rel="stylesheet" />
        <link href="../css/custom.css" rel="stylesheet" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
    </head>
    <body class="full-body">
        <?php sidebar::generateSidebar(3); ?>
        <div class="main-content">
            <h4>App Store</h4>
            <hr/>
            <div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php
                    apps::demo_item('Work', '8bitNerd', true, 'Free', 'briefcase', '#f44336');
                    ?>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php
                    apps::demo_item('Music', '8bitNerd', true, 'Free', 'music', '#4caf50');
                    ?>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php
                    apps::demo_item('Comics', '8bitNerd', true, 'Free', 'book', '#ff9800');
                    ?>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php
                    apps::demo_item('Movies', '8bitNerd', true, 'Free', 'film', '#9c27b0');
                    ?>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php
                    apps::demo_item('Coding', '8bitNerd', true, 'Free', 'code', '#2196f3');
                    ?>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php
                    apps::demo_item('Gaming', '8bitNerd', true, 'Free', 'gamepad', '#ffeB3b');
                    ?>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php
                    apps::demo_item('Science', '8bitNerd', true, 'Free', 'flask', '#795548');
                    ?>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php
                    apps::demo_item('Tech', '8bitNerd', true, 'Free', 'laptop', '#9e9e9e');
                    ?>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php
                    apps::demo_item('Nerd Dating', '8bitNerd', true, '$4.99', 'heart', '#f44336');
                    ?>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php
                    apps::demo_item('Finance', '8bitNerd', true, '$9.99', 'money', '#8bc34a');
                    ?>
                </div>
            </div>
        </div>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/materialize.min.js"></script>
    </body>
</html>