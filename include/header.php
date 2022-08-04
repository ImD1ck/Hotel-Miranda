<header class="header">
      <div class="nav__icons">
        <div class="nav__icon iconCross">
          <img
            src="./assets/icons/cross.svg"
            alt="cross"
            style="display: none"
          />
        </div>
        <div class="nav__icon iconBars">
          <img
            src="./assets/icons/bars-solid.svg"
            alt="bars"
            class="nav__icon-bar"
          />
        </div>
      </div>
      <div class="title">
        <div class="logo">
          <img src="./assets/icons/H.svg" alt="logo" />
        </div>
        <img
          class="logo__name"
          src="./assets/icons/Hotel-Miranda.svg"
          alt="Hotel Miranda"
        />
      </div>
      <div class="navigation">
        <ul class="nav__list">
          <li class="nav__item"><a href="./about.html">About Us</a></li>
          <li class="nav__item"><a href="#">Rooms</a></li>
          <li class="nav__item"><a href="#">Offers</a></li>
          <li class="nav__item"><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="icons">
        <div class="icon__item">
          <img src="./assets/icons/person.svg" alt="logIn" />
        </div>
        <div class="icon__item">
          <img src="./assets/icons/search.svg" alt="search" />
        </div>
      </div>

    </header>

    <section class="main">
      <article class="principal">
        <h4>THE ULTIMATE LUXURY EXPERIENCE</h4>
        <h1 class="principal__title">
        <?php 
          echo $title;
        ?>
        </h1>
      </article>
</section>