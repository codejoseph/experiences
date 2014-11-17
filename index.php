<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Tripbe Experiences</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome-login.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link href="tripbe_ico.ico" rel="icon" type="image/x-icon" />
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,700italic,900,100' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->


</head>

<body class="login-page">

<section class="content login-page">

  <div class="content-liquid">
    <div class="container">

      <div class="row">

        <div class="login-page-container">

          <div class="boxed animated flipInY">
            <div class="inner">
			<form class="form-horizontal" role="form" action="validar_usuario.php" method="post">
              <div class="login-title text-center">
				<img src="img/tripbe_experiences_logo_280.png" class="login-logo"/>
                <h4>Please enter your</h4>
				<h5>username and password</h5>
              </div>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="mc_usuario" placeholder="Username" />
              </div>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="mc_password" placeholder="Password" />
              </div>

              <input type="submit" class="btn btn-lg btn-success" value="Login" name="submit" id="submit" />
			</form>
            </div>
          </div>

        </div>

      </div>
      
    </div>
  </div>

</section>

<!-- Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
  jQuery(document).ready(function($){

    var min_height = jQuery(window).height();
    jQuery('div.login-page-container').css('min-height', min_height);
    jQuery('div.login-page-container').css('line-height', min_height + 'px');

    //$(".inner", ".boxed").fadeIn(500);
  });
</script>
</body>
</html>