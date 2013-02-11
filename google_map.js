	var geocoder;
	var map;
	function initialize() {
		geocoder = new google.maps.Geocoder();

		var address = '奈良県奈良市学園朝日町5番15号';
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				var myOptions = {
					zoom: 15,
					center: results[0].geometry.location,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
				map.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
						map: map, 
						position: results[0].geometry.location,
						title: '大和キリスト教会'
				});
			} else {

			}
		});
	}