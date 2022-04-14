@extends('.master',[
    'title' => 'Art',
    ])

@section('content')
<div class="flex flex-col lg:flex-row">
    <div class="bg-white p-3 min-w-[200px] flex lg:flex-col lg:justify-start justify-around">
        <a href="/all" class="p-2">All Product</a>
        <a href="/art" class="font-bold p-2">Art</a>
        <a href="/collection" class="p-2">Collection</a>
    </div>
    @include('partials.productsection', ['slot'=> 'All Product'])
</div>
@stop


