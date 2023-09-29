<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Contacts</title>
    @livewireStyles()
</head>

<body>


    @include('front-navbar')



        </div>

    <h1 class="mb-4 mt-5 ms-3 text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl"><span
            class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Tout vos contacts :
        </span></h1>


    @if (session('success'))
        <span class="w-100 py-3 bg-green-600 text-white rounded p-2"> {{ session('success') }} </span>
    @endif


    <div class="ml-5">

        <a href="{{ route('contact.create') }}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ajouter un contact</a>

    </div>

    <div class="container mx-auto">

        @livewire('search-bar')

    </div>







    <footer class="bg-gray-900 text-white p-4 bottom-0 w-full mt-20">
        @include('front-footer')
    </footer>

    @livewireScripts()

</body>

</html>
