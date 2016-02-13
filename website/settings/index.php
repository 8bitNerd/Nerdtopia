<?php
include '../php/sidebar.php';
include '../php/settings.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Settings | Nerdtopia</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/materialize.min.css" rel="stylesheet" />
        <link href="../css/custom.css" rel="stylesheet" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
    </head>
    <body class="full-body">
        <?php sidebar::generateSidebar(5); ?>
        <div class="main-content">
            <h4>Settings</h4>
            <hr/>
            <div>
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8">
                    <div class='card-panel white' style="padding-left: 25%; padding-right: 25%;">
                        <h5>Notifications</h5>
                        <hr/>
                        <?php settings::settings_item_switch('Allow desktop notifications'); ?>
                        <h5 style="margin-top: 40px;">Email Notifications</h5>
                        <hr/>
                        <?php
                        settings::settings_item_switch('Login', true);
                        settings::settings_item_switch('New message', true);
                        settings::settings_item_switch('Friend request', true);
                        settings::settings_item_switch('App updates');
                        settings::settings_item_switch('Store specials');
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/materialize.min.js"></script>
    </body>
</html>