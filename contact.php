<!-- Head, Header & Nav -->
<?php 
  $page = "Contact - ";
  $title = "New Details";
  $subtitle = "Blog";
  @include("include/header.php");
?>

  <section class="intro">
    <article class="intro__subtitle">
      <h4>Home | <span>Blog</span></h4>
    </article>
  </section>

  <section class="info">
    <div class="info__container">
      <img src="./assets/icons/locationmap.png" alt="email">
      <h3>Hotel Address</h3>
      <span>19/A, Cirikon City hall Tower New York, NYC</span>
    
      <span>01</span>
    </div>
    <div class="info__container">
      <img src="./assets/icons/phone.svg" alt="phone">
      <h3>Phone Number</h3>
      <span>+ 97656 8675 7864 7</span>
      <span>+ 876 766 8675 765 6</span>
    
      <span>02</span>
    </div>
    <div class="info__container">
      <img src="./assets/icons/mail.svg" alt="email">
      <h3>Email</h3>
      <span>info@webmail.com</span> 
      <span>jobs.webmail@mail.com</span>
    
      <span>03</span>
    </div>

    <div class="info__img">
      <img src="#" alt="maps">
    </div>
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


  <!-- Footer -->
<?php 
  @include("include/footer.php")
?>
