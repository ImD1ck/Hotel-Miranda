<!-- Head, Header & Nav -->
<?php 
  $page = $_GET["room"]." - ";
  $title = "Ultimate Room";
  @include("include/header.php");
?>



  <section class="room">
    <article class="room__container">
      <h4>DOUBLE BED</h4>
      <h2>Luxury Double Bed</h2>
      <h3>$345<span>/Night</span></h3>

      <img src="#" alt="Room Photo">

      <div class="room__check">
        <h3>Check Availability</h3>
        <label for="checkIn">Check In</label>
        <input type="date" name="checkIn">
        <label for="checkOut">Check Out</label>
        <input type="date" name="checkOut">
        <button class="button">CHECK AVAILABILITY</button>
      </div>

      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>
    </article>

    <article class="amenities">
      <h2>amenities</h2>
      <div class="amenities__container">
        <div class="amenities__item">
          <img src="./assets/icons/airconditioner.svg" alt="Air Conditioner">
          <h4>Air Conditioner</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/breakfast.png" alt="Breackfast">
          <h4>Breackfast</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/cleaning.svg" alt="Cleaning">
          <h4>Cleaning</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/grocery.svg" alt="Grocery">
          <h4>Grocery</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/shop.svg" alt="Shop Near">
          <h4>Shop Near</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/supp.svg" alt="Support">
          <h4>24/7 Online Support</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/security.svg" alt="security">
          <h4>Smart Security</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/wifis.svg" alt="wifi">
          <h4>High speed WiFi</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/kitchen.svg" alt="kitchen">
          <h4>Kitchen</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/shower.svg" alt="Shower">
          <h4>Shower</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/bed3.svg" alt="Single Bed">
          <h4>Single Bed</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/towel.svg" alt="towels">
          <h4>Towels</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/key.svg" alt="">
          <h4>Strong Locker</h4>
        </div>
        <div class="amenities__item">
          <img src="./assets/icons/supteam.svg" alt="Expert Team">
          <h4>Expert Team</h4>
        </div>
      </div> 
    </article>

    <article class="founder">
      <div class="founder__img">
        <img src="#" alt="Founder Photo">
      </div>
      <h2>Rosalina D. William</h2>
      <h4>Founder, QUX CO.</h4>
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</span>
    </article>

    <article class="cancelation">
      <h2>Cancelation</h2>
      <span>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</span>
    </article>

    <article class="related">
      <div class="room__container">
      <img src="#" alt="Room Photo">
      <div class="rooms__facilities">
        <img src="./assets/icons/bed.svg" alt="bed" />
        <img src="./assets/icons/wifi.svg" alt="wifi" />
        <img src="./assets/icons/car.svg" alt="car" />
        <img src="./assets/icons/cold.svg" alt="cold" />
        <img src="./assets/icons/gym.svg" alt="gym" />
        <img src="./assets/icons/smoke.svg" alt="smoke" />
        <img src="./assets/icons/cup.svg" alt="cup" />
      </div>
      <div class="details__rooms">
        <h3>Minimal Duplex Room</h3>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore.
          </span>
        <h3 class="price">$345/nigtht</h3>
        <span>Booking Now</span>
      </div>
    </div>
    </article>
  </section>

    <!-- Footer -->
  <?php
    @include("include/footer.php")
  ?>