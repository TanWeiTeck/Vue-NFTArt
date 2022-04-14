@extends('.master',[
    'title' => 'Payment',
    ])

@section('content')
    <h1 class="text-center p-3 text-3xl font-light">Payment Page</h1>
    <form action="/payment" method="POST" class="flex flex-col max-w-md m-auto ">
    @csrf

        <input class='hidden' type="text" name="id" value={{$product->id}}>

        <div class="flex flex-col w-full px-4">
            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Name </label>
            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='name' value="{{old('name')}}" placeholder="name">
        </div>
        <div class="flex flex-col w-full px-4">
            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Email</label>
            <input class="mb-2 px-3 py-2 border rounded-lg" type="email" name='email' value="{{old('email')}}" placeholder="email">
        </div>
        <div class="flex flex-col w-full px-4">
            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold">Contact </label>
            <input class="mb-2 px-3 py-2 border rounded-lg" type="text" name='contact' value="{{old('contact')}}" placeholder="contact number">
        </div>


        <div class="flex flex-col w-full px-4 space-y-3">

            <label class="text-xl mt-2 md:mt-3 text-blue-900 font-extrabold"> Payment Method </label>

            <div class="flex space-x-6 ">
                <div class="flex items-center space-x-4">
                    <input type="radio" name="payment_method" value="creditcard">
                    <label>Credit Card Payment</label>
                </div>
                <div class="flex items-center space-x-4">
                    <input type="radio" name="payment_method" value="onlinebanking">
                    <label>Online Banking</label>
                </div>
            </div>
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
        <div class="py-4 px-4">
            <vue-primarybutton type='submit' name=''>Next</vue-primarybutton>
        </div>

    </form>

@stop
