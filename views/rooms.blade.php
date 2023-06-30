@extends('layout')
@section('title')
Rooms
@endsection
@section('content')
      <!--SECCION TITLE-->
      <section class="page-title">
        <div class="page-title__container">
          <h5 class="text__pretitle text--light page-title__pretitle">
            THE ULTIMATE LUXURY
          </h5>
  
          <h1 class="text__title text--light page-title__title">Ultimate Room</h1>
          <div class="page-title__index-container">
            <div class="page-title__index">
              <p class="text__page-card text--lightblack text__page-card--home">Home</p>
              <p class="text__page-card text--lightblack">|</p>
              <p class="text__page-card text--gold">Rooms</p>
            </div>
          </div>
        </div>
      </section>

      <section class="rooms">
        <div class="rooms__container">
        <div class="swiper swiper__rooms">
      <div class="swiper-wrapper swiper__rooms-wrapper">
       <div class="swiper-slide rooms__slide--rooms">
        @foreach($rooms as $index => $room)
      
        <a href = 'room-detail/{{$room['id']}}'>
          <div class="room-card room-card--rooms">
          <div class="room-card__img--rooms">
            <img class="room-card__img--img" src={{$room['thumbnail']}} alt="room photo">
            <div class="room-card__features-bar room-card__features-bar--rooms">
              <img
                src="../assets/home/handpicked-rooms/bed.svg"
                alt="feature-icon-bed"
                class="room-card__features-icon"
              />
              <img
                src="../assets/home/handpicked-rooms/wifi.svg"
                alt="feature-icon-wifi"
                class="room-card__features-icon"
              />
              <img
                src="../assets/home/handpicked-rooms/car.svg"
                alt="feature-icon-parking"
                class="room-card__features-icon"
              />
              <img
                src="../assets/home/handpicked-rooms/freeze.svg"
                alt="feature-icon-AC"
                class="room-card__features-icon"
              />
              <img
                src="../assets/home/handpicked-rooms/gym.svg"
                alt="feature-icon-gym"
                class="room-card__features-icon"
              />
              <img
                src="../assets/home/handpicked-rooms/cigar.svg"
                alt="feature-icon-noSmoke"
                class="room-card__features-icon"
              />
              <img
                src="../assets/home/handpicked-rooms/bar.svg"
                alt="feature-icon-bar"
                class="room-card__features-icon"
              />
            </div>
          </div>
  
          <div class="room-card__info rom-card__info--rooms">
            <h4
              class="text__subtitle--small text--lightblack text--center room-card__title"
            >
            {{$room['roomType']}}-{{$room['roomNumber']}}
            </h4>
            <p
              class="text__card-paragraph text--center text--gray rom-card__paragraph"
            >
            {{$room['description']}}
            </p>
            <div class="room-card__price-container">
              <p
              class="room-card__price room-card__price--small text--gold"
            >
            ${{$room['price']}} <span class="room-card__price--night">/Night</span>
            </p>
            <p class="room-card__price room-card__price--small text--booking-gray">Booking Now</p>
            </div>
           
          </div>
        </div>
        </a>
        @endforeach
       </div>
       
       
       
      </div>
      <div class="rooms__slider-buttons">
        <button class="room-card__button button button--room-card button--room-card-rooms room-slider__button-prev"><img src="../assets/home/menu/Vector.svg" alt="arrow-icon" /></button>
        <div class="swiper-pagination swiper-pagination--rooms swiper"></div>
        <button class="room-card__button button button--room-card button--room-card-rooms button--golden room-slider__button-next"><img src="../assets/home/menu/arrow-right.svg" alt="arrow-icon" /></button>
       
      </div> 
      
     
        </div>
      </div>
      </section>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="../scripts/swiper/roomsSlider.js"></script>
<script src="../scripts/buttons.js"></script>
@endsection