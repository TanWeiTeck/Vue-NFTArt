@extends('.master',[
    'title' => 'Home',
    ])

@section('content')

</form>
    <div class="text-center p-3 text-3xl font-light">Product List</div>
    <div class="m-4 bg-white overflow-auto">
        <table class="min-w-full p-4">
            <thead class="border-b sticky top-0">
                <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        ID
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Image
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Category
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Description
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Price
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Uploaded At
                    </th>
                    <a class="hover:text-blue-700 flex justify-end p-4" href="{{url('/addproduct')}}">+ Add New Product</a>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$product->id}}</td>
                    <td class="text-sm text-gray-900 font-light py-1">
                        <div class="max-w-[200px] m-auto"><img class="object-contain" width="full" src="{{ asset('storage/image/'.$product->image) }}"></div>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                        {{$product->name}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                        {{$product->category->category_name}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-2 min-w-[20rem] max-w-[30rem] h-10 overflow-y-hidden break-words">
                        {{$product->description}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                        {{$product->price}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                        {{$product->created_at}}
                    </td>

                    <td class="text-sm text-gray-900 font-light px-1 py-4 whitespace-nowrap">
                        <a href="{{"deleteproduct/".$product->id}}" name="delete">
                            <button class="bg-red-400 hover:bg-red-800 hover:text-gray-100 py-1 px-3 rounded-lg font-bold">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop


