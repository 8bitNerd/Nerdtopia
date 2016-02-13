<?php
include '../php/sidebar.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Messages | Nerdtopia</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/materialize.min.css" rel="stylesheet" />
        <link href="../css/custom.css" rel="stylesheet" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
    </head>
    <body class="full-body">
        <?php sidebar::generateSidebar(2); ?>
        <div class="main-content">
            <h4>Messages</h4>
            <hr/>
        </div>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/materialize.min.js"></script>
    </body>
</html>