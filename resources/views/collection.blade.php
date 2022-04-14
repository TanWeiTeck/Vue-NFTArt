@extends('.master',[
    'title' => 'Collection',
    ])



@section('content')

<div class="flex">
    <div class="bg-white p-4 min-w-[200px] flex flex-col space-y-5">
        <a href="/all">All Product</a>
        <a href="/art">Art</a>
        <a href="/collection" class="font-bold">Collection</a>
    </div>

    @include('partials.productsection', ['slot'=> 'Collection'])

</div>


@stop


