<!-- Head, Header & Nav -->
<?php
  $page = "";
  $title = "The Perfect Base For You";
  @include("include/header.php");
?>

    <section class="main">
      <article class="calendar">
        <form action="search">
          <label class="calendar__label" for="arrDate">Arrival Date</label>
          <input type="date" id="arrivalDate" class="calendar__fecha" />
          <label class="calendar__label" for="deparDate">LeDeparture Date</label>
          <input type="date" id="deparDate" class="calendar__fecha" />
          <button type="submit" class="button">CHECK AVAILABILITY</button>
        </form>
      </article>
    </section>

    <section class="aboutUs">
      <article class="aboutUs__resume">
        <h4>ABOUT US</h4>
        <h1>Discover Our Underground</h1>
        <span>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </span>
        <div class="aboutUs__button">
          <button class="button">BOOK NOW</button>
        </div>
      </article>

      <div class="square">
        <div class="square__image">
          <img src="#" alt="team" />
        </div>
        <div class="square__icons">
          <img src="./assets/icons/teamIcon.svg" alt="teamIcon" />
          </div>
          <div class="square__shadow">
          <img src="./assets/icons/teamIcon.svg" alt="teamIcon" />
        </div>
        <div class="square__text">
          <h2>Strong Team</h2>
          <span
            >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor.</span
          >
        </div>
        </div>

        <div class="square">
        <div class="square__image-margin">
          <img src="#" alt="Luxury Room" />
        </div>
        <div class="square__background">
        <div class="square__icon2">
          <img src="./assets/icons/calendar.svg" alt="calendar" />
        </div>
        <div class="square__text">
          <h2>Luxury Room</h2>
          <span
            >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor.</span
          >
        </div>
        </div>
    </section>


    <section class="rooms">
      <h4>ROOMS</h4>
      <h1>Hand Picked Rooms</h1>



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
        <h3 class="price">$345</h3>
        <span>/nigtht</span>
      </div>


    </section>

    <section class="video">
      <h4>INTRO VIDEO</h4>
      <h1>Meet With Our Luxury Place.</h1>
      <span
        >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat you have to understand this.</span
      >
      <div class="video__container">
        <iframe src="https://www.youtube.com/embed/Bu3Doe45lcU?controls=0&amp;start=25&end=75" title="Hotel Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <button class="button">BOOK NOW</button>
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


    <section class="menu">
      <h4>MENU</h4>
      <h1>Our Foods Menu</h1>
      <div class="nav__menu">
        <div class="item__menu">
          <img src="" alt="">
          <h3>Eggs & Bacon</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</span>
          <img src="./assets/icons/arrow.svg" alt="arrow">
        </div>
        <div class="item__menu">
          <img src="" alt="">
          <h3>Tea or Coffee</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</span>
          <img src="./assets/icons/arrow.svg" alt="arrow">
        </div>
        <div class="item__menu">
          <img src="" alt="">
          <h3>Chia Oatmeal</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</span>
          <img src="./assets/icons/arrow.svg" alt="arrow">
        </div>
        <div class="item__menu">
          <img src="" alt="">
          <h3>Fruit Parfait</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</span>
          <img src="./assets/icons/arrow.svg" alt="arrow">
        </div>
        <div class="item__menu">
          <img src="" alt="">
          <h3>Marmalade Selection</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</span>
          <img src="./assets/icons/arrow.svg" alt="arrow">
        </div>
        <div class="item__menu">
          <img src="" alt="">
          <h3>Cheese Plate</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</span>
          <img src="./assets/icons/arrow.svg" alt="arrow">
        </div>
        <div class="item__menu">
          <img src="" alt="">
          <h3>Eggs & Bacon</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</span>
          <img src="./assets/icons/arrow.svg" alt="arrow">
        </div>
      </div>

      <div class="photos__menu">
        <!-- Tipo Carrusel en tlf -->
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
      </div>
    </section>


    <section class="records">
      <div class="records__item">
        <img src="./assets/icons/rocket.svg" alt="rocket">
        <div class="records__numbers">
        <h1>84k<span>+</span></h1>
        </div>
        <span>Projects are Completed</span>
      </div>
       <div class="records__item">
        <img src="./assets/icons/team2.svg" alt="team">
        <div class="records__numbers">
        <h1>10M<span>+</span></h1>
        </div>
        <span>Active Backers Around World</span>
      </div>
       <div class="records__item">
        <img src="./assets/icons/graphic.svg" alt="graphic">
        <div class="records__numbers">
        <h1>20k<span>+</span></h1>
        </div>
        <span>Categories Served</span>
      </div>
       <div class="records__item">
        <img src="./assets/icons/rocket.svg" alt="rocket">
        <div class="records__numbers">
        <h1>100M<span>+</span></h1>
        </div>
        <span>Idea Raised Funds</span>
      </div>
    </section>

    <!-- Footer -->
  <?php 
    @include("include/footer.php");
  ?>
