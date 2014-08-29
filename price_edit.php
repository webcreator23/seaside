<?php
session_start();
if (empty($_SESSION['sid'])) {
	// no session exists yet
?>
	<br><br><br><br><br><br>
	<center>
		<b>You must sign-in to access the admin webpage. &nbsp;Click on the Sign-In button below to login.</b>
		<br>
		<br>
		<br>
		<input type="button" value="&nbsp;&nbsp;Sign-in&nbsp;&nbsp;" onclick="javascript:location.href='login.html';">
	</center>
<?php
	exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" href="css/style.css" rel="stylesheet">
<link type="text/css" href="css/parallax.css" rel="stylesheet">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seaside</title>
<script type='text/javascript' src="js/jquery.js?ver=1.8.3"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/museo.font.js" type="text/javascript"></script>
<script type="text/javascript">
			Cufon.replace('.menu > ul > li', { textShadow: '#560000 0 1px', hover: true, hoverables: { li: true }, ignore: { ul: true } } );
			Cufon.replace('.sexyslider-title a', { textShadow: '#000 0 1px', hover: 'true' } );
			Cufon.replace('.homepage-columns-item .title', { textShadow: '#47250f 0 1px' } );
			Cufon.replace('.main-title span', { textShadow: '#560000 0 1px' } );
			Cufon.replace('.menu-card-title', { textShadow: '#560000 0 1px' } );
			Cufon.replace('.show-all', { textShadow: '#fff 0 1px', hover: 'true' } );
			Cufon.replace('.price', { textShadow: '#a11b00 0 1px' } );
			Cufon.replace('h2, h3, h4, h5, h6', { hover: 'true' } );
			Cufon.replace('.top-navigation-left', { textShadow: '#560000 0 1px' } );
			Cufon.replace('.no-logo p', { textShadow: '#4b4b4b 0 1px' } );
			Cufon.replace('.date', { hover: 'true' } );
			Cufon.replace('.pages a', { hover: 'true' } );
			Cufon.replace('.news-title a', { textShadow: '#fff 0 1px', hover: 'true' } );
			Cufon.replace('blockquote', { hover: 'true' } );
			Cufon.replace('.menu-card .item .title', { hover: 'true', color: '#A65600' } );
			Cufon.replace('.photo-gallery-open .nr', { hover: 'true' } );
			Cufon.replace('.btn-1-color-default', { textShadow: '#fff 0 1px', hover: 'true' } );
			Cufon.replace('.btn-1-color-grey', { textShadow: '#fff 0 1px', hover: 'true' } );
			Cufon.replace('.btn-1-color-red', { textShadow: '#3e0000 0 1px', hover: 'true' } );
			Cufon.replace('.btn-1-color-yellow', { textShadow: '#f5d399 0 1px', hover: 'true' } );
			Cufon.replace('.btn-1-color-green', { textShadow: '#234b04 0 1px', hover: 'true' } );
			Cufon.replace('.btn-1-color-blue', { textShadow: '#022842 0 1px', hover: 'true' } );
			Cufon.replace('.btn-1-disabled', { textShadow: 'none' } );
			Cufon.replace('.btn-2-color-default', { textShadow: '#fff 0 1px', hover: 'true' } );
			Cufon.replace('.btn-2-color-grey', { textShadow: '#fff 0 1px', hover: 'true' } );
			Cufon.replace('.btn-2-color-red', { textShadow: '#3e0000 0 1px', hover: 'true' } );
			Cufon.replace('.btn-2-color-yellow', { textShadow: '#f5d399 0 1px', hover: 'true' } );
			Cufon.replace('.btn-2-color-green', { textShadow: '#234b04 0 1px', hover: 'true' } );
			Cufon.replace('.btn-2-color-blue', { textShadow: '#022842 0 1px', hover: 'true' } );
			Cufon.replace('.btn-2-disabled', { textShadow: 'none' } );
		</script>
</head>



<body>
<form name="frmEdit" method="POST" action="price_save.php">
<div class="container">
<div class="main-header-wrapper">
	
		<!-- BEGIN .header -->
		<div class="header">
																				<!-- BEGIN .feedback -->

					<div style="background: url(images/paluto.png) no-repeat scroll 150px 0px transparent; display: block;" class="feedback" id="feedback-1">
						<table>
							<tbody><tr>
								<td>
									<p class="text">
										<span>"Greatest seafood in town!"</span>
									</p>
									<p class="author">
										<span>- Raiza Jullienne</span>
										<img height="11" width="11" alt="" src="images/ico-star-1.png">
										<img height="11" width="11" alt="" src="images/ico-star-1.png">
                                        <img height="11" width="11" alt="" src="images/ico-star-1.png">
                                        <img height="11" width="11" alt="" src="images/ico-star-1.png">
                                        <img height="11" width="11" alt="" src="images/ico-star-1.png">
									</p>
								</td>
							</tr>
						</tbody></table>
					<!-- END .feedback -->
					</div>
															<!-- BEGIN .feedback -->
					
															<!-- BEGIN .feedback -->
					
															<!-- BEGIN .logo -->
					<div class="logo">
					
					<a href=#"><img height="129" width="289" alt="Bordeaux" src="images/seaside-logo.png"></a>					
					<!-- END .logo -->
					</div>
					
		<!-- END .header -->	
		</div>
				
	<!-- END .main-header-wrapper -->
	</div>
    <div class="menu-primary-wrapper">
			
				<!-- BEGIN .menu-primary -->
				<div class="menu-primary">
					<table>
						<tbody><tr>
							<td class="menu">
								<ul class="menu" id="menu-top-menu">
                                <li><a href="index.html"><i>Homepage</i></a></li>
                                <li><a href="alabang.html"><i>Alabang</i></a></li>
                                <li><a href="ortigas.html"><i>Ortigas</i></a></li>
                                <li><a href="macapagal.html"><i>Macapagal </i></a></li>
                                <li><a href="price.html"><i>Wet Market Prices</i></a></li>
                                <li><a href="contactus.html"><i>Contact Us</i></a></li>
                              </ul>							</td>
						</tr>
					</tbody></table>
				
				<!-- END .menu-primary -->
				</div>

			<!-- END .menu-primary-wrapper -->
			</div>
            <div class="homepage-slider-wrapper">

				<div id="layerslider" class="ls-container ls-lightskin" style="position: relative;">

					<div class="ls-inner" style="background-color: transparent; width: 950px; height: 335px;"><img src="images/alabang-market.jpg" width="950" height="335" /></div>

					

					

					

				<a href="#" class="ls-nav-prev"></a><a href="#" class="ls-nav-next"></a><div class="ls-bottom-nav-wrapper"><a href="#" class="ls-nav-start"></a><span class="ls-bottom-slidebuttons"><a href="#" class="ls-nav-active"></a><a href="#" class=""></a><a href="#" class=""></a><a href="#" class=""></a></span><a href="#" class="ls-nav-stop"></a></div></div>

			<!-- END .homepage-slider-wrapper -->
			</div>
            <div class="top-navigation-wrapper">
				<div class="top-navigation container-nav">
					<div class="top-navigation-left"><img alt="telephone" style="margin-right: 8px;" src="images/phone.png">Make your Reservation or Booking : Mobile: 0920-9704481 / 0917-8271450 / 0922-8434069</div>					
					<div class="top-navigation-right">
						<!-- Get Social Icons -->
						<div class="social-wrapper" id="gdl-social-icon">
							<div class="social-icon-wrapper">
								<div class="social-icon"><a href="http://www.facebook.com/SeasidePhilippines" target="_blank"><img alt="facebook" src="images/facebook.png"></a></div>							
						  </div> <!-- social icon wrapper -->
						</div> <!-- social wrapper -->	

					</div> <!-- top navigation right -->
					
					<div class="clear"></div>
				</div> <!-- top navigation container -->
				<div class="top-navigation-wrapper-gimmick"></div>
			</div>
            <div class="content-wrapper">

				<!-- BEGIN .content -->
				<div class="content">
				
						<table class="menu-card">
						
							<tbody><tr>
								
								<td class="navigation"><a id="card-prev" class="previous" href="#">&nbsp;</a></td>
							
								<td class="menu-card-content-wrapper">

									<div class="top">&nbsp;</div>

									<!-- BEGIN .content-wrapper -->
									<div class="content-wrapper">

										<!-- BEGIN .card-container -->
										<div activepage="2" id="card-container">

											<!-- BEGIN .card-slider -->
											<div id="card-slider" class="content" style="display: block;">
												
																<div id="cardpageid-2" class="card-page">
																	
																	<!-- BEGIN .left-side -->
																	<div class="left-side">
															
																	<div class="menu-card-title">Alabang - Wet Market Prices</div>
<h4>Updated Daily</h4>
														

<!--<h4>-</h4>	-->	
<table width="412" class="item">
																		<tbody><tr>
																			
																			<td width="37%" class="image"><h3>FISH</h3></td>
																			<td width="44%" class="">
																				
																			</td>
																			<td width="19%" class="menu-price"><p>As Low As</p></td>
																		</tr>
																	</tbody></table>															

<?php

include 'params.inc';

// Create connection
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db($dbname, $dbhandle)
  or die("Could not select ".$dbname);

//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 1");
$row = mysql_fetch_array($result);
?>

<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[1][1]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][1]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 2");
$row = mysql_fetch_array($result);
?>

																																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[1][2]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][2]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 3");
$row = mysql_fetch_array($result);
?>
																																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][3]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][3]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 4");
$row = mysql_fetch_array($result);
?>
																																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][4]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][4]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 5");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][5]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][5]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 6");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][6]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][6]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 7");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][7]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][7]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 8");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][8]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][8]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 9");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][9]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][9]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 10");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][10]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][10]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 11");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][11]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][11]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 12");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][12]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][12]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 13");
$row = mysql_fetch_array($result);
?>
																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][13]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][13]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 14");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][14]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][14]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 15");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][15]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][15]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 16");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][16]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][16]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 17");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][17]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][17]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 18");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][18]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][18]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 19");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][19]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][19]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 20");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][20]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][20]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 1 AND row_num = 21");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[1][21]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[1][21]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>

                                                                    <!-- END .left-side -->
																	</div>
																	
																	<!-- BEGIN .right-side -->
																	<div class="right-side">
																	<div style="height:120px;"></div>
														
                                                        <!--<h4>-</h4>-->	
                                                        <table width="412" class="item">
																		<tbody><tr>
																			
																			<td width="64%" class="image"><h3>Hipon</h3></td>
																			<td width="17%" class="">
																				
																			</td>
																			<td width="19%" class="menu-price"><p>As Low As</p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 1");
$row = mysql_fetch_array($result);
?>
																<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[2][1]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">

	</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][1]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 2");
$row = mysql_fetch_array($result);
?>
																																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[2][2]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][2]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 3");
$row = mysql_fetch_array($result);
?>
																																	<table class="item">
																		<tbody><tr>
																		
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[2][3]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][3]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 4");
$row = mysql_fetch_array($result);
?>
																																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][4]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																			</td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][4]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>	
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 5");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][5]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][5]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 6");
$row = mysql_fetch_array($result);
?>
																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][6]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][6]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 7");
$row = mysql_fetch_array($result);
?>
																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][7]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][7]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 8");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][8]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][8]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<h3>Sugpo</h3>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p>&nbsp;</p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 9");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[2][9]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">

	</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][9]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 10");
$row = mysql_fetch_array($result);
?>
																																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[2][10]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][10]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 11");
$row = mysql_fetch_array($result);
?>
																																	<table class="item">
																		<tbody><tr>
																		
																			<td class="text">
																				
																				<p class="title"><input type="text" name="item_desc[2][11]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][11]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 12");
$row = mysql_fetch_array($result);
?>
																																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][12]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][12]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>	
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 13");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][13]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][13]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 14");
$row = mysql_fetch_array($result);
?>
																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][14]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][14]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 15");
$row = mysql_fetch_array($result);
?>
																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][15]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][15]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 16");
$row = mysql_fetch_array($result);
?>
      <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][16]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][16]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 17");
$row = mysql_fetch_array($result);
?>
																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][17]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][17]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 18");
$row = mysql_fetch_array($result);
?>
																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][18]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][18]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 19");
$row = mysql_fetch_array($result);
?>
																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][19]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][19]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 20");
$row = mysql_fetch_array($result);
?>
																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][20]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][20]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 21");
$row = mysql_fetch_array($result);
?>
																	<table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][21]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][21]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>                                                              
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<h3>Pusit</h3>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p>&nbsp;</p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 22");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][22]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][22]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 23");
$row = mysql_fetch_array($result);
?>
                                 <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][23]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][23]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
<?php
//execute the SQL query and return a specific record
$result = mysql_query("SELECT * FROM sm_prices WHERE col_num = 2 AND row_num = 24");
$row = mysql_fetch_array($result);
?>
                                                                    <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																			
																				<p class="title"><input type="text" name="item_desc[2][24]" value="<?php echo $row['item_desc'] ?>"></p>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p><input type="text" name="item_price[2][24]" value="<?php echo $row['item_price'] ?>"></p></td>
																		</tr>
																	</tbody></table>
                                  <table class="item">
																		<tbody><tr>
																			
																			<td class="text">
																				
																				<h3>Fruits and Vegetables are Also Available</h3>
																				<p class="description">&nbsp;</p>
																		  </td>
																			<td class="menu-price"><p>&nbsp;</p></td>
																		</tr>
																	</tbody></table>
                                                                    														<!-- END .right-side -->
																</div>
																
																<div class="clear"></div>
															
															<!-- END .card-page -->
<center>
<input type="submit" value="&nbsp;&nbsp;Submit&nbsp;&nbsp;">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="&nbsp;&nbsp;Cancel&nbsp;&nbsp;" onclick="javascript:location.href='admin.php';">
</center>
															</div>
<?php
//close the connection
mysql_close($dbhandle);
?>
                                                                <!-- BEGIN .card-page -->
																<div id="cardpageid-1" class="card-page">
                                                               <div class="left-side"></div>
                                                               <div class="right-side"></div>
                                                               <div class="clear"></div>
                                                                </div>
															
																<!-- BEGIN .card-page -->
																

												
		
											<!-- END .card-slider -->
											</div>
										
										<!-- END .card-container -->
										</div>
										
									<!-- END .content-wrapper -->	
									</div>

								</td>
								<!-- END .homepage-about -->
								
								<td class="navigation"><a id="card-next" class="next" href="#">&nbsp;</a></td>

							</tr>
							
							<tr>
								<td></td>
								<td class="menu-card-content-wrapper-bottom"></td>
								<td></td>
							</tr>
							
						</tbody></table>
						
				<!-- END .content -->
				</div>

			<!-- END .content-wrapper -->
			</div>
            
            <div id="footer-container">
    	<div class="wrapper">
        	            <div id="footer">
            	<div id="footer-border">
					<div class="sidepanel"><h3 class="font">Contact Us</h3><div class="rf_contact_widget">
					  <div class="phone">
					<div class="icon"></div>
					<div class="text">
						<p>0920-9704481</p>
					</div>
				</div><div class="email">
					<div class="icon"></div>
					<div class="text">
						<p>0917-8271450</p>
					</div>
				</div><div class="location">
					<div class="icon"></div>
					<div class="text">
						<p> 0922-8434069</p>
					</div>
				</div></div></div><script type="text/javascript">
        jQuery(document).ready(function($){
            jQuery(".rf_twitter_widget.username-redfactory .tweet:not(.active)").each(function(){
				jQuery(this).tweet({
					username: "redfactory",
					join_text: null,
					avatar_size: null,
					count: 1,
					auto_join_text_default: "",
					auto_join_text_ed: "",
					auto_join_text_ing: "",
					auto_join_text_reply: "",
					auto_join_text_url: "",
					loading_text: "loading tweets..."
				}).addClass('active');
            });
        });
        </script><div class="sidepanel"><h3 class="font">Email Address</h3><div class="rf_twitter_widget username-redfactory">
			<div class="tweet active"><ul class="tweet_list">
			  <a href="info@seasidemanila.com"> info@seasidemanila.com</a>
			</ul></div>
			<div class="arrow-container">
				<div class="arrow-border"></div>
				<div class="arrow"></div>
			</div>
        </div><div class="social-buttons"><a target="_BLANK" href="http://www.facebook.com/SeasidePhilippines"><img alt="Facebook button" src="images/facebook.png"></a></div></div>        
		
        
		<div class="sidepanel">
		  <h3 class="font">Come Visit Us</h3>			<div class="textwidget">
		  <p><a href="alabang.html">Alabang</a></p>
          <p><a href="ortigas.html">Ortigas</a></p>
          <p><a href="macapagal.html">Macapagal</a></p>
</div>
		</div><div class="sidepanel"><h3 class="font">Open Daily</h3>			<div class="textwidget">
		  <p>6 AM to 12 MN</p>
</div>
		</div>            	</div>
            </div><!-- #footer -->
                        <ul id="footer-links">
                <li>Copyright &copy; 2013 Seaside - Made by <a href="www.richardmagallanes.com" target="_BLANK">Richard Magallanes</a></li>
            </ul>
		</div><!-- .wrapper -->
	</div>
</div>
</form>
</body>
</html>
