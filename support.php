<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Laurent Abbal">
		<link rel="shortcut icon" href="libraries/img/favicon_easyphp.png">

		<title>EasyPHP | Develop with Devserver and host with Webserver | PHP, Apache, MySQL, MongoDB, PhpMyAdmin, Xdebug, Python, Ruby, Modules and Components on Windows XP/Vista/Seven/8/10</title>
		
		<!-- Font Awesome -->
		<link rel="stylesheet" type="text/css" href="libraries/fontawesome/css/font-awesome.min.css">
		
		<!-- Devicon -->
		<link rel="stylesheet" type="text/css" href="libraries/devicon/devicon.min.css">		
		
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" type="text/css" href="libraries/css/bootstrap.css">

		<!-- Custom styles -->
		<link rel="stylesheet" type="text/css" href="libraries/css/main.css">
		<link rel="stylesheet" type="text/css" href="libraries/css/custom.css" />

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway:400,300,700">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/googleanalytics.php') ?>

	</head>

	<body data-spy="scroll" data-offset="0" data-target="#navigation">

		<!-- FIXED NAVBAR -->
		<div id="navigation" class="navbar navbar-default navbar-fixed-top" style="z-index:1;">
			<div class="container">
			
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://www.easyphp.org" style="font-size:15px;"><img src="libraries/img/logo_nav_easyphp_32x32.png" width="32" style="margin:0px 10px 0px 65px;" alt="" /><b>Devserver</b> & <b>Webserver</b></a>
				</div>
				
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php"><span class="glyphicon glyphicon-home text-muted"></span></a></li>
						<li><a href="easyphp-devserver.php">devserver</a></li>
						<li><a href="easyphp-webserver.php">webserver</a></li>
						<li class="active"><a href="support.php">support</a></li>
					</ul>
				</div>
				
			</div> <!--/ .container -->
		</div><!--/ #fixednavbar -->

		
		<section id="home" name="home"></section>
		<div id="headerwrap" style="z-index:10000;">
			<div class="container">
				<div style="position:absolute;margin:-70px 0px 0px 0px;z-index:1000;text-align:center;width:100px;"><img src="libraries/img/logo_easyphp_100x100.png" id="logo-easyphp" width="100" alt="" /></div>
				<div class="row">
					
					<div class="col-lg-2">
						<div class="list-group" id="menu-left">
							<a href="#devserverfaq" class="smoothScroll list-group-item">Devserver FAQ</a>
							<a href="#webserverfaq" class="smoothScroll list-group-item">Webserver FAQ</a>
						</div>
					</div>

					<div class="col-lg-10 centered">
						<div class="row">
							<div class="col-lg-12 centered">
								<h1><b>SUPPORT</b></h1>
								<h4 style="text-align:center;color:white;margin:-10px 0px 20px 0px;">for <b>Devserver</b> & <b>Webserver</b></h4>
								<h6 style="text-align:center;color:white;margin:-12px 0px 4px 0px;">Questions and Answers, Issues, FAQ</h6>
							</div>
						</div>
						
						<br />

						<div class="row">

							<div class="col-lg-6">
								
								<div class="col-lg-3" style="padding-top:45px;">
									<img src="libraries/img/logo_stackoverflow_100x100.png" width="100" alt="Stack Overflow" title="Stack Overflow" />
								</div>
								<div class="col-lg-9">
									<h3 style="font-size:25px;">Questions and Answers</h3>
									<p>
										If you have any question about Devserver or Webserver, please use Stack Overflow.<br />
										Don't forget to add the tags : <span class="stackoverflow-tag">easyphp</span> and/or <span class="stackoverflow-tag">easyphp-devserver</span> and/or <span class="stackoverflow-tag">easyphp-webserver</span>
									</p>
									<p style="text-align:center;">
										<a href="http://stackoverflow.com/" class="btn btn-primary button-link" target="_blank"  role="button"><i class="fa fa-stack-overflow"></i>&nbsp;&nbsp;&nbsp;Go to Stack Overflow</a>
									</p>
								</div>

							</div>
							<div class="col-lg-6">
								
								<div class="col-lg-3" style="padding-top:60px;">
									<img src="libraries/img/logo_github_100x100.png" width="100" alt="GitHub" title="GitHub" />
								</div>
								<div class="col-lg-9">
									<h3 style="font-size:25px;">Issues</h3>
									<p>
										If you find a bug, please report it by using the GitHub issue management system of each repository.	
									</p>
									<p style="text-align:center;margin-bottom:5px;">
										<a href="https://github.com/easyphp/devserver/issues" class="btn btn-primary button-link" target="_blank"  role="button"><i class="fa fa-github-alt"></i>&nbsp;&nbsp;&nbsp;Devserver issues</a>
									</p>
									<p style="text-align:center;margin-bottom:0px;">
										<a href="https://github.com/easyphp/webserver/issues" class="btn btn-primary button-link" target="_blank"  role="button"><i class="fa fa-github-alt"></i>&nbsp;&nbsp;&nbsp;Webserver issues</a>
									</p>
								</div>
							</div>

						</div>						

					</div>
				</div>

				<br />
				
			</div> <!--/ .container -->
		</div><!--/ #headerwrap -->

		
		<!-- DEVSERVER FAQ -->
		<div id="devserverfaq">
		<br />
		<br />
			<div class="container">
				<div class="row centered">

					<h1>DEVSERVER FAQ</h1>
					
					<br />

				</div>					

				<br />

				<div class="row centered">
					<div class="col-lg-12" style="margin-bottom:-27px;">
						<a href="#home" class="smoothScroll"><span class="btn btn-default btn-sm glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
					</div>
					<hr />					
				</div>

			</div> <!--/ .container -->
		</div><!--/ #devserverfaq -->		
		
		
		<!-- WEBSERVER FAQ -->
		<div id="webserverfaq">
		<br />
		<br />
			<div class="container">
				<div class="row centered">

					<h1>WEBSERVER FAQ</h1>
					
					<br />

				</div>					

				<br />

				<div class="row centered">
					<div class="col-lg-12" style="margin-bottom:-27px;">
						<a href="#home" class="smoothScroll"><span class="btn btn-default btn-sm glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
					</div>
					<hr />					
				</div>

			</div> <!--/ .container -->
		</div><!--/ #webserverfaq -->
		
		<div id="footer">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-6 col-lg-offset-3">
						<p>
							EasyPHP 2000 - 2016<br />
							Contact us : <a href="mailto:easyphpdotorg@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>

	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="libraries/js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="libraries/js/smoothscroll.js"></script>	

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="libraries/js/bootstrap.js"></script>
		<script>
		$('.carousel').carousel({
		  interval: 3500
		})
		</script>

	</body>
</html>
