@extends('.master',[
    'title' => 'All Product',
    ])



@section('content')

<div class="flex">
    <div class="bg-white p-4 min-w-[200px] flex flex-col space-y-5">
        <a href="/all" class="font-bold">All Product</a>
        <a href="/art">Art</a>
        <a href="/collection">Collection</a>
    </div>


    @include('partials.productsection', ['slot'=> 'All Product'])
</div>



@stop


