<?php
session_start();
if (isset($_SESSION['k_username'])) {
	$admin = $_SESSION['k_username'];
}else{
	 echo '<script>location.href="index.php"</script>';
}
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>Tripbe Experiences</title>
<meta name="description" content="">
<meta name="author" content="Ansonika">

<!-- Favicons-->
<link rel="shortcut icon" href="img/tripbe_ico.ico" type="image/x-icon"/>

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" >
<link href="css/socialize-bookmarks.css" rel="stylesheet">
<link href="js/fancybox/source/jquery.fancybox.css?v=2.1.4" rel="stylesheet">
<link href="check_radio/skins/square/aero.css" rel="stylesheet">

<!-- Toggle Switch -->
<link rel="stylesheet" href="css/jquery.switch.css">

<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">

<!-- Google web font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Jquery -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.8.22.min.js"></script>

<!-- Wizard-->
<script src="js/jquery.wizard.js"></script>

<!-- Radio and checkbox styles -->
<script src="check_radio/jquery.icheck.js"></script>

<!-- HTML5 and CSS3-in older browsers-->
<script src="js/modernizr.custom.17475.js"></script>

<!-- Support media queries for IE8 -->
<script src="js/respond.min.js"></script>

<!-- CSS Update -->
<link href="css/update.css" rel="stylesheet">
<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

<!-- JS Update -->
<script src="js/fileinput.js" type="text/javascript"></script>

</head>

<body>

	<header>
         <div class="container">
            <div class="row">
        	<div class="col-md-4 col-xs-3" id="logo"><a href="post.php">Tripbe Locals</a></div>
            
            <div class="btn-responsive-menu"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </div>

            <nav class="col-md-8 col-xs-9" id="top-nav">
            	<ul>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">About Me</a></li>
                    <li><a href="logout.php">Logout</a></li>
               </ul>
            </nav><!-- End Nav -->
            
         </div><!-- End row -->
         </div><!-- End container -->
        </header> <!-- End header -->
        	
       <!--<div class="container">
			<div class="row">
				 <div class="col-md-12 main-title">
				 <h1>Sample Title</h1>
				 <p>Sample sub title in this site</p>
				</div>
			</div>
		</div>-->
	  
	  <div class="container" id="main">

      <div class="row">

        <div class="col-sm-6 blog-main">
			<h2 class="blog-post-title">Post an Event:</h2>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
			  <li class="active"><a href="#event" role="tab" data-toggle="tab">Event</a></li>
			  <!--<li><a href="#promotion" role="tab" data-toggle="tab">Promotion</a></li>-->
			</ul>
			
			<!-- Tab panes -->
			<div class="tab-content">
			
			  <div class="tab-pane active" id="event">
			  <form id="post_event" name="post_event" action="procesar_evento.php" method="post" enctype="multipart/form-data">
			  
			<ul class="data-list">
				<li><input type="text" name="provider_name" class="required form-control" placeholder="Provider Name"></li>
				<li><input type="text" name="provider_email" class="required form-control" placeholder="Provider Email"></li>
				<li><input type="text" name="provider_phone" class="required form-control" placeholder="Provider Phone"></li>
				<li><input type="text" name="provider_parse_picture" class="required form-control" placeholder="Provider Parse Picture"></li>
			</ul>
			
			<ul class="data-list">
				<li><input type="text" name="title" class="required form-control" placeholder="Title"></li>
			</ul>

			<ul class="data-list">
				<li>
				<div class="styled-select">
					<select class="form-control required" name="event_type">
						<option value="" selected>Event Type</option>
						<option value="Hostels/Hotels">City Tours</option>
					</select>
				</div>
				</li>
			</ul>
			
			<ul class="data-list">
				<li><strong>140 characteres</strong><textarea name="content" class="form-control" maxlength="140" placeholder="Content"></textarea></li>
				<li><input type="text" name="address" class="required form-control" placeholder="Address"></li>
				<li><input type="text" name="creation_latitude" class="required form-control" placeholder="Creation Latitude"></li>
				<li><input type="text" name="creation_longitude" class="required form-control" placeholder="Creation Longitude"></li>
				<li><input type="text" name="event_latitude" class="required form-control" placeholder="Event Latitude"></li>
				<li><input type="text" name="event_longitude" class="required form-control" placeholder="Event Longitude"></li>
			</ul>
			
			<div id="upload-img" class="form-group">
				<input id="file-1" name="parse_picture" type="file" class="file" data-preview-file-type="any" data-initial-caption="Add Photo" data-show-upload="false">
			</div>
			
			<div class="row">
				<div class="col-sm-6">
					<h6>Starts:</h6>
					<ul class="data-list">
						<li>
						<div class="styled-select">
							<select class="form-control required" name="event_start_time">
								<option value="1:00 pm" selected>1:00 pm</option>
								<option value="2:00 pm">2:00 pm</option>
								<option value="3:00 pm">3:00 pm</option>
								<option value="4:00 pm">4:00 pm</option>
							</select>
						</div>
						</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<h6>Ends:</h6>
					<ul class="data-list">
						<li>
						<div class="styled-select">
							<select class="form-control required" name="expiration_time">
								<option value="1:00 pm" selected>1:00 pm</option>
								<option value="2:00 pm">2:00 pm</option>
								<option value="3:00 pm">3:00 pm</option>
								<option value="4:00 pm">4:00 pm</option>
							</select>
						</div>
						</li>
					</ul>
				</div>
			</div>
			
			<h4>How many people:</h4>
			
			<div class="row">
				<div class="col-sm-6">
					<ul class="data-list">
						<li><input type="text" name="min_attendants" class="required form-control" placeholder="Min"></li>
					</ul>
				</div>
				<div class="col-sm-6">
					<ul class="data-list">
						<li><input type="text" name="max_attendants" class="required form-control" placeholder="Max"></li>
					</ul>
				</div>
			</div>
				
			<div class="row">
				<div class="col-sm-6">
					<ul class="data-list-2">
						<li><input name="is_open" type="checkbox" class="required check_radio" value="Open"><label>Open</label></li>
					</ul>
				</div>
				<div class="col-sm-6">
					<ul class="data-list-2">
						<li><input name="is_all_day" type="checkbox" class="required check_radio" value="Open"><label>All Day</label></li>
					</ul>
				</div>
			</div>

			
			<ul class="data-list">
				<li>
				<div class="styled-select">
					<select class="form-control required" name="action_button">
						<option value="" selected>Choose action button</option>
						<option value="Join">Join</option>
						<option value="Book">Book</option>
						<option value="Call">Call</option>
					</select>
				</div>
				</li>
			</ul>
			
			<ul class="data-list">
				<li><input type="text" name="info_url" class="required form-control" placeholder="Info URL"></li>
				<li><input type="text" name="access_token" class="required form-control" placeholder="Access Token"></li>
			</ul>
			
			<div class="row submit step" id="complete">
				<div class="col-sm-6">
					<button type="submit" name="post" class="">Post</button>
				</div>
				<div class="col-sm-6">
					<button type="reset" name="clean" class="">Clean</button>
				</div>
				</div><!-- end bottom-wizard -->
			</form>
			  </div>
			  <div class="tab-pane" id="promotion">
				<div id="upload-img" class="form-group">
					<input id="file-2" type="file" class="file" data-preview-file-type="any" data-initial-caption="Add Photo" data-show-upload="false">
				</div>
				
				<ul class="data-list">
					<li><strong>140 characteres</strong><textarea name="message_body" class="form-control" maxlength="140" placeholder="Post body"></textarea></li>
				</ul>
				
				<ul class="data-list">
					<li><strong>500 characteres</strong><textarea name="message_details" class="form-control" maxlength="150" placeholder="Details"></textarea></li>
					<li><input type="text" class="required form-control" placeholder="Address"></li>
					<li><input type="text" name="telefono" class="required form-control" placeholder="Phone"></li>
				</ul>
				
				<div class="row">
					<div class="col-sm-6">
						<ul class="data-list">	
							<li><input type="text" class="required form-control" placeholder="District"></li>
						</ul>
					</div>
					<div class="col-sm-6">
						<ul class="data-list">
							<li><input type="text" class="required form-control" placeholder="City"></li>
						</ul>
					</div>
				</div>
				<div class="row">
				<div class="col-sm-4">
					<ul class="data-list-2">
						<li><input name="question_2[]" type="checkbox" class="required check_radio" value="Today"><label>Today</label></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul class="data-list-2">
						<li><input name="question_2[]" type="checkbox" class="required check_radio" value="Tomorrow"><label>Tomorrow</label></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul class="data-list-2">
						<li><input name="question_2[]" type="checkbox" class="required check_radio" value="Recuring"><label>Recuring</label></li>
					</ul>
				</div>
				</div>
				<h4>Choose action button</h4>
				<ul class="data-list">
					<li>
					<div class="styled-select">
						<select class="form-control required" name="action_button">
							<option value="" selected>Choose action button</option>
							<option value="Book Now">Book Now</option>
							<option value="Chat">Chat</option>
							<option value="Join">Join</option>
						</select>
					</div>
					</li>
				</ul>
				<div class="row submit step" id="complete">
				<div class="col-sm-4">
					<button type="button" name="cancel" class="">Cancel</button>
				</div>
				<div class="col-sm-4">
					<button type="button" name="save" class="">Save</button>
				</div>
				<div class="col-sm-4">
					<button type="submit" name="process" class="submit">Post</button>
				</div>
				</div><!-- end bottom-wizard -->
			  
			  </div>
			</div>

        </div><!-- /.blog-main -->

        <div class="col-sm-6">
          <div class="sidebar-module sidebar-module-inset">
            <h4>Creating amazing experiences</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare augue non magna imperdiet luctus. Duis lobortis odio non arcu volutpat consequat. Vestibulum vitae odio augue. Aliquam in laoreet felis. Proin vehicula tortor erat, et consectetur purus aliquet vitae. Ut porttitor sagittis eleifend. Aenean egestas elementum cursus. Praesent pharetra auctor malesuada. Suspendisse euismod finibus neque, in cursus est vulputate sed. Cras suscipit commodo pulvinar. Quisque placerat dictum arcu non dapibus. Proin turpis tellus, egestas in nunc sit amet, auctor consequat massa.</p>
			<p>Cras ultricies, tortor ac imperdiet vehicula, metus justo placerat quam, ut commodo turpis arcu non enim. Nulla finibus enim ut augue convallis interdum. Curabitur aliquet augue sed ipsum rutrum lobortis. Ut id suscipit dui, quis pellentesque metus. Quisque pellentesque orci turpis. Phasellus posuere vel dolor a semper. Quisque eget velit eu est gravida varius non nec nunc. Nunc id sagittis ligula.</p>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
	   
	   
<footer>    
    <section id="footer_2">
    <div class="container">
    <div class="row">
    	<div class="col-md-6">
                <ul id="footer-nav">
                	<li>2014 Copyright &copy; Tripbe Experiences</li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>              
        </div>
            <div class="col-md-6" style="text-align:center">
                <ul class="social-bookmarks clearfix">
                    <li class="facebook"><a href="#">facebook</a></li>                   
                    <li class="twitter"><a href="#">twitter</a></li>
                </ul>
            </div>
        </div>
		</div>
    </section>

</footer> 
 
 <div id="toTop">Back to Top</div>  

<!-- Modal About -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">About me</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal About -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- OTHER JS --> 
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.tweet.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/quantity-bt.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/retina.js"></script>
<script src="js/functions.js"></script>


<!-- FANCYBOX -->
<script  src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="js/fancy_func.js" type="text/javascript"></script> 

</body>

	<script>
		$(document).ready(function() {
        $("#file-1").fileinput({
			maxFileSize: 1000,
			maxFilesNum: 1,
			allowedFileTypes: ['image', 'video']
		});
		 $("#file-2").fileinput({
			maxFileSize: 1000,
			maxFilesNum: 1,
			allowedFileTypes: ['image', 'video']
		});
    });
	</script>
</html>