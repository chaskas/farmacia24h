function initialize() {

  if (navigator.geolocation)
    {
      navigator.geolocation.getCurrentPosition(showMap);
    }
  else
    {
      alert("Geolocation is not supported by this browser.");
    }
}

function showMap(position){

  var myLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

  var mapOptions = {
        center: myLatLng,
        zoom: 14,
        disableDefaultUI: true,
        panControl: false,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE,
            position: google.maps.ControlPosition.LEFT_CENTER
        },
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

  var myPosMarker = new google.maps.Marker({
      position: myLatLng,
      title:"Tú"
  });

  var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

  myPosMarker.setMap(map);
}