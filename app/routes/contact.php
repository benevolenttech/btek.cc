<?php
require_once 'app/layouts/page.php';

return function () {
	pageLayout(
		title: "Contact Us",
		heading: "Get in touch today",
		renderChildren: function () {
?>

		<section class="diagonal">
			<div class="container">

				<form action="javascript:handleContactSubmit()" method="get" class="contact-form">
					<input type="hidden" name="_to" value="brian@btek.cc" />
					<input type="text" name="_gotcha" style="display: none;" />

					<div class="halves">
						<div>
							<label for="name">First Name</label>
							<input type="text" name="first-name" id="first-name" placeholder="John" />
						</div>

						<div>
							<label for="name">Last Name</label>
							<input type="text" name="last-name" id="last-name" placeholder="Doe" />
						</div>
					</div>

					<label for="email">Email Address</label>
					<input type="email" name="email" id="email" placeholder="john@appleseed.com" required />

					<label for="message">Message</label>
					<textarea name="message" id="message" placeholder="Hi There..."></textarea>

					<input class="button" type="submit" value="Send Message" />
					<script>
						function handleContactSubmit() {
							const firstName = encodeURIComponent(document.getElementById('first-name').value)
							const lastName = encodeURIComponent(document.getElementById('last-name').value)
							const email = encodeURIComponent(document.getElementById('email').value)
							const message = encodeURIComponent(document.getElementById('message').value)
							const subject = "Inquiry for btek"
							const body = `Ho btek team,%0D%0A%0D%0A${message}%0D%0A%0D%0AYours,%0D%0A${firstName} ${lastName}%0D%0A${email}`
							window.open('mailto:hi@btek.cc?' +
								'subject=' + subject +
								'&body=' + body, '')
						}
					</script>
				</form>
			</div>
		</section>

		<section class="diagonal map">
			<div id="gmap_canvas"></div>
		</section>

		<section class="diagonal">
			<div class="container halves aligned-top">
				<div>
					<h3>Address</h3>
					<address>
						<a target="_blank" href="https://www.google.com/maps/place/<?php echo urlencode("btek HQ, 12721 Oxen Way, austin, tx 78732"); ?>">
							btek HQ<br>12721 Oxen Way<br>austin, tx 78732
						</a>
					</address>
				</div>
				<div>
					<h3>Email</h3>
					<p>
						Please use the form above to send us an email
						<!--
				<a href="mailto:{{ site.data.site.contact_email_address }}">{{ site.data.site.contact_email_address }}</a><br>
				<span class="hide-on-mobile">
					<a href="mailto:hola@btek.cc">hola@btek.cc</a><br>
					<a href="mailto:bonjour@btek.cc">bonjour@btek.cc</a><br>
					<a href="mailto:namaste@btek.cc">namaste@btek.cc</a><br>
					<a href="mailto:marhaba@btek.cc">marhaba@btek.cc</a>
				</span>
				-->
					</p>
				</div>
			</div>
		</section>

		<script type="text/javascript">
			window.mapData = {
				latitude: "30.2390944",
				longitude: "-97.9060091",
				address: "12721 Oxen Way, Austin, TX 78732",
				zoom: 13,
			};

			function initMap() {
				var myOptions = {
					scrollwheel: false,
					draggable: false,
					panControl: false,
					disableDefaultUI: true,
					styles: [{
						"featureType": "landscape.man_made",
						"elementType": "geometry",
						"stylers": [{
							"color": "#f7f1df"
						}]
					}, {
						"featureType": "landscape.natural",
						"elementType": "geometry",
						"stylers": [{
							"color": "#d0e3b4"
						}]
					}, {
						"featureType": "landscape.natural.terrain",
						"elementType": "geometry",
						"stylers": [{
							"visibility": "off"
						}]
					}, {
						"featureType": "poi",
						"elementType": "labels",
						"stylers": [{
							"visibility": "off"
						}]
					}, {
						"featureType": "poi.business",
						"elementType": "all",
						"stylers": [{
							"visibility": "off"
						}]
					}, {
						"featureType": "poi.medical",
						"elementType": "geometry",
						"stylers": [{
							"color": "#fbd3da"
						}]
					}, {
						"featureType": "poi.park",
						"elementType": "geometry",
						"stylers": [{
							"color": "#bde6ab"
						}]
					}, {
						"featureType": "road",
						"elementType": "geometry.stroke",
						"stylers": [{
							"visibility": "off"
						}]
					}, {
						"featureType": "road",
						"elementType": "labels",
						"stylers": [{
							"visibility": "off"
						}]
					}, {
						"featureType": "road.highway",
						"elementType": "geometry.fill",
						"stylers": [{
							"color": "#ffe15f"
						}]
					}, {
						"featureType": "road.highway",
						"elementType": "geometry.stroke",
						"stylers": [{
							"color": "#efd151"
						}]
					}, {
						"featureType": "road.arterial",
						"elementType": "geometry.fill",
						"stylers": [{
							"color": "#ffffff"
						}]
					}, {
						"featureType": "road.local",
						"elementType": "geometry.fill",
						"stylers": [{
							"color": "black"
						}]
					}, {
						"featureType": "transit.station.airport",
						"elementType": "geometry.fill",
						"stylers": [{
							"color": "#cfb2db"
						}]
					}, {
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [{
							"color": "#a2daf2"
						}]
					}],
					zoom: window.mapData.zoom,
					maxZoom: window.mapData.zoom,
					minZoom: window.mapData.zoom,
					center: new google.maps.LatLng(window.mapData.latitude, window.mapData.longitude),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
				marker = new google.maps.Marker({
					map: map,
					position: new google.maps.LatLng(window.mapData.latitude, window.mapData.longitude)
				});

				google.maps.event.addDomListener(window, "resize", function() {
					map.setCenter(myOptions.center);
				});
			}
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKMKUAB7EOak_dTHHeUX8N0MNuYRFh_Ik&amp;callback=initMap"></script>
<?php
		}
	);
};
