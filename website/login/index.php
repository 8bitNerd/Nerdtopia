<!DOCTYPE html>
<html>
    <head>
        <title>Login | Nerdtopia</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/materialize.min.css" rel="stylesheet" />
        <link href="../css/custom.css" rel="stylesheet" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <a href="#error" id="sign-in-request" style="display: none;"></a>
        <div class="custom-modal" id="error">
            <p style="font-size: 120%"><b>Unable to verify account</b><p>
            <hr style="margin-top: -5px; margin-bottom: 30px;"/>
            <p>Please provide a valid email address and password combination</p>
        </div>

        <div class="full-size" style="background-image: url('../img/wallpaper.jpg')">
            <div class="full-size transparent-black" data-color="black"></div>
            <div class="col-lg-4 col-md-3 col-sm-2 col-xs-1"></div>
            <div class="col-lg-4 col-md-6 col-sm-8 col-xs-10">
                <div align="center">
                    <h1 class="logo cursive" style="margin-top: 50px;">
                        <img src="../img/base_icon.png" style="height: 128px; margin-bottom: 20px;" /><br/>
                        Nerdtopia
                    </h1>
                </div>
                <div class="row" style="margin-top: 40px;">
                    <div class="card-panel white">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px;">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row" align="right" style="margin-right: 0px; margin-bottom: 5px;">
                            <a class="waves-effect waves-light btn" onclick="signIn();">Sign in</a>
                        </div>
                    </div>
                </div>
                <div align="center" style="margin-left: 15px; margin-right: 15px;">
                    <h6 style="color: white"><i>Please note that this is still a demo. You can use any username and password combination to continue! These values are required and an error message will be displayed if not provided!</i></h6><br/>
                    <h6 style="color: white"><b>Help us make this project a reality. We really need your help!</b></h6>
                    <button class="waves-effect btn-lg btn-danger btn-fill" style="margin-top: 8px;" onclick="navigateToGithub();">
                        <i class="fa fa-github"></i>
                        Github Project
                    </button>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-2 col-xs-1"></div>
        </div>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/materialize.min.js"></script>
        <script src="../js/jquery.leanModal.min.js"></script>
        <script>
            $("#sign-in-request").leanModal();

            function signIn() {
                var email = $("#email").val();
                var password = $("#password").val();

                if (!email || !password) {
                    $("#sign-in-request").click();
                    return;
                }

                window.location.href = "../register";
            }

            function navigateToGithub() {
                var win = window.open('https://github.com/8bitNerd/Nerdtopia', '_blank');
                win.focus();
            }
        </script>
    </body>
</html>