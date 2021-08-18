<?php include("functions/bd.php") ;
if (isset($_GET['close'])) {
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="es" >

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="images/favicon.png" rel="icon" type="image/png">


<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>Login</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
  <link rel='stylesheet' href='css/login.css'>



<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,500,500i,700" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">


<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

<link href="css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>
<body translate="no" >

    <div id="back">
    <canvas id="canvas" class="canvas-back"></canvas>
    <div class="backRight">
    </div>
    <div class="backLeft">
    </div>
    </div>

    <div id="slideBox">
    <div class="topLayer">

        <div class="right">
        <div class="content">
        <?php if (isset($_SESSION['mensaje'])):?>
                    <div class="alert alert-<?=$_SESSION['color']?> alert-dismissible fade show" role="alert">
                        <span class="alert-text"><strong><?=$_SESSION['titulo'];?></strong> <?= $_SESSION['mensaje']?></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    <?php                 unset($_SESSION['mensaje']);
                unset($_SESSION['titulo']);
                unset($_SESSION['color']); endif; ?>
            <h2>Ingresa</h2>
            <form action="crudadmin/login.php" id="form-login" method="POST"autocomplete="off" >
            <div class="form-element form-stack">
                <label for="username-login" class="form-label">Usuario</label>
                <input id="username-login" type="text" name="usuario">
            </div>
            <div class="form-element form-stack">
                <label for="password-login" class="form-label">Contraseña</label>
                <input id="password-login" type="password" name="pass">
            </div>
            <div class="form-element form-submit">
                <button type="submit" name="entrar" class="btn btn-primary btn-lg btn-block">Entrar</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js'></script>
    <script src='script/login.js'></script>
    <?php include("includes/footer.php") ;?>
</body>
</html>

