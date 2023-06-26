@extends('layout')
@section('title')
Room Details
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
            <p class="text__page-card text--gold">Room Details</p>
          </div>
        </div>
      </div>
    </section>

    <!--ROOM-DETAIL-->
    <section class="room-detail">
      <div class="room-detail__container">
        <div class="room-detail__card">
          <div class="room-detail__header">
            <div class="room-detail__titles">
              <h4 class="offers__pretitle text__pretitle--small text--gray">
                {{strtoupper($room['roomType'])}}
              </h4>
              <h1 class="offers__title text__card-title text--lightblack">
                {{$room['roomType']}}-{{$room['roomNumber']}}
              </h1>
            </div>
            <div class="room-detail__price">
              <p class="text__price text--gold offers__price-new">
                @if($room['discount'] > 0) 
                  ${{$room['price']-($room['price'] *($room['discount']/100))}}
                  @else
                  ${{$room['price']}}
                  @endif<span class="text__price--night">/Night</span>
              </p>
            </div>
          </div>

          <div class="room-detail__img">
            <img class="room-detail__img--img" src={{$room['thumbnail']}} alt="">
          </div>
        </div>

        <div class="room-detail__availability">
          <h5 class="room-detail__form-title text__form text--lightblack">
            Check Availability
          </h5>
          <form method="POST" action="room-detail.php" class="room-detail__form">
            <div class="room-detail__input-container">
              <label
                for=""
                class="room-detail__input-label text__form text__form--label text--lightblack"
                >Check In</label
              >
              <input
                type="date"
                name=""
                id=""
                class="room-detail__input text__paragraph text--gray"
              />
            </div>
            <div class="room-detail__input-container">
              <label
                for=""
                class="room-detail__input-label text__form text__form--label text--lightblack"
                >Check Out</label
              >
              <input
                type="date"
                name=""
                id=""
                class="room-detail__input text__paragraph text--gray"
              />
            </div>
            <button class="button button--golden button--form-availability">
              CHECK AVAILABILITY
            </button>
          </form>
        </div>
      </div>
    </section>

    <!--ROOM FEATUREs-->
    <section class="room-features">
     <div class="room-features__container">
      <div class="room-features__paragraph text__card-paragraph text--gray">
        <p>
          
        </p>
      </div>
      <div class="room-features__amenities">
        <h4
          class="room-features__amenities-title text__subtitle text--lightblack"
        >
          Amenities
        </h4>
        <div class="room-features__line"></div>
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
            <li class="offers__feature">
              <img
                src="../assets/room-detail/support.svg"
                alt="support-icon"
                class="offers__feature-img"
              />
              <p class="">24/7 Online Support</p>
            </li>
            <li class="offers__feature">
              <img
                src="../assets/room-detail/security.svg"
                alt="security-icon"
                class="offers__feature-img"
              />
              <p class="">Smart Security</p>
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
            <li class="offers__feature">
              <img
                src="../assets/room-detail/lock.svg"
                alt="lock-icon"
                class="offers__feature-img"
              />
              <p class="">Strong Locker</p>
            </li>
            <li class="offers__feature">
              <img
                src="../assets/room-detail/team.svg"
                alt="team-icon"
                class="offers__feature-img"
              />
              <p class="">Expert Team</p>
            </li>
          </ul>
        </div>
      </div>

      <div class="room-features__review">
        <div class="room-features__review-img">
          <img src="../assets/room-detail/review-user.jpeg" class="room-features__review-img room-features__review-img--img"/>
          <img
            src="../assets/room-detail/check.svg"
            alt="check-icon"
            class="room-features__review-icon"
          />
        </div>
        <h4 class="room-features__review-title text__subtitle text--lightblack">
          Rosalina D. William
        </h4>
        <h6 class="room-features__review-subtitle text__pretitle text--gold">
          FOUNDER, QOX CO.
        </h6>
        <p class="text__footer-paragraph text--gray text--center">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore.
        </p>
      </div>
      <div class="room-features__cancelation">
        <h4
          class="room-features__amenities-title text__subtitle text--lightblack"
        >
          Cancelation
        </h4>
        <div class="room-features__line"></div>
        <p class="text__card-paragraph text--gray">
          {{$room['cancellation']}}
        </p>
      </div>

      <div class="room-features__related">
        <h4
          class="room-features__amenities-title text__subtitle text--lightblack"
        >
          Related Rooms
        </h4>
        <div class="room-features__line"></div>

        <div class="swiper swiper__related-rooms ">
          <div class="swiper-wrapper">
            @foreach($rooms as $index => $room)
            <div class="swiper-slide swiper-slide--handpicked-rooms">
              <a href = 'room-detail.php?id={{$room['id']}}'>
              <div class="room-card room-card--rooms">
                <div class="room-card__img">
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
                    @if($room['discount'] > 0) 
                    ${{$room['price']-($room['price'] *($room['discount']/100))}}
                    @else
                    ${{$room['price']}}
                    @endif<span class="room-card__price--night">/Night</span>
                  </p>
                  <p class="room-card__price room-card__price--small text--booking-gray">Booking Now</p>
                  </div>
                 
                </div>
              </div>
              </a>
            </div>
            @endforeach
          </div>
          <div class="room-card__buttons room-card__button--home">
            <button class="room-card__button button button--room-card related-rooms__button-prev"><img src="../assets/home/menu/Vector.svg" alt="arrow-icon" /></button>
            <button class="room-card__button button button--room-card button--golden related-rooms__button-next"><img src="../assets/home/menu/arrow-right.svg" alt="arrow-icon" /></button>
          </div>
        </div>
      </div>
     </div>
    </section>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../scripts/swiper/room-detailSlider.js"></script>
    <script src="../scripts/buttons.js"></script>
@endsection