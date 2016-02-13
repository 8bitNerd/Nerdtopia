<?php
include '../php/sidebar.php';
include '../php/feed.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>News Feed | Nerdtopia</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/materialize.min.css" rel="stylesheet" />
        <link href="../css/custom.css" rel="stylesheet" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
    </head>
    <body class="full-body">
        <?php sidebar::generateSidebar(1); ?>
        <div class="main-content">
            <h4>News Feed</h4>
            <hr/>
            <?php echo feed::demo_feed(); ?>
        </div>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/materialize.min.js"></script>
    </body>
</html>