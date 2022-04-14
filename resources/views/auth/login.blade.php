<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body class="sm:flex text-sm text-primary-black mt-7 flex-col">
    <div class="sm:border sm:shadow-md max-w-md m-auto p-7 flex flex-col ">

        <a href="/"><img class=""
            src="https://cdn.store-assets.com/s/835322/f/7731314.png?width=350&format=webp" alt="logo-landding"></a>
        <h1 class="text-3xl text-center py-3">Log in</h1>
        <p class="text-center pb-3">to continue to <strong class="text-primary">Farm Skin Admin Dashboard</strong></p>
        <form action="{{ url('/login') }}" method="post">
            @csrf
            {{-- Email --}}
            <div class="flex flex-col py-2">
                <label for="email"><strong>Email Address</strong></label>
                <div class="flex relative items-center">
                    <input class="border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-b-2 focus:border-primary w-full z-10 bg-transparent" type="text" name="email" value="{{old('email')}}" placeholder="email">
                    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.14 9.55" class="w-4 h-4 m-1 absolute right-0 z-0"><defs></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M0,0V9.55H12.14V0ZM10.44.91,6,4.48,1.69.91ZM.85,8.63V1.37L6,5.59l5.23-4.22V8.63Z"></path></g></g></svg>
                </div>
                <span class="text-xs text-red-600">
                    @error('email')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            {{-- Password --}}
            <div class="flex flex-col py-2">
                <label for="password"><strong>Password</strong></label>
                <div class="flex relative items-center">
                    <input class="border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-b-2 focus:border-primary w-full z-10 bg-transparent"  type="password" name="password" placeholder="password">
                    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.23 13.69" class="w-4 h-4 m-1 absolute right-0 z-0"><defs></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M9.75,5V3.77A4,4,0,0,0,5.61,0,4,4,0,0,0,1.48,3.77V5A2,2,0,0,0,0,6.9v4.81a2,2,0,0,0,2,2H9.25a2,2,0,0,0,2-2V6.9A2,2,0,0,0,9.75,5ZM2.37,3.77A3.08,3.08,0,0,1,5.61.89,3.08,3.08,0,0,1,8.86,3.77V4.92H2.37Zm8,7.94A1.09,1.09,0,0,1,9.25,12.8H2A1.09,1.09,0,0,1,.89,11.71V6.9A1.09,1.09,0,0,1,2,5.81H9.25A1.09,1.09,0,0,1,10.34,6.9Z"></path><path d="M5.61,6.89A1.19,1.19,0,0,0,4.43,8.08V9.55a1.19,1.19,0,1,0,2.37,0V8.08A1.19,1.19,0,0,0,5.61,6.89Zm.29,2.66a.29.29,0,1,1-.58,0V8.08a.29.29,0,1,1,.58,0Z"></path></g></g></svg>
                </div>

                <span class="text-xs text-red-600">
                    @error('password')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            {{-- Remember Me Check Box --}}
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                <input class="focus:ring-0 accent-primary text-primary border-gray-400" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="pl-3" for="remember">
                    Remember me
                </label>
                </div>
                <a class="text-primary hover:underline" href="">Forgot password?</a>
            </div>
            {{-- Submit Button --}}
            <div>
                <button class='bg-primary w-full text-white p-2 my-5' type="submit">Log In</button>
            </div>
            <p class="text-center pt-4">Don't have an account? <a class="text-primary" href="register">Sign Up</a></p>
        </form>
    </div>
    <p class="w-full text-center text-gray-500 text-xs p-4">© 2022 Farmskin</p>

    </body>


</html>



