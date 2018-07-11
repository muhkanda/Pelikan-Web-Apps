<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content-pelikan="IE=edge">
    <meta content-pelikan="initial-scale=1.0, minimum-scale=1.0, width=device-width" name="viewport">
    <link rel="shortcut icon" href="#" />
	<meta name="robots" content-pelikan="all,follow">
	<title>Beranda &dash; Pelikan</title>
	<link rel="stylesheet" href="<?= base_url('assets/') ?>semantic/semantic.min.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans|Sansita" rel="stylesheet">
</head>
<style>
	*{
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}
	html, body{
        margin: 0;
        height: 100%;
    }
    #nav-pelikan{
    	font-family: 'Sansita', sans-serif;
    	background-color: #00b894;
    	font-size: 40px;
    }
    #nav-pelikan>a.item{
    	color: #FFF;
    }
    #mobile-nav{
    	font-family: 'Sansita', sans-serif;
    	background-color: #00b894;
    }
    #mobile-nav>a.item{
    	color: #FFF;
    }
    .hidden{ 
		display: none;
	}
	#hero{
		margin-top: 100px;
		margin-bottom: 100px;
		background: url('assets/images/hero.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		height: 500px;
		width: 100%;
		display: table;
	}
	.valign-middle{
       display: table-cell;
       vertical-align: middle;
    }
    .big-title{
    	font-family: 'Sansita', sans-serif;
    	color: #FFF;
    	font-size: 100px;
    }
    .hero-content-pelikan{
    	font-family: 'PT Sans', sans-serif;
    	color: #FFF;
    	font-size: 25px;
    }
    p#line-height{
    	line-height: 1;
    }
    button#btn-pelikan{
    	font-family: 'PT Sans', sans-serif;
    	color: #FFF;
    	font-size: 20px;
    }
    /* .section-one{
    	background-color: #00cca4;
    	padding-bottom: 80px;
    	padding-top: 80px;
    	background-size:cover;
    		position:relative;
    		z-index:-1;
    		height:inherit;
    } */
    .section-one{
    	background-color: #00cca4;
    	padding-bottom: 80px;
    	padding-top: 80px;
    	background-size:cover;
    }
    .large-title{
    	font-family: 'Sansita', sans-serif;
    	color: #FFF;
    	font-size: 40px;
    }
    .large-title-black{
    	font-family: 'Sansita', sans-serif;
    	color: #000;
    	font-size: 40px;
    }
    .normal-title{
    	font-family: 'Sansita', sans-serif;
    	color: #FFF;
    	font-size: 30px;
    }
    .content-pelikan{
    	font-family: 'PT Sans', sans-serif;
    	color: #FFF;
    	font-size: 20px;
    }
    .content-pelikan-black{
    	font-family: 'PT Sans', sans-serif;
    	color: #000;
    	font-size: 20px;
    }
    .padding-pelikan{
    	padding-top: 50px;
    }
    .padding-pelikan2{
    	padding-top: 15px;
    }
    .justify-pelikan{
    	text-align: justify;
    }
    #card-pelikan{
    	background-color: #00cca4;
    }
    .max-card-pelikan{
    	height: 150px;
    	font-size: 15px;
    }
    /* #backshape .wrapper{
    		transform:skew(0deg,-5deg);
    		-ms-transform:skew(0deg,-10deg);
    		-webkit-transform:skew(0deg,-5deg); 
    }
    #backshape{
    	z-index:1;
    	position: relative;
    	margin-top:-100px;
    	background:#FFF;
    	transform:skew(0deg,5deg);
    	-ms-transform:skew(0deg,10deg);
    	-webkit-transform:skew(0deg,5deg);
    } */
	.map-responsive{
	    overflow:hidden;
	    padding-bottom:75%;
	    position:relative;
	    height:0;
	}
	.map-responsive iframe{
	    left:0;
	    top:0;
	    width:100%;
	    position:absolute;
	}
	/* .section-two{
	    	background-color: #00cca4;
	    	position: relative;
	    	z-index: 2;
	    } */
    .section-two{
    	background-color: #00cca4;
    }
    .f15-pelikan{
    	font-size: 15px;
    	color: #FFF;
    }
    .dark-footer{
		background-color: #00b894;
	}
</style>
<body>
<body>
<div class="ui grid">
	<div class="computer only row">
		<div class="column">
			<div class="ui borderless massive fixed menu" id="nav-pelikan">
				<a class="item">Pelikan</a>
			</div>
		</div>
	</div>
	<!-- BEGIN MOBILE TABLET ONLY MENU -->
		<div class="tablet mobile only row">
			<div class="column">
			    <nav class="ui top fixed menu" id="mobile-nav">
				  	<a id="showmenu" class="item"><i class="content icon white"></i></a>
				  	<a class="right item" id="aanavitem"><strong><h3>Pelikan</h3></strong></a>
				  	<div class="item">
						<img src="assets/images/image.png">
					</div>
				</nav>
			</div>
		</div>
		<nav class="tablet mobile only row">
			<div id="menukiri" class="menukiri lipat hidden">
				<div class="ui left fixed vertical menu">
					<div class="item" style="text-align: center;">
					<table>
						<tr>
							<td>
								<img class="ui mini image" src="assets/images/image.png">
							</td>
							<td>
								<span style="margin-left: 10px;">Pelikan</span>
							</td>
						</tr>
					</table>
					</div>
					<a href="index.html" class="item">HOME</a>
					<div class="item" id="hidemenu" style="text-align: center;">
						<button class="fluid ui button">
							Close
						</button>
					</div>
				</div>
			</div>
		</nav>
		<!-- END MOBILE TABLET ONLY MENU -->
</div>
	<div class="ui container centered grid">
		<div class="row">
			<div class="sixteen wide computer sixteen wide phone center aligned column" id="hero">
				<div class="valign-middle">
					<div class="ui centered grid">
						<div class="row">
							<div class="eight wide computer sixteen wide phone center aligned column">
								<div class="big-title">
									<p id="line-height">Pelikan</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="ten wide computer sixteen wide phone center aligned column">
								<div class="hero-content-pelikan">
									<p id="line-height">Menyebarkan kebaikan dan menjunggung tinggi rasa kepedulian akan kualitas udara di sekitar kita </p>
									<p><button class="ui inverted basic button" id="btn-pelikan">Tentang Kami</button></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="ui computer only grid">
		<div class="sixteen wide computer column">
			<div class="row"> -->
				<div class="section-one">
					<div class="ui container centered grid">
						<div class="row">
							<div class="sixteen wide computer sixteen wide phone center aligned column">
								<div class="large-title">
									<p>Kenapa harus pelikan ?</p>
								</div>
							</div>
						</div>
						<div class="padding-pelikan2"></div>
						<div class="padding-pelikan"></div> 
						<div class="row">
							<div class="four wide computer sixteen wide phone column">
								<div class="ui centered card" id="card-pelikan">
									<div class="content">
										<h2 class="ui center aligned icon header" style="color:white;">
											<i class="map marker alternate icon"></i>
											Dapatkan Lokasi
										</h2>
										<br>
										<div class="extra content" style="text-align:center;">
											<button class="ui inverted basic button">Selengkapnya</button>
										</div>
									</div>
								</div>
							</div>
							<div class="four wide computer sixteen wide phone column">
								<div class="ui centered card" id="card-pelikan">
									<div class="content">
										<h2 class="ui center aligned icon header" style="color:white;">
											<i class="user md icon"></i>
											Penyebaran Penyakit
										</h2>
										<br>
										<div class="extra content" style="text-align:center;">
											<button class="ui inverted basic button">Selengkapnya</button>
										</div>
									</div>
								</div>
							</div>
							<div class="four wide computer sixteen wide phone column">
								<div class="ui centered card" id="card-pelikan">
									<div class="content">
										<h2 class="ui center aligned icon header" style="color:white;">
											<i class="comments outline icon"></i>
											Kritik & Saran
										</h2>
										<br>
										<div class="extra content" style="text-align:center;">
											<button class="ui inverted basic button">Selengkapnya</button>
										</div>
									</div>
								</div>
							</div>
							<div class="four wide computer sixteen wide phone column">
								<div class="ui centered card" id="card-pelikan">
									
									<div class="content">
										<h2 class="ui center aligned icon header" style="color:white;">
											<i class="share alternate icon"></i>
											Berbagi Zona Rawan
										</h2>
										<br>
										<div class="extra content" style="text-align:center;">
											<button class="ui inverted basic button">Selengkapnya</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<!-- 			</div>
		</div>
	</div> -->
	<!-- <div id="backshape">
	  		<div class="wrapper"> -->
			<div class="padding-pelikan"></div>
			<div class="padding-pelikan"></div>
			<div class="ui container centered grid">
				<div class="row">
					<div class="sixteen wide computer center aligned column">
						<div class="large-title-black">
							<p>Information</p>
						</div>
					</div>
				</div>
				<div class="padding-pelikan"></div>
				<div class="row">
					<div class="five wide computer sixteen wide phone column">
						<table>
							<tr>
								<td width="50%" style="text-align: center;" class="ui small image"><img src="assets/images/image.png" alt=""></td>
								<td width="50%" style="text-align: right;"><span style="font-size: 60px;">80%</span></td>
							</tr>
							<tr>
								<td colspan="2" class="justify-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, beatae?</td>
							</tr>
						</table>
					</div>
					<div class="five wide computer sixteen wide phone column">
						<table>
							<tr>
								<td width="50%" style="text-align: center;" class="ui small image"><img src="assets/images/image.png" alt=""></td>
								<td width="50%" style="text-align: right;"><span style="font-size: 60px;">80%</span></td>
							</tr>
							<tr>
								<td colspan="2" class="justify-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, beatae?</td>
							</tr>
						</table>
					</div>
					<div class="five wide computer sixteen wide phone column">
						<table>
							<tr>
								<td width="50%" style="text-align: center;" class="ui small image"><img src="assets/images/image.png" alt=""></td>
								<td width="50%" style="text-align: right;"><span style="font-size: 60px;">80%</span></td>
							</tr>
							<tr>
								<td colspan="2" class="justify-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, beatae?</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="padding-pelikan"></div>
				<div class="row">
					<div class="eight wide computer sixteen wide phone column">
						<p><div class="map-responsive" id="map">
								
							</div></p>
					</div>
					<div class="eight wide computer sixteen wide phone computer only column">
						<p><div id="chartContainer"></div></p>
					</div>
				</div>
				<div class="row">
					<div class="sixteen wide computer sixteen wide phone column">
						<div class="padding-pelikan2"></div>
						<div class="padding-pelikan2"></div>
						<div class="content-pelikan-black justify-pelikan">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, ad. Vero veniam dicta aliquid blanditiis ullam quibusdam, accusamus, eius quia molestias nihil temporibus nam praesentium accusantium odit repellat. Repellendus modi atque ullam error quis doloremque, soluta aut, id cum eligendi. Doloribus quisquam laudantium quos iste eos voluptatibus labore quo alias.</p>
						</div>
						<div class="padding-pelikan2"></div>
						<div class="padding-pelikan2"></div>
						<div class="padding-pelikan2"></div>
						<div class="padding-pelikan2"></div>
					</div>
				</div>
			</div>
			<div class="padding-pelikan"></div>
  		<!-- </div>
  		  	</div> -->
  	<div class="section-two">
  		<div class="padding-pelikan"></div>
  		<div class="ui container centered grid">
  			<div class="row">
  				<div class="five wide computer sixteen wide phone column">
  					<div class="padding-pelikan2"></div>
  					<p class="justify-pelikan f15-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor aliquid maxime libero sed. Culpa commodi ipsum distinctio, dolores doloremque necessitatibus perspiciatis, saepe quo id voluptate.</p>
  				</div>
  				<div class="five wide computer sixteen wide phone column">
  					<div class="padding-pelikan2"></div>
  					<p class="justify-pelikan f15-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum illo fugit, amet sint eius ex, quisquam saepe nulla cum aliquid provident mollitia iusto maxime nesciunt.</p>
  				</div>
  				<div class="five wide computer sixteen wide phone column">
  					<div class="padding-pelikan2"></div>
  					<p class="justify-pelikan f15-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis laborum, saepe quod, inventore fuga, perspiciatis sed unde qui maiores error id nemo alias similique, corporis facere quaerat! Iure alias, quod!</p>
  				</div>
  			</div>
  		</div>
  		<div class="padding-pelikan"></div>
  	</div>

  	<div class="dark-footer">
  		<div class="padding-pelikan2"></div>
		<div class="ui container grid">
			<div class="row">
				<div class="sixteen wide phone sixteen wide tablet sixteen wide computer column center aligned">
					<span style="color: #ffffff;"><b><i class="code icon" style="color: #000;"></i> DENGAN <span style="color: #f50057;"> <i class="heart icon"></i> </span> DI KOTA KEMBANG</b></span>
				</div>
			</div>
		</div>
	</div>
</body>
</body>
<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>semantic/semantic.min.js"></script>
<script src="<?= base_url('assets/') ?>canvasjs/canvasjs.min.js"></script>
<script>
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Lorem Ipsum Dolor"
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 10,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			{ y: 51.08, label: "Chrome" },
			{ y: 27.34, label: "Internet Explorer" },
			{ y: 10.62, label: "Firefox" },
			{ y: 10.75, label: "Safari" }
		]
	}]
});
chart.render();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

  var markers = [];
  var map = "";
  var bounds = "";
  function initMap() {  
    var infoWindow = new google.maps.InfoWindow;
    bounds = new google.maps.LatLngBounds(); 
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: {lat: -6.885500, lng: 107.615407},
      mapTypeId: 'roadmap'
    });
  }



    function addMarker(lat, lng) {
      var lokasi = new google.maps.LatLng(lat, lng);
      bounds.extend(lokasi);
      var marker = new google.maps.Marker({
          map: map,
          position: lokasi,
      });       
      map.fitBounds(bounds);
    
      markers.push(marker);
      return marker;
    }

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var _lat  = position.coords.latitude
      var _lng  =  position.coords.longitude
      var pos = {
        lat: _lat,
        lng: _lng,
      };
      kirim_lokasi(_lat, _lng);
      
    }, function(err) {
      console.log("error : " + err)
    });
  } else {
    console.log("Tidak BErfungsi")
  }

  function kirim_lokasi(lat, lng) {
    $.ajax({
        method:"POST",
        url:'<?php echo "maps/getlokasi" ?>',
        data:{latitude:lat, longitude:lng},
        dataType: "json",
        success:function(data){
        
          for (let i = 0; i <data.length; i++) {
            addMarker(data[i]['lat'], data[i]['lng']);
          }  
        }
    });
  }  
//  });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpALWzkNO7VH_pCSX30bt43_7h3sIeqQI&libraries=places&callback=initMap" async defer></script>
</html>