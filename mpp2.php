<?php
if(isset($_GET['source']) && isset($_GET['Destination'])){
// $_GET['source']="New Delhi, India";
// $_GET['Destination']="Kanpur, India";
?>
<!DOCTYPE html>
    <html> 
    <head> 
       <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
       <title>Google Maps API v3 Directions Example</title> 
       <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw&callback=initMap&v=weekly"
       type="text/javascript"
    ></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw"></script>
    <!------------------------------------------------- map2 ------------------------------------------>
    <!--------------------------------------------------------------------------------------------- -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw&libraries=places"></script>
    </head> 
    <body style="font-family: Arial; font-size: 12px;"> 
       <div style="width: 400px;">
         <div id="map" style="width: 700px; height: 700px; float: left;"></div> 
         <!-- <div id="panel" style="width: 300px; float: right;"></div>  -->
       </div>
       
       
       <script type="text/javascript"> 
    
         var directionsService = new google.maps.DirectionsService();
         var directionsDisplay = new google.maps.DirectionsRenderer();
    
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom:7,
           mapTypeId: google.maps.MapTypeId.ROADMAP
         });
        
         directionsDisplay.setMap(map);
         directionsDisplay.setPanel(document.getElementById('panel'));
    
         var request = {
           origin: '<?php echo $_GET['source'];?>  ', 
           destination: '<?php echo $_GET['Destination'];?>  ',
           travelMode: google.maps.DirectionsTravelMode.DRIVING
         };
    
         directionsService.route(request, function(response, status) {
           if (status == google.maps.DirectionsStatus.OK) {
             directionsDisplay.setDirections(response);
           }
         });
       </script> 
       <script>
var searchInput = 'search_input';
$(document).ready(function () {
 var autocomplete;
 autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
  types: ['geocode'],
  /*componentRestrictions: {
   country: "USA"
  }*/
 });
  
 google.maps.event.addListener(autocomplete, 'place_changed', function () {
  var near_place = autocomplete.getPlace();
 });
});
</script>
    </body> 
    </html>
    <?php 



        }
        else{
            echo "No data is setted here";
        }

?>
