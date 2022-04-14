@extends('.master',[
    'title' => 'Home',
    ])

@section('head')
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <!-- Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
@stop

@section('content')

    <div class="swiper mySwiper mb-4">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img
                class="object-cover w-full sm:h-96 h-48"
                src="https://source.unsplash.com/user/erondu/3000x900"
                alt="apple watch photo"/>
            </div>
            <div class="swiper-slide">
                <img
                class="object-cover w-full  sm:h-96 h-48"
                src="https://source.unsplash.com/collection/190727/3000x900"
                alt="apple watch photo"/>
            </div>
            <div class="swiper-slide">
                <img
                class="object-cover w-full sm:h-96 h-48"
                src="https://source.unsplash.com/collection/190728/3000x900"
                alt="apple watch photo"/>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    @include('partials.productsection', ['slot'=> 'All Product'])

    {{-- contact us--}}
    <div class="p-4" id="contact">
        <h1 class="text-center p-3 text-3xl font-light">Contact Us</h1>

        {{-- google map --}}
        <div class="mt-4 map h-96 flex justify-center md:space-x-11 flex-col-reverse md:flex-row">
            <div class="max-w-xl h-full w-full md:rounded-md rounded-b-md overflow-hidden">
                <gmap-map
                :center="{lat:3.14908,lng:101.61616}"
                :zoom="13"
                style="width:100% ; height:100%;"
                >
                <gmap-marker
                    :position="{lat:3.14908,lng:101.61616}"/>
                </gmap-map>
            </div>
            @include('partials.contactus')
        </div>
    </div>

    <vue-scrolltotop></vue-scrolltotop>

@stop

@section('script')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>



@stop
