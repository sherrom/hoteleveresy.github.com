
<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HOTEL EVEREST</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> 
addEventListener("load", function()
{
	setTimeout(hideURLbar, 0);
}, false);
function hideURLbar()
{ 
	window.scrollTo(0,1); 
}
</script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/jquery-ui.js"></script>	
<script src="js/jquery.swipebox.min.js"></script>
<script src="js/jquery.snow.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts--> 
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
var URL_SERVICE_TENKI = "http://weather.livedoor.com/forecast/webservice/json/v1?city=260010";
var URL_SERVICE_CURRENCY = "https://api.exchangeratesapi.io/latest";

function ChangeMoney(SrcMoney, SrcHuilv, DestHuilv)
{
	var EUMoney = 0;
	EUMoney = SrcMoney / SrcHuilv;
	return EUMoney * DestHuilv;
}

function GetKisetsu()
{
	var Hitsuke = new Date();
	Month = Hitsuke.getMonth()+1;

	if(Month >= 3 && Month < 6)
	{
		return 'Haru';
	}
	else if(Month>=6 && Month < 9)
	{
		return 'Natsu';
	}
	else if(Month >= 9 && Month <= 11)
	{
		return 'Aki';
	}
	else if(Month <= 3 || Month>= 12)
	{
		return 'Huyu';
	}
	else
	{
		return 'NANI';
	}
}
	
function IEVersion() 
{
	var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串  
	var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1; //判断是否IE<11浏览器  
	var isEdge = userAgent.indexOf("Edge") > -1 && !isIE; //判断是否IE的Edge浏览器  
	var isIE11 = userAgent.indexOf('Trident') > -1 && userAgent.indexOf("rv:11.0") > -1;
	if(isIE)
	{
		var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
		reIE.test(userAgent);
		var fIEVersion = parseFloat(RegExp["$1"]);
		if(fIEVersion == 7)
		{
			return 7;
		} 
		else if(fIEVersion == 8)
		{
			return 8;
		} 
		else if(fIEVersion == 9)
		{
			return 9;
		}
		else if(fIEVersion == 10)
		{
			return 10;
		}
		else
		{
			return 6;//IE版本<=7
		}   
	} 
	else if(isEdge)
	{
		return 'edge';//edge
	}
	else if(isIE11)
	{
		return 11; //IE11  
	}
	else
	{
		return -1;//不是ie浏览器
	}
}
</script>
</head>
<body>

<!-- header -->
<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
							</ul>
			</div>
			<div class="contact-bnr-w3-agile">
            		<ul>
                    <li>
                    <div id="google_translate_element">
  					<script type="text/javascript">
                    function googleTranslateElementInit()
					{
                    	var www=new google.translate.TranslateElement({pageLanguage: 'auto'}, 'google_translate_element');
                    } 
                	</script>
                    </div>  
					</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">INFO@HOTELEVEREST.COM</a></li>
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
					<h1><a class="navbar-brand" href="index.php">HOTEL  <span>EVEREST</span><p class="logo_w3l_agile_caption">Your Dreamy Hotel</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
                            <li class="menu__item"><a href="admin/tariff.php">Tariff And policy</a></li>
                            <li class="menu__item"><a href="../comment_box/index.php">comment</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
		<!-- banner -->
	<div id="comment" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>HOTEL EVEREST</h4>
									<h3>We know what you love</h3>
										<p>Welcome to our hotels</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>HOTEL EVEREST</h4>
									<h3>Stay with friends & families</h3>
										<p>Come & enjoy precious moment with us</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>HOTEL EVEREST</h4>
								<h3>want luxurious vacation?</h3>
										<p>Get accommodation today</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>HOTEL <span>EVEREST</span></h4>
										<img src="images/1.jpg" alt=" " class="img-responsive">
										<h5>We know what you love</h5>
										<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">
	<a href="admin/reservation.php"><h2>ROOM RESERVATION</h2></a>
</div>

			<div class="clearfix"> </div>
</div>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3><span>Experience a good stay, enjoy fantastic offers</span> Find our friendly welcoming reception</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">MASTER BEDROOMS</h4>
							<span class="cbp-ig-category">HOTEL EVEREST</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">SEA VIEW BALCONY</h4>
							<span class="cbp-ig-category">HOTEL EVEREST</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">LARGE CAFE</h4>
							<span class="cbp-ig-category">HOTEL EVEREST</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI COVERAGE</h4>
							<span class="cbp-ig-category">HOTEL EVEREST</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- /about -->
 	<div class="about-wthree" id="about">
		  <div class="container">
				   <div class="ab-w3l-spa">
                            <h3 class="title-w3-agileits title-black-wthree">About Our HOTEL EVEREST</h3> 
						   <p class="about-para-w3ls">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Sed tempus vestibulum lacus blandit faucibus. Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, at imperdiet urna</p>
						   <img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
										<div class="w3l-slider-img">
											<img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
										</div>
                                       <div class="w3ls-info-about">
										    <h4>You'll love all the amenities we offer!</h4>
											<p>Lorem ipsum dolor sit amet, ut magna aliqua. </p>
										</div>
		          </div>
		   	<div class="clearfix"> </div>
    </div>
</div>
 	<!-- //about -->
<!--sevices-->
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
				<h3 class="title-w3-agileits">Our Services</h3>
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>Stay First, Pay After! </h4>
			 		<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>
			 		
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
<div class="advantage-block">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
			 		<h4>24 Hour Restaurant</h4>
			 		<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24-hour Concierge service</p>
			 	</div>
			 </div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Meet Our Team</h3>
			<div id="horizontalTab">
					<ul class="resp-tabs-list">
					<li>
						<img src="images/teams1.jpg" alt=" " width="105" height="108" class="img-responsive" />
					</li>
					<li>
						<img src="images/teams2.jpg" alt=" " width="102" height="121" class="img-responsive" />
					</li>
					</ul>
					<div class="resp-tabs-container">
			  <div class="tab1">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
		          <h4>Kō Kanei</h4>
							<span>Manager</span>
							<p>Kō is making this front page in this G31 team.</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
<div class="clearfix"> </div>
					</div>
					<div class="tab2">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
		          <h4>SHRESTHA RAM</h4>
							<span>Receptionist</span>
							<p>He is making the SQL program in this team.</p>	
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab3">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab4">
					<div class="col-md-6 team-img-w3-agile">
						</div>
					<div class="clearfix"> </div>
					</div>
					</div>
			</div>
	</div>
</div>
<!-- //team -->
<!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">
		 <h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
					<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HOTEL EVEREST</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->
	 <!-- rooms & rates -->
      <div class="plans-section" id="rooms">
<script>
        $.getJSON(URL_SERVICE_CURRENCY, function(data)
        {
			var dstRates, dstSymbol;
			var coLang;
			
            var srcKane1 = $("#Okane1").text();
			var srcKane2 = $("#Okane2").text();
			var srcKane3 = $("#Okane3").text();
			var srcKane4 = $("#Okane4").text();
			
			if (IEVersion() == -1)
			{
				coLang = (navigator.language).toLowerCase();
			}
			else
			{
				coLang = (navigator.browserLanguage).toLowerCase();
			}
			
			if(coLang == "zh-cn")
			{
				dstRates = data.rates.CNY;
				dstSymbol = "¥";
			}
			else if(coLang == "zh-hk")
			{
				dstRates = data.rates.HKD;
				dstSymbol = "$";
			}
			else if(coLang == "en-gb")
			{
				dstRates = data.rates.GBP;
				dstSymbol = "₤";
			}
			else if(coLang == "en-us")
			{
				dstRates = data.rates.USD;
				dstSymbol = "$";
			}
			else if(coLang == "en_ca" || coLang == "fr_ca")
			{
				dstRates = data.rates.CAD;
				dstSymbol = "$";
			}
			else if(coLang.substring(0,2) == "ko")
			{
				dstRates = data.rates.KRW;
				dstSymbol = "₩";
			}
			else
			{
				dstRates = data.rates.JPY;
				dstSymbol = "¥";
			}
			
			$("#curSymbol1").text(dstSymbol);
			$("#curSymbol2").text(dstSymbol);
			$("#curSymbol3").text(dstSymbol);
			$("#curSymbol4").text(dstSymbol);
			
			$("#Okane1").text(Math.round(ChangeMoney(srcKane1, data.rates.JPY, dstRates)));
			$("#Okane2").text(Math.round(ChangeMoney(srcKane2, data.rates.JPY, dstRates)));
			$("#Okane3").text(Math.round(ChangeMoney(srcKane3, data.rates.JPY, dstRates)));
			$("#Okane4").text(Math.round(ChangeMoney(srcKane4, data.rates.JPY, dstRates)));
        });
        </script>
				 <div class="container">
                                      <?php
					function getRoom($roomType)
					{
						  $conn = mysqli_connect("localhost","root","root","hotel") or die(mysql_error());
						  $sql = "SELECT count(*) FROM room WHERE type = '".$roomType."'; ";
						  $result = mysqli_query($conn,$sql);
						  if ($result->num_rows > 0) 
						  {
							while($row = $result->fetch_assoc()) 
							{
								return $row["count(*)"];
							}
						  }
						  else 
						  {
							return ":-(";
						  }
					}
					//$conn->close();
				?>
				 <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
						<div class="priceing-table-main">
				 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r1.jpg" alt="Deluxe Room!" class="img-responsive" />
							<h4>Deluxe Room Remain: &nbsp;<?php echo(getRoom("Deluxe Room")); ?></h4>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								     </ul>
							</div>
							<div class="price-selet">	
                            <!--
                            <span id="Currency1">
                            </span><span id="Prise1">
                            </span>
                            -->
							  <h3 id="Prise1">
                                	<span id="curSymbol1">¥</span><span id="Okane1">10000</span>
                          </h3>						
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r2.jpg" alt=" " class="img-responsive" />
							<h4>Luxury Room Remain: &nbsp;<?php echo(getRoom("Luxury Room")); ?></h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
									<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3 id="Prise2">
                                	<span id="curSymbol2">¥</span><span id="Okane2">10000</span>
                        </h3>
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r3.jpg" alt=" " class="img-responsive" />
							<h4>Guest House Remain: &nbsp;<?php echo(getRoom("Guest House")); ?></h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">  

			          <h3><span id="curSymbol3">¥</span><span id="Okane3">5000</span></h3>
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost">
<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/r4.jpg" alt=" " class="img-responsive" />
							<h4>Single Room Remain: &nbsp;<?php echo(getRoom("Single Room")); ?></h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span id="curSymbol4">¥</span><span id="Okane4">3000</span></h3>
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	 <!--// rooms & rates -->
  <!-- visitors -->
	<div class="w3l-visitors-agile" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">What other visitors experienced</h3> 
		</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Julia Rose</h5>
								<p>Germany</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Jahnatan Smith</h5>
								<p>United States</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Rosalind Cloer</h5>
								<p>Italy</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Amie Bublitz</h5>
								<p>Switzerland</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>	
	</div>
  <!-- visitors -->
<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Sign Up For Our News Letters</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    		<div class="control-group form-group">
                        
                            <label class="contact-p1">Queation:</label>
                            <input type="text" class="form-control" name="question" id="question" required >
                            <p class="help-block"></p>
                       
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
				</form>
				<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$question=$_POST['question'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>
			</div>
		</div>
        
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
  <h4>&nbsp;</h4>
			<h4>Connect With Us</h4>
		  <p class="contact-agile1"><strong>Phone :</strong>+94 (65)222-44-55</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@HOTELEVEREST.COM</a></p>
			<p class="contact-agile1"><strong>Address :</strong> </p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul>
			</div>
		</div>
		
    <h1> <font color="white" background="#01A9DB">We Are located At!</font> </h1>

		<div class="clearfix"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8263.389097105211!2d135.75457197051176!3d34.984791712819685!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x223ec5b1e1af9e3!2sKyoto%20Computer%20Gakuin!5e0!3m2!1sen!2sjp!4v1571030110943!5m2!1sen!2sjp" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
	</div>
</section>
<!-- /contact -->
			<div class="copy">
		        <p>© 2019 HOTEL EVEREST . All Rights Reserved | Design by <a href="index.php">HOTEL EVEREST</a> </p>
		    </div>
<!--/footer -->
<!-- js -->

<!-- contact form -->

<!-- /contact form -->	
<!-- Calendar -->

		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
    <audio id="KaminariKoe" src="thunder3.mp3" controls="controls"  hidden="false">
    	Désolé, ce navigateur ne supporte pas la balise de &lt;audio /&gt;
    </audio>
    <audio id="UguisuKoe" src="Uguisu.mp3" controls="controls" hidden="true">
    	Désolé, ce navigateur ne supporte pas la balise de &lt;audio /&gt;
    </audio>
    <script>
	var Uguisu = document.getElementById("UguisuKoe");
	var Kaminari = document.getElementById("KaminariKoe");
	var sKisetsu = GetKisetsu();
	
    if(sKisetsu == 'Haru')
    {
		//雨が降ります, それてもし晴れば桜が降ります
		$.ajax("TenkiStmn.php", {"success":function(data)
		{
			var TenkiMsg = data.forecasts[0].telop;
			
			if(TenkiMsg == "晴れ" || TenkiMsg == "晴時々曇" || TenkiMsg == "曇のち晴" || TenkiMsg == "曇時々晴") //|| TenkiMsg == "曇り")
			{
				$.fn.snow({minSize: 2, maxSize: 60, newOn: 1700, flakeColor: '#ffdede', flakeText: '🌸'});
				//鳥の鳴き
				Uguisu.play();
			}
			else if(TenkiMsg == "雨のち曇" || TenkiMsg == "曇時々雨")
			{
				$.fn.snow({minSize: 2, maxSize: 10, newOn: 140, flakeColor: '#00deff', flakeText: '💧'});
			}
			else if(TenkiMsg == "曇のち雨" || TenkiMsg == "雨")
			{
				$.fn.snow({minSize: 2, maxSize: 10, newOn: 140, flakeColor: '#00deff', flakeText: '💧'});
				//雷の声
				Kaminari.play();
			}
		}});
    }
    else if(sKisetsu == 'Natsu')
    {
		//雨が降ります
		$.ajax("TenkiStmn.php", {"success":function(data)
		{
			var TenkiMsg = data.forecasts[0].telop;
			
			if(TenkiMsg == "雨のち曇" || TenkiMsg == "曇時々雨")
			{
				$.fn.snow({minSize: 2, maxSize: 10, newOn: 140, flakeColor: '#00deff', flakeText: '💧'});
			}
			else if(TenkiMsg == "曇のち雨" || TenkiMsg == "雨")
			{
				$.fn.snow({minSize: 2, maxSize: 10, newOn: 140, flakeColor: '#00deff', flakeText: '💧'});
				Kaminari.play();
			}
		}});
    }
    else if(sKisetsu == 'Aki')
    {
		//紅葉が降ります
		$(document).ready( function()
		{
			$.fn.snow({minSize: 2, maxSize: 70, newOn: 140, flakeColor: '#ff1200', flakeText: '🍁'});
		});
    }
    else if(sKisetsu == 'Huyu')
    {
		//雪が降ります
		$(document).ready( function()
		{
			$.fn.snow({minSize: 2, maxSize: 150, newOn: 300, flakeColor: '#eee', flakeText: '&#10052;'});
		});
    }
    </script>
    
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>