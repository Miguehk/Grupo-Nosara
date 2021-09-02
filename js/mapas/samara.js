function iniciarMap(){
    var coord = {lat: 9.8826029,lng: -85.528869821};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}