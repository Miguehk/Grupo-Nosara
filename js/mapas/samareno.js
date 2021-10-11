function iniciarMap(){
    var coord = {lat: 9.9205223,lng: -85.525121921};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}