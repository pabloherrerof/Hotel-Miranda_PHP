@extends('layout')
@section('title')
Contact
@endsection
@section('content')
 <!--SECCION TITLE-->
 <section class="page-title">
    <div class="page-title__container">
      <h5 class="text__pretitle text--light page-title__pretitle">
        THE ULTIMATE LUXURY
      </h5>

      <h1 class="text__title text--light page-title__title">New Details</h1>
      <div class="page-title__index-container">
        <div class="page-title__index">
          <p class="text__page-card text--lightblack text__page-card--home">Home</p>
          <p class="text__page-card text--lightblack">|</p>
          <p class="text__page-card text--gold">Blog</p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="contact-cards">
    <div class="contact-cards__container">
    <div class="contact-cards__item">
      <img src="../assets/contact/01.svg" alt="01" class="contact-cards__bg">
        <img src="../assets/footer/telf.svg" alt="phone-icon">
        <div class="footer__contact-text">
          <h6 class="text__subtitle--super-small contact-cards__title">Phone Number</h6>
          <p class="text__footer-paragraph text__footer-paragraph--small text--gray">+34 722 422 688</p>
          <p class="text__footer-paragraph text__footer-paragraph--small text--gray">+34 91 857 27 51</p>
        </div>
    </div>

    <div class="contact-cards__item">
      <img src="../assets/contact/02.svg" alt="02" class="contact-cards__bg">
        <img src="../assets/footer/mail.svg" alt="mail-icon">
        <div class="footer__contact-text">
          <h6 class="text__subtitle--super-small text--lightblack contact-cards__title">Mail</h6>
          <p class="text__footer-paragraph text__footer-paragraph--small text--gray">pabloherrerof@gmail.com</p>
          <p class="text__footer-paragraph text__footer-paragraph--small text--gray">pherrerofe@uoc.edu</p>
        </div>
    </div>
    <div class="contact-cards__item">
      <img src="../assets/contact/03.svg" alt="03" class="contact-cards__bg">
        <img src="../assets/footer/address.svg" alt="">
        <div class="footer__contact-text">
          <h6 class="text__subtitle--super-small text--lightblack contact-cards__title">Hotel Address</h6>
          <p class="text__footer-paragraph text__footer-paragraph--small text--gray">OXYGEN Workspace | Calle Princesa 31, planta 2 28008 Madrid</p>
        </div>
    </div>
  </div>
  </section>

  <!--FORM-->
  <section class="contact-form">
    <div class="contact-form__img" id="map" style="width: 500px; height: 400px;"></div>
    <p class="text--center text--black text__subtitle contact-form__warn">{{$message}}</p>
    <form  method="POST" action="contact.php" class="contact-form__form">
      
      <div class="contact-form__inputs">
        <div class="contact-form__input-container">
          <img src="../assets/contact/name.svg" alt="name-icon" class="contact-form__input-icon">
          <input type="text" name="name" class="contact-form__input" placeholder="Your full name" required>
        </div>
        <div class="contact-form__input-container">
          <img src="../assets/contact/phone.svg" alt="phone-icon" class="contact-form__input-icon">
          <input type="text" name="phone" class="contact-form__input" placeholder="Add phone number" required>
        </div>
        <div class="contact-form__input-container">
          <img src="../assets/contact/mail.svg" alt="mail-icon" class="contact-form__input-icon">
          <input type="text" name="email" class="contact-form__input" placeholder="Enter email address" required>
        </div>
        <div class="contact-form__input-container">
          <img src="../assets/contact/subject.svg" alt="subject-icon" class="contact-form__input-icon" >
          <input type="text" name="subject" class="contact-form__input" placeholder="Enter subject" required>
        </div>
      
     
    </div>
      <div class="contact-form__message">
        <img src="../assets/contact/msg.svg" alt="msg-icon" class="contact-form__input-icon">
        <input type="text" name="comment" class="contact-form__input contact-form__input--msg" placeholder="Enter message" required>
      </div>

      <button type="submit" class="button button--golden button--send">SEND</button>
      
    </form>
  </section>
@endsection
@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkEIuFxwYop5aFpsfloYR1AJ4dyw2RNM4&callback=initMap" async defer></script>
    <script src="../scripts/map.js"></script>
    <script src="../scripts/buttons.js"></script>
@endsection