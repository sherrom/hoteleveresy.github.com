<html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HOTEL EVEREST</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />


<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
    <style>
     body {
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  line-height: 24px;
  color: rgb(0, 0, 0);
  background-color: #fdf8f8;
         
}
        

    .table{
  width: 65%;


}
        th{
            color: white;
         
        }
        h3{
            background-color: deepskyblue;
            color:white;
            margin-right: 68%;
            text-align: center
            
        }
    </style>
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<!-- header -->
<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li>
								<link href="bootstrap.min.css" rel="stylesheet">
							</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>

					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@hoteleverest.com">INFO@HOTELEVEREST.COM</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+81 80224538</li>
					<li class="s-bar">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder=" " required=" " />
									<input type="submit" value="Search">
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="../index.php">HOTEL  <span>EVEREST</span><p class="logo_w3l_agile_caption">Your Dreamy Hotel</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="../index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="reservation.php"  class="menu__link scroll">Reservation</a></li>
							<li class="menu__item"><a href="../index.php"  class="menu__link scroll">Team</a></li>
							
							<li class="menu__item"><a href="../index.php"  class="menu__link scroll">Contact Us</a>
              <li class="menu__item"><a href="tariff.php" class="menu__link scroll">Tariff And policy</a>
                            </li>



						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>



<?php
	include "db.php";
	$qrysel="select * from tariff";
	$rs=mysqli_query($con,$qrysel);

	if(!$rs)
	{
		echo "<font color=purple size=4>In correct mysql select Query.</font>";
		die($qrysel);
	}
	echo "<center>";
	echo "<table class=table>";
	echo "<caption><font color='rgba(0,0,0,0.7)' size=4><b><i>Room Tariff</i></b></font></caption>";
	echo "<tr bgcolor=aquamarie><th bgcolor=#1f17e8>ROOM</th><th bgcolor=#1f17e8 colspan=2>NR</th><th   bgcolor=#1f17e8 colspan=2>USD</th><th bgcolor=#1f17e8>TOTAL</th></tr>";
	echo "<tr bgcolor=aquamarie><th bgcolor=deepskyblue>TYPE</th><th bgcolor=deepskyblue>SINGLE</th><th bgcolor=deepskyblue>DOUBLE</th><th bgcolor=deepskyblue>SINGLE</th><th bgcolor=deepskyblue>DOUBLE</th><th bgcolor=deepskyblue>ROOM</th></tr>";

	while($v=mysqli_fetch_array($rs))
	{
		echo "<tr>";
		echo "<td bgcolor=aquamarie>".$v['type']."</td>";
		echo "<td bgcolor=aquamarie>".$v[1]."</td>";
		echo "<td bgcolor=aquamarie>".$v[2]."</td>";
		echo "<td bgcolor=aquamarie>".$v[3]."</td>";
		echo "<td bgcolor=aquamarie>".$v[4]."</td>";
		echo "<td bgcolor=aquamarie>".$v[5]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
<br><br>
<center><table>
<tr>
    
	<td textcolor=aquamarine>
	<ul type=square>
        <li><h3>Policies:<h3> </li><br>
		<ul>

            <li>You can check in from 15:00 PM. If you arrive earlier, you can store your baggage in the hotel's baggage area until your room is ready.<br> If the room has been cleaned and is ready before 15:00, you may have access to the room earlier.Please be aware of our additional <br>charge for early check-in.</li><br><li> It’s free and subject to availability if you booked your<br> stay directly on our website hoteleverest.com,early check-in is from 10.00 AM and there will be no extra charge .</li><br>
            
            <li>The room is yours until 12:00 PM on your day of departure. If you wish to check out later than 12:00 PM, please contact reception. <br>Please be aware of our additional charge for late check-out.</li><br>

            <li>Late check-out is until 16.00 PM and the price is Us 30 . Default price set on US 25 where the charge is per hour.</li><br>

            <li>Early arrival is subject to availability,for guaranted early check in,reservation needs to be made starlings form previous night.</li><br>
            <li>Goverment taxes & levies extra as applicable.</li><br>
            <li>NRS Rs.700 (usd*58) for extra person/bed.</li>
		</ul>
		<br>
            <li><h3>Reservation & Guarantee: <h3></li><br>
			<ul>
				<li>All booking must be guaranteed at time of reservation threw hotel everest or travel agency.
			</ul>
		<br>
        <li><h3>Reservation & Cancellation:</h3> </li><br>
		<ul>
            <li>Reservation must be done before 12 hour from your arrival schedule.</li><br>
            <li>Reservation must be cancelled 24 hours prior to the <br>planned arrivaltime.</li><br>
            <li>One night room charge will be levied in case of non arrival.</li><br>
		</ul>
	</ul>
</table>
<br />
    <div class="copy">
		        <p>© 2019 HOTEL EVEREST . All Rights Reserved </p>
		    </div>
</body>
</html>