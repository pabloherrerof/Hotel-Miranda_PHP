 @extends('layout')
 @section('title')
 Our Offers
 @endsection
 @section('content')
    <!--SECCION TITLE-->
    <section class="page-title">
      <div class="page-title__container">
        <h5 class="text__pretitle text--light page-title__pretitle">
          THE ULTIMATE LUXURY
        </h5>

        <h1 class="text__title text--light page-title__title">Our Offers</h1>
        <div class="page-title__index-container">
          <div class="page-title__index">
            <p class="text__page-card text--lightblack text__page-card--home">Home</p>
            <p class="text__page-card text--lightblack">|</p>
            <p class="text__page-card text--gold">Offers</p>
          </div>
        </div>
      </div>
    </section>

    <!--OFFERS-->
    <section class="offers">
      <div class="offers__cards">
      @foreach ($offerRooms as $index => $room)
      <div class="offers__card">
        <div class="offers__card-img">
          <img class="offers__card-img--img" src={{$room['thumbnail']}} alt="">
        </div>
        <div class="offers__card-info">
          <div class="offers__prices">
            <div>
              <span class="text__price--small text--gold offers__price-old"
                >${{$room['price']}}</span
              ><span class="offers__price-night text__price--night text--gold"
                >/Night</span
              >
            </div>
            <p class="text__price text--red offers__price-new">
              ${{$room['price']-($room['price'] *($room['discount']/100))}}
              <span class="text__price--night">/Night</span>
            </p>
          </div>

          <h4 class="offers__pretitle text__pretitle--small text--gray">
            {{$room['roomType']}}
          </h4>
          <h1 class="offers__title text__card-title text--lightblack">
            {{$room['roomType']}}-{{$room['roomNumber']}}
          </h1>
          <p class="offers__paragraph text__card-paragraph text--gray">
            {{$room['description']}}
          </p>

          <div class="offers__amenities-container">
            <ul class="offers__amenities text__amenities text--gray">
              <li class="offers__feature">
                <img
                  src="../assets/offers/ac.svg"
                  alt="ac-icon"
                  class="offers__feature-img"
                />
                <p class="">Air conditioner</p>
              </li>
              <li class="offers__feature">
                <img
                  src="../assets/offers/breackfast.svg"
                  alt="breakfast-icon"
                  class="offers__feature-img"
                />
                <p class="">Breakfast</p>
              </li>
              <li class="offers__feature">
                <img
                  src="../assets/offers/cleaning.svg"
                  alt="cleaning-icon"
                  class="offers__feature-img"
                />
                <p class="">Cleaning</p>
              </li>
              <li class="offers__feature">
                <img
                  src="../assets/offers/grocery.svg"
                  alt="grocery-icon"
                  class="offers__feature-img"
                />
                <p class="">Grocery</p>
              </li>
              <li class="offers__feature">
                <img
                  src="../assets/offers/shop.svg"
                  alt="shop-icon"
                  class="offers__feature-img"
                />
                <p class="">Shop near</p>
              </li>
            </ul>
            <ul class="offers__amenities text__amenities text--gray">
              <li class="offers__feature">
                <img
                  src="../assets/offers/wifi.svg"
                  alt="wifi-icon"
                  class="offers__feature-img"
                />
                <p class="">High speed WiFi</p>
              </li>
              <li class="offers__feature">
                <img
                  src="../assets/offers/kitchen.svg"
                  alt="kitchen-icon"
                  class="offers__feature-img"
                />
                <p class="">Kitchen</p>
              </li>
              <li class="offers__feature">
                <img
                  src="../assets/offers/shower.svg"
                  alt="shower-icon"
                  class="offers__feature-img"
                />
                <p class="">Shower</p>
              </li>
              <li class="offers__feature">
                <img
                  src="../assets/offers/bed.svg"
                  alt="bed-icon"
                  class="offers__feature-img"
                />
                <p class="">Single bed</p>
              </li>
              <li class="offers__feature">
                <img
                  src="../assets/offers/towels.svg"
                  alt="towels-icon"
                  class="offers__feature-img"
                />
                <p class="">Towels</p>
              </li>
            </ul>
          </div>
          <a href = 'room-detail.php?id={{$room['id']}}'><button class="button button--book button--golden offers__button">BOOK NOW</button></a>
        </div>
      </div>
      @endforeach
        

      </div>
    </section>

    <!--POPULAR ROOMS-->

    <section class="popular-rooms">
      <div class="popular-rooms-container">
        <h4 class="popular-rooms__pretitle text__pretitle  text--gold text--center">POPULAR LIST</h4>
        <h1 class="popular__room__title text__offer-card text--light text--center">POPULAR ROOMS</h1>

        <div class="swiper swiper__popular-rooms ">
          <div class="swiper-wrapper swiper-wrapper__popular-rooms">
            @foreach ($rooms as $index => $room)
            @if($index <3)
            <div class="swiper-slide swiper-slide--popular-rooms">
              <a href = 'room-detail.php?id={{$room['id']}}'>
              <div class="room-card--popular">
                <div class="room-card__img room-card__img--full room-card__img--popular-rooms">
                  <img class="room-card__img--img" src={{$room['thumbnail']}} alt="room photo">
                  <div class="room-card__features-bar room-card__features-bar--popular">
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
        
                <div class="room-card__info rom-card__info--rooms room-card__info--popular">
                    <h4
                    class="text__subtitle--small text--lightblack text--center room-card__title"
                  >
                    Minimal Duplex Room
                  </h4>
                  <p
                    class="text__card-paragraph text--center text--gray rom-card__paragraph"
                  >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore.
                  </p>
                  <div class="room-card__price-container">
                    <p
                    class="room-card__price room-card__price--small text--gold"
                  >
                    345 <span class="room-card__price--night">/Night</span>
                  </p>
                  <p class="room-card__price room-card__price--small text--booking-gray">Booking Now</p>
                  </div>
                 
                </div>
              </div>
            </a>
            </div>
            @endif
            @endforeach
          </div>
          <div class="room-card__buttons room-card__button--home">
            <button class="room-card__button button button--room-card popular-rooms__button-prev"><img src="../assets/home/menu/Vector.svg" alt="arrow-icon" /></button>
            <button class="room-card__button button button--room-card button--golden popular-rooms__button-next"><img src="../assets/home/menu/arrow-right.svg" alt="arrow-icon" /></button>
          </div>
          
        </div>
  
          
          
    
      </div>
    </section>
      @endsection
      @section('scripts')
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
      <script src="../scripts/swiper/offersSlider.js"></script>
      <script src="../scripts/buttons.js"></script>
      @endsection