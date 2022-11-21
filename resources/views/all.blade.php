@extends('.master', [
    'title' => 'All Product',
])

@section('content')
    <div class="flex flex-col lg:flex-row">
        <div class="flex min-w-[200px] justify-around bg-white p-3 lg:flex-col lg:justify-start">
            <a href="/all" class="p-2 font-bold">All Product</a>
            <a href="/art" class="p-2">Art</a>
            <a href="/collection" class="p-2">Collection</a>
        </div>
        @include('partials.productsection', ['slot' => 'All Product'])
    </div>
@stop
