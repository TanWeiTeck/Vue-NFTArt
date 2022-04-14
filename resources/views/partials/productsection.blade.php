<div id="allproduct" class="w-full">
    <h1 class="text-center md:p-3 text-3xl font-light">
        {{$slot}}
    <div class="grid grid-cols-2 gap-4 p-4 md:grid-cols-3 lg:grid-cols-4">

        @foreach ($product as $product)
        {{-- <vue-productcard :product={{$product}}></vue-productcard> --}}
        <vue-productcard :product='@json($product)'></vue-productcard>
        @endforeach
    </div>
</div>
