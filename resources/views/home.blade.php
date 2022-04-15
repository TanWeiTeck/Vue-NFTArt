@extends('.master',[
    'title' => 'Home',
    ])

@section('head')

@stop

@section('content')

    <vue-carousel></vue-carousel>

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

@stop
