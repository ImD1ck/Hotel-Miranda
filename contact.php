<!-- Head, Header & Nav -->
<?php 
  $page = "Contact - ";
  $title = "New Details";
  $subtitle = "Blog";
  @include("include/header.php");
?>

  <section class="info">
    <div class="info__container">
      <img src="./assets/icons/locationmap.png" alt="email">
      <div class="info__text">
      <h3>Hotel Address</h3>
      <span>La Princesa street, 31, Madrid, Spain</span>
    </div>
      <span>01</span>
    </div>
    <div class="info__container">
      <img src="./assets/icons/phone.svg" alt="phone">
      <div class="info__text">
        <h3>Phone Number</h3>
        <span>+34 666 46 05 29</span>
        <span>+ 876 766 8675 765 6</span>
      </div>
    
      <span>02</span>
    </div>
    <div class="info__container">
      <img src="./assets/icons/mail.svg" alt="email">
      <div class="info__text">
        <h3>Email</h3>
        <span>info@webmail.com</span>
        <span>jobs.webmail@mail.com</span>
      </div>
    
      <span>03</span>
    </div>
  </section>
  
  <section class="mapContainer">
    <div id="map"></div>
      <input type="text" name="inputUbication" id="inputUbication" class="mapContainer__input" >

     <select class="selector" id="select-community" name="select-community">
    </select>
  </section>

  <section class="form">
    <form action="GET" >
      <input type="text" name="name" placeholder="Your full name">
      <input type="number" name="numberPhone" placeholder="Add number phone">
      <input type="email" name="email" placeholder="Enter email address">
      <input type="text" name="subject" placeholder="Enter subject">
      <input type="text" name="message" placeholder="Enter message" rows="3">
      <button class="button" type="submit">SEND</button>
    </form>
  </section>

<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1WfZ6S1-lovlmZzhW_6NUhIFlrGm1hts&callback=initMap">
</script>

<script src="js/mapApi.js"></script>


  <!-- Footer -->
<?php 
  @include("include/footer.php")
?>
