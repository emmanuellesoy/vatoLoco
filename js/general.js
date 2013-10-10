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

function slider_principal(dir){

  id = $('.controlesSliderPrevio').attr('data-frame');
  $('.slider_inicio').hide();
  $('.slider_inicio_' + id).show();
  if(dir == 'der'){
    id = parseInt(id) + 1;
    if(id == 4){
      id = 0;
    }
  } else {
    id = parseInt(id) - 1;
    if(id == -1){
      id = 3;
    }
  }
  $('.controlesSliderPrevio').attr('data-frame', id);
}

$(document).ready(function(){
  $(".sliderProyectos a").click(function(event) {
    event.preventDefault();
  });
  $(".vista a").click(function(event) {
    event.preventDefault();
  });

});

function mostrar_slider(id){
  $('.imagenSlider').hide();
  $('.imagenSlider_' + id).show();
}

function filtro_proyectos(tab){
  $('.galeriaProyectos').hide();
  $('#' + tab).show();
}

function muestra_el_proyecto_grande(tab){
  $('.detallesProyectos').hide();
  $('#div' + tab).show();
}

function traer_mas(query)
{
  var pg = $('.verMasResultados').attr('data-paged');
  var ps = $('.verMasResultados').attr('data-pages');
  query = query + '&paged=' + pg;
  pg = parseInt(pg) + parseInt(1);
  var json_to_send = {action : 'traer_mas', query : query};
    var uri = wp_url+'/wp-admin/admin-ajax.php';
  $.ajax({
      url : uri,
      type : 'POST',
      data : json_to_send,
      success : function(data){
          $('#tab' + nTab).append(data);
      }
  });
}

function cargar_mas_proyectos(){
    var gp = $('.galeriaProyectos').css('height');
    gp = parseInt(gp);
    gp = gp + 200;
    $('.galeriaProyectos').css('height', gp + 'px');
}