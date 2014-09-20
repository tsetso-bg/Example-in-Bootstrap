
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="icon" href="ico/favicon.ico">
		<title>..:: HOW COMPANY ::..</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/font.css">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/howCompany.css" rel="stylesheet"> 
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	    <script src="js/ie-emulation-modes-warning.js"></script>

  
	</head>
	<body>
		<header>
		    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		      <div class="container">
			      <div class="head-left col-md-10 col-sm-10 col-xs-10">
			        <div class="navbar-header">
			          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <div class="navbar-brand col-xs-2">
			          <a class="navbar-brand" href="#"><img src="img/logo.png" alt="HOW COMPANY"></a>
			          </div>
			        </div>
				    <div class="collapse navbar-collapse">
				      <ul class="nav navbar-nav">
				        <li><a href="#">HOME</a></li>
				        <li><a href="#OverONS">OVER ONS</a></li>
				        <li><a href="#Programmas">PROGRAMA’S </a></li>
				        <li><a id="current" href="#">CONTACT</a></li>
				      </ul>
				    </div>
			      </div>
			      <div class="head right col-md-2 col-sm-2 col-xs-2 ">
					<div class="lang">
						<span ><a class="activ" href="#">NL</a></span><span> / </span><span><a href="#">EN</a></span>
					</div>
					<div class="login">
						<div class="btn-group">
		 				 <button type="button" class="btn btn-default">Inloggen</button>
						</div>
					</div>
			  	  </div>
			 </div>
			</div>
		</header>
		<section>
		   <div class="container">
			  <div class="info col-md-4 col-sm-12 col-xs-12">
				<?php
				$Naam = $_GET['Naam'];
				$Functie = $_GET['Functie'];
				$Bedrijfsnaam = $_GET['Bedrijfsnaam'];
				$Telefoon= $_GET['Telefoon'];
				$Emailadres= $_GET['Emailadres'];
				$text= $_GET['text'];
				?>
				<br><br>
				<div><h3>Little joke for test</h3></div>
				<div><span>Naam :    </span><span><?php echo $Naam ; ?></span></div>
				<div><span>Functie : </span><span><?php echo $Functie; ?></span></div>
				<div><span>Bedrijfsnaam : </span><span><?php echo $Bedrijfsnaam; ?></span></div>
				<div><span>Telefoon : </span><span><?php echo $Telefoon; ?></span></div>
				<div><span>E-mailadres : </span><span><?php echo $Emailadres; ?></span></div>
				<div><span>Bericht : </span><span><?php echo $text; ?></span></div>
			 </div>
		   </div>
		</section>
		<footer>
			<div class="footer">
			    <div class="container">
			    	<div class="footer-news col-md-4 col-sm-12 col-xs-12">
			    		<h4>Nieuws</h4>
			    		<ul class="news">
			    			<li><a href="http://www.webfactory.bg/en">De succesvolle resultaten bij onze partner ONVZ Zorgverzekeraar</a> <span class="glyphicon glyphicon-play"></span></li>
			    			<li><a href="http://www.webfactory.bg/en">Nieuwe data voor Personal Excellence in HR 2014 bekend </a><span class="glyphicon glyphicon-play"></span></li>
			    			<li><a href="http://www.webfactory.bg/en">Naast mentale nu ook fysieke ontwikkeling! </a><span class="glyphicon glyphicon-play"></span></li>
			    			<li><a href="http://www.webfactory.bg/en">Persoonlijk Leiderschap voor Schoolleiders    30 sept, opbrengst naar goed doel </a><span class="glyphicon glyphicon-play"></span></li>
			    			<li><a href="http://www.webfactory.bg/en">De succesvolle resultaten bij onze partner ONVZ Zorgverzekeraar </a><span class="glyphicon glyphicon-play"></span></li>
			    			<li><a class="active" href="#">Bekijk meer nieuws</a> <span class="glyphicon glyphicon-play"></span></li>
			    		</ul>
			    	</div>
			    	<div class="footer-programs col-md-4 col-sm-12 col-xs-12">
			    		<h4>PROGRAMS</h4>
			    		<ul>
			    			<li><a href="http://www.webfactory.bg/en">Communication for Excellence </a><span class="glyphicon glyphicon-play"></span></li>
			    			<li><a href="http://www.webfactory.bg/en">Leadership for Excellence </a><span class="glyphicon glyphicon-play"></span></li>
			    			<li><a href="http://www.webfactory.bg/en">Praktische Communicatie Vaardigheden </a><span class="glyphicon glyphicon-play"></span></li>
			    			<li><a href="http://www.webfactory.bg/en">In Company trainingen</a><span class="glyphicon glyphicon-play"></span></li>
			    			<li><a href="http://www.webfactory.bg/en">Coaching </a><span class="glyphicon glyphicon-play"></span></li>
			    			<li><a href="http://www.webfactory.bg/en">Opleiding tot coach / trainer</a> <span class="glyphicon glyphicon-play"></span></li>
			    			<li><a class="active" href="http://www.webfactory.bg/en">Lees meer over alle trainingen </a><span class="glyphicon glyphicon-play"></span></li>
			    		</ul>
			    	</div>
			    	<div class="footer-company col-md-4 col-sm-12 col-xs-12">
			    		<h4>COMPANY</h4>
			    		<div class="company">
			    		<div class="bubble">
			    			<p><span>KarenMolin-vOverbeek:</span> Ik zoek een training Persoonlijke Effectiviteit, en het liefst in relatie tot marketing en communicatie.Tips?<span> #dtv</span> </p>

			    		</div>
				    		<div class="follow"><p><a href="https://twitter.com/webfactorytwit"><img src="img/follow.png" alt="twitter"></a><span>@HowCompany</span></p></div>
			    		</div>
			 
			    		<div class="buttons">
			    		<a href="https://www.linkedin.com/"><img src="img/li.png" alt="linkedin"></a>
			    		<a href="http://www.trecens.nl/p35-cedeo-erkenning.aspx"><img src="img/credo1.png" alt="Credo"></a>
			    		<a href="http://www.trecens.nl/p35-cedeo-erkenning.aspx"><img src="img/credo2.png" alt="Credo"></a>	
			    		</div>
			    	</div>
				</div>
		    </div>
		</footer>
	  <script src="js/bootstrap.min.js"></script>
	  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	  <script src="js/ie10-viewport-bug-workaround.js"></script>
	  <script type="text/javascript">
			    $(document).ready(function(){
			        $(".custom-select").each(function(){
			            $(this).wrap("<span class='select-wrapper'></span>");
			            $(this).after("<span class='holder'></span>");
			        });
			        $(".custom-select").change(function(){
			            var selectedOption = $(this).find(":selected").text();
			            $(this).next(".holder").text(selectedOption);
			        }).trigger('change');
			    })
	  </script>
	</body>
</html>
