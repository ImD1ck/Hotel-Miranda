<!-- Head, Header & Nav -->
<?php
  $page = "About Us - ";
  $title = "About Us";
  $subtitle = "About";
  @include("include/header.php");
?>

    <section class="intro">
      <div class="intro__presentation">
        <div class="intro__video">
          <video src="#"></video>
        </div>
        <h2>
          Hello. Our hotel has been present for over 20 years. We make the best
          for all our customers.
        </h2>
      </div>

      <article class="options">
        <div class="options__square">
          <img src="./assets/icons/breakfast.svg" alt="breakfast" />
          <h4>BREAKFAST</h4>
        </div>
        <div class="options__square">
          <img src="./assets/icons/airplane.png" alt="airplane" />
          <h4>AIRPORT PICKUP</h4>
        </div>
        <div class="options__square">
          <img src="./assets/icons/maps.svg" alt="map" />
          <h4>CITY GUIDE</h4>
        </div>
        <div class="options__square">
          <img src="./assets/icons/room.svg" alt="room" />
          <h4>LUXURY ROOM</h4>
        </div>
      </article>
    </section>

    <section class="restaurant">
      <div class="restaurant__img">
        <img src="#" alt="restaurant" />
      </div>
      <h4>Restaurant</h4>
      <h1>Get Restaurant Facilities & Many Other More</h1>
      <div class="restaurant__text">
        <span>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip.
        </span>
        <button class="button">TAKE A TOUR</button>
      </div>
    </section>

    <section class="facilities">
      <h4>FACILITIES</h4>
      <h1>Core Features</h1>
      <div class="container__facilities">
        <div class="item__facilities">
          <img src="./assets/icons/quality.svg" alt="quality" />
          <span class="number__facilities">01</span>
          <h2>Have High Rating</h2>
          <span
            >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna..</span
          >
        </div>
        </div>
        <div class="container__facilities">
        <div class="item__facilities">
          <img src="./assets/icons/watch.svg" alt="watch" />
          <span class="number__facilities">02</span>
          <h2>Quiet Hours</h2>
          <span
            >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna..</span
          >
        </div>
        <div class="container__facilities">
        <div class="item__facilities">
          <img src="./assets/icons/location.png" alt="location" />
          <span class="number__facilities">03</span>
          <h2>Best Locations</h2>
          <span
            >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna..</span
          >
        </div>
        <div class="container__facilities">
        <div class="item__facilities">
          <img src="./assets/icons/canceltime.svg" alt="cacellation" />
          <span class="number__facilities">04</span>
          <h2>Free Cancellation</h2>
          <span
            >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna..</span
          >
        </div>
        <div class="container__facilities">
        <div class="item__facilities">
          <img src="./assets/icons/cards.svg" alt="cards" />
          <span class="number__facilities">05</span>
          <h2>Payment Options</h2>
          <span
            >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna..</span
          >
        </div>
        <div class="container__facilities">
        <div class="item__facilities">
          <img src="./assets/icons/medal.png" alt="medal" width="200px" />
          <span class="number__facilities">06</span>
          <h2>Special Offers</h2>
          <span
            >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna..</span
          >
        </div>
        <img src="./assets/icons/donut.svg" alt="donut">
      </div>
    </section>


    <section class="counter">
      <h4>COUNTER</h4>
      <h1>Some Fun Facts</h1>
      <div class="counter__container">
        <div class="counter__fact">
          <img src="./assets/icons/likeperson.svg" alt="likeperson">
          <h1>8000</h1>
          <span>Happy Users</span>
          <img src="./assets/icons/arrow.svg" alt="arrow">
        </div>
        <div class="counter__fact">
          <img src="./assets/icons/likestars.png" alt="like">
          <h1>10M</h1>
          <span>Reviews & Appriciate</span>
          <img src="./assets/icons/arrow.svg" alt="arrow">
        </div>
        <div class="counter__fact">
          <img src="./assets/icons/world.svg" alt="world">
          <h1>100</h1>
          <span>Country Coverage</span>
          <img src="./assets/icons/arrow.svg" alt="arrow">
        </div>
      </div>
      <div class="counter__img">
        <img src="#" alt="photos">
      </div>
    </section>

<!-- Footer -->
<?php 
  @include("include/footer.php")
?>
