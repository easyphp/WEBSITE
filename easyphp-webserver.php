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
						<li class="active"><a href="easyphp-webserver.php">webserver</a></li>
						<li><a href="support.php">support</a></li>
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
							<a href="#updateandextend" class="smoothScroll list-group-item">Update and extend</a>
							<a href="#features" class="smoothScroll list-group-item">Features</a>
							<a href="#requirements" class="smoothScroll list-group-item">Requirements</a>
							<!--<a href="#screenshot" class="smoothScroll list-group-item">Screenshot</a>-->
						</div>
					</div>

					<div class="col-lg-10 centered">
						<div class="row">
							<div class="col-lg-12 centered">
								<h1><b>WEBSERVER</b></h1>
								<h4 style="text-align:center;color:white;margin:-10px 0px 20px 0px;">Host with <b>Webserver</b></h4>
								<h6 style="text-align:center;color:white;margin:-12px 0px 4px 0px;">Hosting server running PHP, Apache,<br />MySQL, PhpMyAdmin...</h6>
								<img src="libraries/img/logo_easyphp-webserver_38x38.png" width="38" alt="" />
							</div>
						</div>
						
						<br />
						
						<div class="row">

							<div class="col-lg-10 col-lg-offset-1">

								<p style="text-align:justify;">
									Devserver installs a complete and ready-to-use development environment. Devserver is portable, modular, fully configurable and easy to update and extend (see <a href="http://warehouse.easyphp.org/" target="_blank">modules</a> and <a href="http://warehouse.easyphp.org/" target="_blank">components</a>).
								</p>

								<div class="row">
									<div class="col-lg-6" style="padding:0px;">
										<table class="download">
											<tr>
												<td class="download-left">
													<a href="http://www.easyphp.org/save-easyphp-webserver-latest.php?d=direct"><span class="glyphicon glyphicon-save" style="font-size:30px;"></span></a>
												</td>
												<td class="download-right">
													<a href="http://www.easyphp.org/save-easyphp-webserver-latest.php?d=direct">
														EasyPHP Devserver<br /><b>14.1</b> <span style="font-size:70%">VC9</span>
													</a>								
												</td>
											</tr>
										</table>
									</div>	
									<div class="col-lg-6">
										<ul style="padding-top:15px;">
											<li>Size : 35 MB</li>
											<li>Windows XP to 10</li>
											<li>Visual C++ Redistributable for Visual Studio 2008 SP1</i> <a href="http://www.microsoft.com/en-us/download/details.aspx?id=5582">x86</a> or <a href="http://www.microsoft.com/en-us/download/details.aspx?id=15336">x64</a> required</li>
										</ul>	
									</div>													
								</div>													

							</div>

						</div>
					</div>
				</div>
				
				<br />
				<br />
				
			</div> <!--/ .container -->
		</div><!--/ #headerwrap -->

		
		<!-- UPDATE AND EXTEND -->
		<div id="updateandextend">
		<br />
		<br />
			<div class="container">
				<div class="row centered">

					<h1>Update & Expend</h1>
					<h3>soon</h3>
					
					<br />
	
					<div class="row">
						<div class="col-lg-6 col-lg-offset-3" style="text-align:justify;">
							<p>
								Update and expend your hosting server with <b>modules</b> and <b>components</b>.
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-10 col-lg-offset-1">
							<a href="http://warehouse.easyphp.org/" class="btn btn-primary" target="_blank"  role="button"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>&nbsp;&nbsp;<b>MODULES</b> and <b>COMPONENTS</b></a>
						</div>
					</div>
					
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
		</div><!--/ #updateandextend -->		
		
		
		<!-- FEATURES -->
		<div id="features">
		<br />
			<div class="container">
				<div class="row centered">

					<h1>Features</h1>
					<br />
					
					<div class="col-lg-2 col-lg-offset-1">
						<p class="devicons">
							<i class="devicon-php-plain"></i>
						</p>
						<p class="devicons">
							<i class="devicon-apache-plain-wordmark"></i>
						</p>
						<p class="devicons">
							<i class="devicon-mysql-plain-wordmark"></i><br />
							&nbsp;...&nbsp;&nbsp;&nbsp;
						</p>
					</div>					

					<div class="col-lg-8">
						<p style="text-align:justify;">Webserver is a personal web hosting service. You can host your websites, files, applications on your computer and make them accessible from internet. You can tune your servers as you like and then host your websites, share your applications or demo permanently or for a short period of time (useful for sharing with friends, developers or clients). Develop with Devserver and host / share with Webserver.</p>
						<p style="text-align:justify;"><b>Components</b> : http server with Apache (or Nginx - soon), database server with MySQL (or PostgreSQL, MongoDB - soon), PHP (and Python, Ruby - soon), database management with PhpMyAdmin, FTP server with Filezilla (soon), mail server with hMailServer (soon)...</p>
						<p style="text-align:left;padding:0px;margin:0px;">Features :</p>
						<ul style="text-align:left;">
							<li>Ready-to-use! Download, install and host!</li>
							<li>Manage servers services</li>
							<li>Easy IP, router and firewall configuration</li>
							<li>Fully configurable (port, timezone, extensions...)</li>
							<li>Configuration files, error log, access log...</li>
							<li>Modular : add applications, versions...</li>
							<li>...</li>
						</ul>
					</div>

				</div>
				
				<br />

				<div class="row centered">
					<div class="col-lg-12" style="margin-bottom:-27px;">
						<a href="#home" class="smoothScroll"><span class="btn btn-default btn-sm glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
					</div>
					<hr />					
				</div>

			</div> <!--/ .container -->
		</div><!--/ #features -->
		


		<!-- REQUIREMENTS -->
		<div id="requirements">
		<br />
		<br />
			<div class="container">
				<div class="row">
				
					
					<h1 class="centered">Requirements</h1>
					
					<br />
					
					<div class="row">
					
						<div class="col-lg-6 col-lg-offset-3">				
									
							<div class="row">
								<h4><b>EasyPHP Webserver 14.1 beta 2</b> <span style="font-size:70%">VC9</h4>
								<ul>
									<li>Windows XP to 10</li>
									<li>Hard disk / USB key space : ~ 260 MB</li>
									<li>Visual C++ Redistributable for Visual Studio 2008 SP1</i> <a href="http://www.microsoft.com/en-us/download/details.aspx?id=5582">x86</a> or <a href="http://www.microsoft.com/en-us/download/details.aspx?id=15336">x64</a> installed</li>
								</ul>	
							</div>	
							
						</div>

					</div>													

					<br />				
					
					<div class="row">
					
						<div class="col-lg-6 col-lg-offset-2">				
								<h3>Why VC9 ?</h3>	
								<p style="text-align:justify;">
									Versions of PHP and Apache are built with VC9 (Visual Studio 2008 compiler). The VC9 builds require you to have the <b><i>Visual C++ Redistributable for Visual Studio 2008 SP1</i> <a href="http://www.microsoft.com/en-us/download/details.aspx?id=5582">x86</a> or <a href="http://www.microsoft.com/en-us/download/details.aspx?id=15336">x64</a></b> installed.<br />
								</p>
								<p style="text-align:justify;">	
									<i>So why choosing VC9 ?</i><br />
									For compatibilty reasons. Usually, the Visual C++ Redistributable is already installed (this install needs admin privileges). 
								</p>
								<p style="text-align:justify;">
									<i>Why VC9 versions won't include PHP 5.5.x ?</i><br />
									PHP 5.4 is the last series to support Windows XP and Windows 2003. The PHP Team will not provide binary packages for these Windows versions after PHP 5.4.	
								</p>	
						</div>	
						
					</div>			

				</div>
				
				<div class="row centered" style="margin-bottom:-17px;">
					<div class="col-lg-12" style="margin-bottom:-27px;">
						<a href="#home" class="smoothScroll"><span class="btn btn-default btn-sm glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
					</div>
					<hr />					
				</div>				
				
			</div> <!--/ .container -->
		</div><!--/ #requirements -->

		<!--
		<div id="showcase">
			<div class="container">
				<div class="row">
					<h1 class="centered">Screenshots</h1>
					<br>
					<div class="col-lg-8 col-lg-offset-2">
						<div id="carousel-example-generic" class="carousel slide">
						  
						  <ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						  </ol>
						
						 
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="libraries/img/item-01.png" alt="">
							</div>
							<div class="item">
							  <img src="libraries/img/item-02.png" alt="">
							</div>
						  </div>
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>	
			</div>
		</div>	
		-->

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
