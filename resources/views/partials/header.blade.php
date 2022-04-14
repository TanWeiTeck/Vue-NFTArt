
{{-- success submitted message --}}
@if(Session::has('success'))
<div class="alert alert-success text-center">
{{Session::get('success')}}
</div>
@endif
{{-- success submitted message --}}

<div id='header' class="h-20 flex items-center justify-between bg-white">
    <div>
        <a class="" href="/">
            <img class="h-24 p-3 "
            src="https://cdn.store-assets.com/s/835322/f/7731314.png?width=350&format=webp" alt="logo-landding">
        </a>
    </div>
    {{-- vue-hamburger + side menu component --}}


    <vue-menu class="p-4"></vue-menu>
</div>
