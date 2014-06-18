<?php include('header.php');?>
<div class="medium-title">Do you have any questions or comment about our company?</div>
You can contact us with this address : #126, st 186, Sangkat Tek Laark 3, Khan Toul Kork, Phnom Penh City, Cambodia.<br/>
<br/><br/>	
<table width="100%">
	<tr>
		<td width="65%">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<div style="width:600px;color:#555">
				<div style="overflow:hidden;height:400px;width:600px;">
					<div id="gmap_canvas" style="height:400px;width:600px;"></div>
					<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
				</div>
				<script type="text/javascript"> 
					function init_map(){
						var myOptions = {zoom:16,center:new google.maps.LatLng(11.5722193,104.89800579999996),mapTypeId: google.maps.MapTypeId.ROADMAP};
						map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
						marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(11.5722193, 104.89800579999996)});
						infowindow = new google.maps.InfoWindow({content:"<b>AmeriPros Import Export Co.,Ltd</b><br/>#126, st 186, Sangkat Tek Laark 3, Khan Toul Kork, Phnom Penh City, Cambodia<br/> 089 60 60 40" });
						google.maps.event.addListener(marker, "click", function(){
							infowindow.open(map,marker);});infowindow.open(map,marker);
						}
						google.maps.event.addDomListener(window, 'load', init_map);
				</script>
			</div>
		</td>
		<td width="35%">
			<div class="small-title"> Contact us  </div>
				<table style="padding-left: 10px; font-size: 14px">
					<tr>
						<td><b>Mobile</b></td>
						<td> : (+855) 089 60 60 40</td>
					</tr>
					<tr>
						<td><b>Office</b></td>
						<td> : (+855) 023 65 65 65 3</td>
					</tr>
					<tr>
						<td><b>Fax</b></td>
						<td> : (+855) 089 60 60 40</td>
					</tr>
					<tr>
						<td><b>Website</b></td>
						<td> : http://www.ameripros.us</td>
					</tr>
					<tr>
						<td><b>Email</b></td>
						<td> : info@ameripros.us</td>
					</tr>
					<tr>
						<td><b>Skype</b></td>
						<td> : ameripros.us</td>
					</tr>
				</table>
				
			<div class="small-title"> Join us  </div>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=864839916862791&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like-box" data-href="https://www.facebook.com/pages/USMouthwash/1453703318209388?ref_type=bookmark" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
		</td>
	</tr>
</table>
<?php include('footer.php');?>