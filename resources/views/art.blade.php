@extends('.master',[
    'title' => 'Art',
    ])



@section('content')

    <div class="flex">
        <div class="bg-white p-4 min-w-[200px] flex flex-col space-y-5">
            <a href="/all">All Product</a>
            <a href="/art" class="font-bold">Art</a>
            <a href="/collection">Collection</a>
        </div>

        @include('partials.productsection', ['slot'=> 'Art'])
    </div>


@stop


