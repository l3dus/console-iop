<?php
$alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">'.$alertaLogin.'</div>' : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Console Interop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />



    <!-- Bootstrap core CSS -->
    <link href="./views/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../views/assets/css/metisMenu.min.css" rel="stylesheet">
    <!-- Icons CSS -->
    <link href="./views/assets/css/icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./views/assets/css/style.css" rel="stylesheet">

</head>


<body>

<!-- HOME -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="m-t-40 card-box">
                        <div class="text-center">
                            <h2 class="text-uppercase m-t-0 m-b-30">
                                <a href="" class="text-success">
                                    <span><img src="./views/assets/images/logo.png" alt="" height="45"> <strong style="font-size: 17px; color: #122b40">Console</strong></span>
                                </a>
                            </h2>
                            <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                        </div>
                        <div class="account-content">
                            <form class="form-horizontal" method="post">

                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label>Domínio</label>
                                        <select name="domain"  class="form-control" >
                                            <option value="DPOATJ1\">DPOATJ1</option>
                                        </select>
                                        <hr>
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label>Usuário</label>
                                        <input type="text" name="user" id="inputEmail" class="form-control" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label>Senha</label>
                                        <input type="password" name="pass" id="inputPassword" class="form-control" required>
                                    </div>
                                </div>

                                <?=$alertaLogin?>


                                <div class="form-group account-btn text-center m-t-10">
                                    <div class="col-xs-12">
                                        <button class="btn btn-lg btn-primary btn-block" name="action" value="signin" type="submit">Entrar</button>
                                    </div>
                                </div>

                            </form>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <!-- end card-box-->



                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- END HOME -->



<!-- js placed at the end of the document so the pages load faster -->
<script src="./assets/js/jquery-2.1.4.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/metisMenu.min.js"></script>
<script src="./assets/js/jquery.slimscroll.min.js"></script>

<!-- App Js -->
<script src="./assets/js/jquery.app.js"></script>

</body>
</html>
