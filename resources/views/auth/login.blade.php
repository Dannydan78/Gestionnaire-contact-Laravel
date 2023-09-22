<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login</title>
</head>
<body>
@include('front-navbar')



<h1 class="text-3xl text-center mt-3 mb-6">Se connecter</h1>

<div class="card">
    <div class="card-body">
        <form action="{{ route('auth.login') }}" method="post" class="space-y-3">
            @csrf

            <div class="relative m-20">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-500" id="email" name="email" value="{{ old('email') }}">
                @error("email")
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative m-20">
                <label for="password" class="block text-gray-700">Mot de passe</label>
                <input type="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-500" id="password" name="password">
                @error("password")
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="m-20 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Se connecter</button>
        </form>
    </div>
</div>


<footer class="bg-gray-900 text-white p-4 bottom-0 w-full fixed">
    @include('front-footer')
</footer>
</body>
</html>
