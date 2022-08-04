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

  <script type="text/javascript" src="./js/dropMenu.js"></script>
</head>

<body>
<header class="header">
  <div class="nav"> 
    <button class="nav__button" id="buttonNav" onClick="dropdown()"></button>
  </div>
    <div class="nav__list" id="dropMenu">
      <a href="./about.php">About Us</a>
      <a href="./rooms.php">Rooms</a>
      <a href="./offers.php">Offers</a>
      <a href="./contact.php">Contact</a>
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

      <?php if($page == ""): ?>
        <div class="button__principal">
          <button class="button">TAKE A TOUR</button>
          <button class="button">LEARN MORE</button>
        </div>
      <?php else:  ?>
      </article>

      <article class="subtitle">
        <h4>Home | <span>Room Details</span></h4>
      </article>
      <?php endif ?>
    </section>