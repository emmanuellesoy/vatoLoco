function mapa() {
    var myLatlng = new google.maps.LatLng(19.289990, -99.167108);
    var myOptions = {
      zoom: 15,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map($(".mapa").get(0), myOptions);
    var image = 'http://localhost/loscholos/wp-content/themes/vatoLoco/img/marker.png';
    var myLatLng = new google.maps.LatLng(19.287118, -99.167108);
    var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });
  }

function aparece(id){
    
        $('#description-' + id).show(1500);
    
}
function desaparece(id){
    
        $('#description-' + id).hide();
    
}


$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;
            }
       }
   });
});