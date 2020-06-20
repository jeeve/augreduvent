<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Mézières-Ecluzelles</title>
      <META NAME="Description" CONTENT="Le plan d'eau de Mézières-Ecluzelles avec webcam, archives, météo en temps réel et prévisions."/>
	  <?php include("../includes/header.php"); ?>	
	  <link rel="stylesheet" type="text/css" href="css/spots.css" media="all"/>	  
	  <style>
		#webcam {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			background: rgba(0, 0, 0, 0.5);
		}	  
		#meteo-tems-reel {
			position: absolute;
			right: 0;
			bottom: 0;
			background: rgba(0, 0, 0, 0.5);
		}
		#meteo-tems-reel p, #webcam p {
			color: silver;
		}
	  </style>
   </head>
   <body>
      <div class="page-container">
         <!-- top navbar -->
         <?php include("../includes/navbar.php"); ?>	  
         <div class="container">
            <div class="row row-offcanvas row-offcanvas-left">
               <!-- sidebar -->
               <?php include("../includes/sidebar.php"); ?>		
               <!-- main area -->
               <div class="col-xs-12 col-sm-12 col-md-9 fond">
			   
			   <h1>Mézières-Ecluzelles</h1>

               <div class="row">
			   
  <div class="col-xs-12 col-sm-12 fond">
    <br>
	<div class="visible-xs">
	<p>A13 près de Mantes la Ville, <a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris' target="_blank">péage de Buchelay</a>, vue orientée vers Paris</p>  
	</div>
	
  <div class="embed-responsive embed-responsive-16by9 ombre-image">
    <div>
	<video id="videojs-viewsurf_html5_api" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay="">
    </video>
	<div id="webcam" class="hidden-xs">
	<p>A13 près de Mantes la Ville, <a href='https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris' target="_blank">péage de Buchelay</a>, vue orientée vers Paris</p>  
	</div>
					  <div id="meteo-tems-reel" class="hidden-xs">
				  <table>
					<tr>
						<td><p>Vitesse vent </p></td><td><p id="vitesse-vent" class="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation </p></td><td><p id="orientation-vent" class="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Air </p></td><td><p id="temperature-air" class="temperature-air"></p></td>
					</tr>
					
					<tr>
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a id="nom-sation" class="nom-sation" href="https://openweathermap.org/city/3020810" target="_blank">Dreux</a></em></p></td>
					</tr>						
				</table>
				</div>
  </div>
</div>  
  
  <div class="visible-xs"><br></div>
  </div> 
  
  
  <div class="visible-xs">
   <div class="col-xs-1"></div>

				  <div class="col-xs-10 col-sm-3 fond-table encadrement-table">
				  <table>
					<tr>
						<td><p>Vitesse vent </p></td><td><p id="vitesse-vent" class="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation </p></td><td><p id="orientation-vent" class="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Air </p></td><td><p id="temperature-air" class="temperature-air"></p></td>
					</tr>
					
					<tr>
						<td colspan=2><p style="font-size: 10px;">Données temps réel <em><a id="nom-sation" class="nom-sation" href="https://openweathermap.org/city/3020810" target="_blank">Dreux</a></em></p></td>
					</tr>						
				</table>
				</div>
											
				</div>	

</div>				
	
		 
               
				  
               
                  
				  
				  <br><br>
                  <div class="row">
                    <!-- <div class="col-xs-12 col-sm-2"></div> -->
                     <div class="col-xs-12 col-sm-6 fond">
                        <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
<iframe id="map-ecluzelles" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d211164.66341434096!2d1.8751571688649815!3d48.89321926889306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!3m2!1d48.7257335!2d1.4243979!4m5!1s0x47e6c12b153c22bf%3A0x2d227d4087bc4da9!2sM%C3%A9zi%C3%A8res-en-Drouais!3m2!1d48.7257335!2d1.4243979,14!5e0!3m2!1sfr!2sfr!4v1592674617338" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>						
						</div>
						<p class="legende">Itinéraire</p>
						
						
					</div>
						
						<div class="col-xs-12 col-sm-6 fond">
			<div class="embed-responsive embed-responsive-4by3 ombre-image">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11077.639428984821!2d1.4224061084166975!3d48.7148328689713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1589917230536!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
							<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=1730" target="_blank">My wind session</a></p>
						</div>
                    
                  </div>


                  <br><br>			  
				  
                  <h2>Prévisions méteo</h2>
				  
		  
				  <div class="row">				  		

					<div class="hidden-xs col-sm-8" style="margin-left: 5px;">
						<div class="fond-table encadrement-table" style="width: 540px;">
<script type="text/javascript" src="https://fr.windfinder.com/widget/forecast/js/ecluzelles?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/ecluzelles?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for undefined</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
<script id="wg_fwdg_919254_3_1589916450009">
(function (window, document) {
  var loader = function () {
    var arg = ["s=919254","m=3","uid=wg_fwdg_919254_3_1589916450009", "wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>
						</div>		
					</div>

					<div class="hidden-xs col-sm-2" style="margin-left: 65px;">
						<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://fr.windfinder.com/weatherforecast/ecluzelles" target="_blank">Superforecast</a><br><br>							
							<a href="https://www.ventusky.com/?p=48.70;1.31;8&l=wind-10m" target="_blank">Ventusky</a><br><br>
							<a href="https://www.xcweather.co.uk/forecast/ecluzelles" target="_blank">XCWeather</a><br><br>
							<a href="http://www.meteofrance.com/previsions-meteo-france/ecluzelles/28500" target="_blank">Météo France</a>
							</p>
						</div>		
					</div>
										<div class="col-xs-12 hidden-xs fond">
						<br><br>
					</div>
					
				</div>					  
				
				<div class="row">
					<div class="visible-xs col-xs-12 fond">
						<div class="fond-table encadrement-table">
						
<script id="wg_fwdg_581_3_1562857685282">
(function (window, document) {
  var loader = function () {
    var arg = ["s=581","m=3","uid=wg_fwdg_581_3_1562857685282","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>
						
						<a href="https://fr.windfinder.com/weatherforecast/ecluzelles" target="_blank"><img src="images/logo-windfinder.png" alt="superforecast" title="superforecast"></a>								
						<a href="https://www.windguru.cz/919254" target="_blank"><img src="images/logo-windguru.gif"></a>
						<a href="https://www.ventusky.com/?p=48.70;1.31;8&l=wind-10m" target="_blank"><img src="images/logo-ventusky.png"></a>
						<a href="https://www.xcweather.co.uk/forecast/ecluzelles" target="_blank"><img src="images/logo-xcweather.png"></a>
						<a href="http://www.meteofrance.com/previsions-meteo-france/ecluzelles/28500" target="_blank"><img src="images/logo-meteofrance.png"></a>
						</div>		
					</div>	
										<div class="col-xs-12 visible-xs fond">
						<br><br>
					</div>
				</div>	

				<h2>Informations</h2>		
  <div class="infoEcluzelles"></div>
  <br>
									
				
				  <h2>Sessions en vidéo</h2>
				  
				  <div id="sessions"></div>	


				  

				  <br>		  
			 
				  <div id="swipe">
					<div class="row">
						<div class="col-xs-7">
							<p><a href="sensations.php">sensations</a> - <a href="windsurf-kitesurf.php">windsurf / kitesurf</a> - <a id="page-precedente" href="spots-ile-de-france.php">les spots d'Ile-de-France</a></p>
						</div>
						<div class="col-xs-5">
							<p align="right"><a id="page-suivante" href="powerkite.php">powerkite</a> - <a href="../emotions/emotions.php">émotions</a></p>
						</div>
					</div>
					<div class="row">
						<p class="numero-page">page 14c</p>
						
					</div>
                  </div>
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </div>
      </div>
      <!--/.page-container-->
      <?php include("../includes/footer.php"); ?>	
	  	
	  <script type="text/javascript" src="js/meteo.js"></script>	  
      <script> 
	    function getWebCam() {
			jQuery.ajax({
				url: '/sensations/webcam-viewsurf-src-video.php?url=https://www.webcam-autoroute.eu/fr/cam%C3%A9ra/france-a13/129/ile-de-france/mantes-la-ville/rouen-vers-paris',
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				console.log(data.src);
				jQuery('#videojs-viewsurf_html5_api').attr('src', data.src);

		});
		}
		
		var myCam = setInterval(getWebCam, 30000);	// 30 s
	  
		station = "dreux";
		var myVar =	setInterval(getMeteo, 30000);		

	function maPosition(position) {		
			var lat1 = position.coords.latitude;
			var lon1 = position.coords.longitude;	
			var itineraireSrc = 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d353971.9888214055!2d2.2661361853305393!3d48.91901435220709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d' + lat1 + '!2d' + lon1 + '!4m5!';	
			jQuery('#map-ecluzelles').attr('src', itineraireSrc + '1s0x47e6c12b153c22bf%3A0x2d227d4087bc4da9!2sM%C3%A9zi%C3%A8res-en-Drouais!3m2!1d48.7257335!2d1.4243979,14!5e0!3m2!1sfr!2sfr!4v1544557383138');			
	}

        
		jQuery(document).ready(function($) {
		getInfoSpot();
		getInfoSessions('Mézières-Ecluzelles');
		getWebCam();	 
		getMeteo();
		
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(maPosition);
		}
		});

      </script>
	    <script type="text/javascript" src="js/info-spot.js"></script>
		<script type="text/javascript" src="js/info-sessions.js"></script>	 
   </body>
</html>

