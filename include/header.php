<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page ?> Hotel Miranda</title>
  <link rel="shortcut icon" href="./assets/icons/H.svg" type="image/x-icon" />

  <link rel="stylesheet" type="text/css" href="./styles/styles.css" />
  <link rel="stylesheet" type="text/css" href="./styles/styles.scss" />
</head>

<body>
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
          <li class="nav__item"><a href="./rooms">Rooms</a></li>
          <li class="nav__item"><a href="./offers">Offers</a></li>
          <li class="nav__item"><a href="./contact">Contact</a></li>
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
        <?php echo $title; ?>
        </h1>
      </article>

      <?php if($page == ""): ?>
      <article class="principal">
        <div class="button__principal">
          <button class="button">TAKE A TOUR</button>
          <button class="button">LEARN MORE</button>
        </div>
      </article>
      <?php else:  ?>
      <article class="subtitle">
        <h4>Home | <span>Room Details</span></h4>
      </article>
      <?php endif ?>
    </section>