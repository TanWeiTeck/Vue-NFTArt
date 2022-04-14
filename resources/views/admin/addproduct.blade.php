@extends('.master',[
    'title' => 'Add Product',
    ])

@section('content')



<form action="/addproduct" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center md:m-4 bg-white" >
    @csrf

    <div class="text-center p-3 realtive flex items-center justify-center">
        <a href="/admin" class="absolute left-4 p-3 w-14"><img src="https://img.icons8.com/glyph-neue/64/000000/back.png"/></a>
        <p class="text-3xl font-light">Add Product</p>
    </div>

        <div class="flex flex-col p-3">
            <div class="flex flex-col w-full">
                <div class="flex md:flex-row flex-col w-full justify-between ">
                    <div class="flex flex-col w-full px-4">
                        <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Category</label>
                        <select class="px-3 py-2 border rounded-lg" type="text" value="{{old('category_id')}}" name="category_id">
                        <option value="1">Art</option>
                        <option value="2">Collection</option>
                        </select>
                    </div>

                    <div class="flex flex-col w-full px-4">
                        <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Name</label>
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='name' value="{{old('name')}}" placeholder="product name">
                    </div>
                </div>

                <div class="flex md:flex-row flex-col w-full justify-between">
                    <div class="flex flex-col w-full px-4">
                        <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Decription</label>
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='description' value="{{ old('description')}}" placeholder="description">
                    </div>

                    <div class="flex flex-col w-full px-4">
                        <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Price</label>
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='price' value="{{old('price')}}" placeholder="price">
                    </div>
                </div>

                <div class="flex md:flex-row flex-col w-full justify-between">
                    <div class="flex flex-col w-full px-4">
                        <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Image</label>
                        <input class="mb-2 px-3 py-2 border rounded-lg" type="file" name='image' value="{{old('image')}}" placeholder="">
                    </div>
                </div>
            </div>
        {{-- error message --}}
            <div class="px-4 flex flex-col items-end justify-end">
                <div class="w-full">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif
                </div>
        {{-- end error message --}}

                <button
                    class="bg-[#40c706] rounded-md mt-3 px-7 py-2 text-white hover:text-black hover:bg-blue-400 hover:scale-95 duration-300 font-extrabold"
                >ADD
                </button>
            </div>
        </div>
</form>



@stop
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit iste voluptate adipisci dolorem mollitia minus veniam facere? Optio, architecto cum!</p>
