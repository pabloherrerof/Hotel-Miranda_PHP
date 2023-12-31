 @extends('layout')
 @section('title')
 Home
 @endsection
 @section('content')
   <!--SECCION INTRO: PERFECT BASE FOR YOU + AVAILABILITY-->

   <section class="intro">
    <div class="intro__perfect-base--container">
      <div class="intro__perfect-base">
        <h5 class="text__pretitle text--light intro__pretitle">
          THE ULTIMATE LUXURY EXPERIENCE
        </h5>

        <h1 class="text__title text--light intro__title">
          The Perfect Base For You
        </h1>

        <div class="intro__buttons">
          <button class="button button--golden button--intro">
            TAKE A TOUR
          </button>
          <button class="button button--dark button--intro">LEARN MORE</button>
        </div>
      </div>
    </div>
    <form  method="POST" action="rooms.php" class="intro__availability">
      <div class="intro__calendar">
        <div class="intro__calendar-item">
          <label class="text--light text__label">Arrival Date</label>
          <input
            name="checkIn"
            class="intro__calendar-input"
            type="date"
            required placeholder="24th march 2020"
          />
        </div>
        <div class="intro__calendar-item">
          <label class="text--light text__label">Departure Date</label>
          <input
            name="checkOut"
            class="intro__calendar-input"
            type="date"
            placeholder="30th march 2020"
           required/>
        </div>
      </div>
      <button class="button button--golden button--availability">
        CHECK AVAILABILITY
      </button>
    </form>
  </section>

  <!--SECCION ABOUT US-->
  <section class="about-us">
    <div class="about-us__container">
      <div class="about-us__info">
        <div class="about-us__info-container">
          <h5 class="text__pretitle text__pretitle--out text--gray about-us__pretitle">ABOUT US</h5>
        <h1 class="text__title text--black about-us__title">
          Discover Our Underground.
        </h1>
        <p class="text__paragraph text--gray about-us__paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
        <button class="button button--golden button--book">BOOK NOW</button>
        </div>
        
      </div>

      <div class="about-us__cards">
        <div class="about-us__card about-us__card--reverse">
          <div class="about-us__card-img about-us__card-img--strong-team"></div>
          <div class="about-us__card-text">
            <img
              class="about-us__card-bg"
              src="../assets/home/about-us/strong-team-background.svg"
              alt="strong-team-bg"
            />
            <img
              class="about-us__card-icon"
              src="../assets/home/about-us/strong-team.svg"
              alt="strong-team-icon"
            />
            <h6 class="text__subtitle about-us__card-title">Strong Team</h6>
            <p class="text__card-paragraph text--black">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor.
            </p>
          </div>
        </div>
        <div class="about-us__card about-us__card--down">
          <div class="about-us__card-img about-us__card-img--luxury-room"></div>
          <div class="about-us__card-text about-us__card-text--dark">
            <img
              class="about-us__card-icon"
              src="../assets/home/about-us/luxury-room.svg"
              alt="luxury-room-icon"
            />
            <h6 class="text__subtitle text--light about-us__card-title">
              Luxury Room
            </h6>
            <p class="text__card-paragraph text--light">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--SECCION HANDPICKED ROOMS-->
  <section class="handpicked-rooms">
    <h5
      class="text__pretitle text--gray text--center handpicked-rooms__pretitle"
    >
      ROOMS
    </h5>
    <h1
      class="text__title text--lightblack text--center handpicked-rooms__title"
    >
      Hand Picked Rooms
    </h1>
    <div class="swiper swiper--handpicked-rooms">
      <div class="swiper-wrapper">
        @foreach($rooms as $index => $room)
        @if ($index > 1 && $index<5)
        <div class="swiper-slide swiper-slide--handpicked-rooms">
          <a href = 'room-detail.php?id={{$room['id']}}'>
          <div class="room-card">
            <div class="room-card__img room-card__img--full">
              <img class="room-card__img--img" src={{$room['thumbnail']}} alt="room photo">
              <div class="room-card__features-bar ">
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
    
            <div class="room-card__info">
              <div class="room-card__info-name">
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
              </div>
             
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
        </div>
        @endif
        @endforeach
      </div>

    
      <div class="room-card__buttons room-card__button--home">
        <button class="room-card__button button button--room-card room-card__button-prev"><img src="../assets/home/menu/Vector.svg" alt="arrow-icon" /></button>
        <button class="room-card__button button button--room-card button--golden room-card__button-next"><img src="../assets/home/menu/arrow-right.svg" alt="arrow-icon" /></button>
      </div> 
    </div>

    
  </section>

  <!--SECCION VIDEO-->
  <section class="intro-video">
    <div class="intro-video__container">
      <h5 class="text__pretitle text--gold intro-video__pretitle">
        INTRO VIDEO
      </h5>
      <h1 class="text__title text--light intro-video__title">
        Meet With Our Luxury Place.
      </h1>
      <p class="text__paragraph text--lightgray intro-video__paragraph">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat you have to understand this.
      </p>

      <video class="intro-video__video"  autoplay muted loop>
        <source src="../assets/Miranda-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>

      <button class="button button--golden button--book">BOOK NOW</button>
    </div>
    

  </section>

  <!--CORE FEATURES-->
  <section class="core-features">
    <div class="core-features__container">
      <h5
      class="text__pretitle text--gray text--center core-features__pretitle"
    >
      FACILITIES
    </h5>
    <h1 class="text__title text--center core-features__title">
      Core Features
    </h1>
<div class="swiper swiper--core-features">
  <div class="swiper-wrapper core-features__slider">
    <div class="swiper-slide core-features__slide">
      <img
        class="core-features_number-icon"
        src="../assets/home/core-features/01.svg"
        alt=""
      />
      <div class="core-features__slide-info">
        <img
          class="core-features__icon"
          src="../assets/home/core-features/star.svg"
          alt=""
        />
        <h4 class="text__subtitle core-features__slide-title">
          Have Hight Rating
        </h4>
        <p class="text__paragraph text--gray">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
    </div>
    <div class="swiper-slide core-features__slide">
      <img
        class="core-features_number-icon"
        src="../assets/home/core-features/02.svg"
        alt=""
      />
      <div class="core-features__slide-info">
        <img
          class="core-features__icon"
          src="../assets/home/core-features/quiethours.svg"
          alt=""
        />
        <h4 class="text__subtitle core-features__slide-title">
          Quiet Hours
        </h4>
        <p class="text__paragraph text--gray">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
    </div>
    <div class="swiper-slide core-features__slide">
      <img
        class="core-features_number-icon"
        src="../assets/home/core-features/03.svg"
        alt=""
      />
      <div class="core-features__slide-info">
        <img
          class="core-features__icon"
          src="../assets/home/core-features/bestlocation.svg"
          alt=""
        />
        <h4 class="text__subtitle core-features__slide-title">
          Best Locations
        </h4>
        <p class="text__paragraph text--gray">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
    </div>
    <div class="swiper-slide core-features__slide">
      <img
        class="core-features_number-icon"
        src="../assets/home/core-features/04.svg"
        alt=""
      />
      <div class="core-features__slide-info">
        <img
          class="core-features__icon"
          src="../assets/home/core-features/freecancellation.svg"
          alt=""
        />
        <h4 class="text__subtitle core-features__slide-title">
          Free Cancellation
        </h4>
        <p class="text__paragraph text--gray">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
    </div>
    <div class="swiper-slide core-features__slide">
      <img
        class="core-features_number-icon"
        src="../assets/home/core-features/05.svg"
        alt=""
      />
      <div class="core-features__slide-info">
        <img
          class="core-features__icon"
          src="../assets/home/core-features/payment.svg"
          alt=""
        />
        <h4 class="text__subtitle core-features__slide-title">
          Payment Options
        </h4>
        <p class="text__paragraph text--gray">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
    </div>
    <div class="swiper-slide core-features__slide">
      <img
        class="core-features_number-icon"
        src="../assets/home/core-features/06.svg"
        alt=""
      />
      <div class="core-features__slide-info">
        <img
          class="core-features__icon"
          src="../assets/home/core-features/offers.svg"
          alt=""
        />
        <h4 class="text__subtitle core-features__slide-title">
          Special Offers
        </h4>
        <p class="text__paragraph text--gray">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
    </div>
  </div>
  <div class="swiper-pagination swiper-pagination--core-features swiper"></div>
</div>
    </div>
  
    
  </section>

  <!--MENU-->
  <section class="menu">
    <div class="menu__container">
      <img class="menu__donut" src="../assets/home/menu/donut.svg" alt="donut" />
      <div class="menu__text">
        <h5 class="text__pretitle text--gray menu__pretitle">MENU</h5>
        <h1 class="text__title text--dark menu__title">Our Foods Menu</h1>
      </div>

      <div class="swiper swiper--menu">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide--menu">
            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--eggs"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Eggs &amp Bacon
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>
  
            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--tea"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Tea or Coffee
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>
  
            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--oatmeal"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Chia Oatmeal
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide--menu">
            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--fruit"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Fruit Parfait
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>
  
            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--marmalade"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Marmalade Selection
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>
  
            <div class="menu__slide">
              <div class="menu__slide-img menu__slide-img--cheese"></div>
              <div class="menu__slide-info">
                <h4 class="menu__slide-title text__subtitle--super-small">
                  Cheese Plate
                </h4>
                <p class="text__card-paragraph text--lightblack">
                  Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed
                  do eiusmod tempor.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="menu__buttons">
          <button class="button menu__button menu__button-prev">
            <img src="../assets/home/menu/Vector.svg" alt="arrow-icon" />
          </button>
          <button class="button button--golden menu__button menu__button-next">
            <img src="../assets/home/menu/arrow-right.svg" alt="arrow-icon" />
          </button>
        </div>
      </div>

     
    </div>
    <div class="swiper swiper--menu__photo">
      <div class="swiper-wrapper swiper--menu__photo-wrapper">
        <div class="swiper-slide menu__photo-slide">
          <img class="menu__photo-slide--img" src="../assets/home/menu/restaurant-about 2.jpeg" />
        </div>
        <div class="swiper-slide menu__photo-slide">
          <img class="menu__photo-slide--img" src="../assets/home/menu/restaurant-about 1.jpeg" />
        </div>
        <div class="swiper-slide menu__photo-slide">
          <img class="menu__photo-slide--img"  src="../assets/home/menu/restaurant-about 3.jpeg"/>
        </div>
      </div>
      <div class="swiper-pagination swiper-pagination--menu__photo swiper"></div>
    </div>
    
  </section>

  <!--ACHIEVEMENTS-->
  <section class="achievements">
    <div class="achievements__container">
      <div class="achievements__card">
        <img
          class="achievements__card-img"
          src="../assets/home/achievements/rocket.svg"
          alt="rocket"
        />
        <img
          class="achievements__card-info"
          src="../assets/home/achievements/84k.svg"
          alt="projects"
        />
      </div>
      <div class="achievements__card">
        <img
          class="achievements__card-img"
          src="../assets/home/achievements/backers.svg"
          alt="people"
        />
        <img
          class="achievements__card-info"
          src="../assets/home/achievements/10M.svg"
          alt="backers"
        />
      </div>
      <div class="achievements__card">
        <img
          class="achievements__card-img"
          src="../assets/home/achievements/categories.svg"
          alt="invest"
        />
        <img
          class="achievements__card-info"
          src="../assets/home/achievements/02k.svg"
          alt="categories served"
        />
      </div>
      <div class="achievements__card">
        <img
          class="achievements__card-img"
          src="../assets/home/achievements/funds.svg"
          alt="book"
        />
        <img
          class="achievements__card-info"
          src="../assets/home/achievements/100M.svg"
          alt="raised funds"
        />
      </div>
    </div>
  </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../scripts/swiper/homeSlider.js"></script>
@endsection