

<?php

if(isset($_POST['source'])){
    // print_r($_POST);
?>
<style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw"></script>
    <!------------------------------------------------- map2 ------------------------------------------>
    
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw&libraries=places"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<form class="w3-container" action="mpp2.php" method ="get">
<div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img\location-162102__340.webp" alt="Avatar" style="width:20%;margin-left:150px;" class="w3-circle w3-margin-top">
      </div>
      
        <div class="w3-section">
          <!-- <label><b>Labour Location</b></label> -->
          <input class="w3-input w3-border w3-margin-bottom" type="hidden" placeholder="Labour Source" id="sourceval" name="source" value='<?php echo $_POST['source'];?>'>
          <!-- <label><b>Choose Location</b></label> -->
          
          <input class="w3-input w3-border" type="text"  placeholder="Enter Your location" id="destval" name="Destination" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Track Now<span class="material-symbols-outlined">distance</span></button> 
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
</>
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
        </div>
      </form>

      
      <?php


}
?>
