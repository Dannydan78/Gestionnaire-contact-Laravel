<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ajouter un contact</title>
</head>
<body>


    @include('front-navbar')


    <h1 class="mb-4 mt-5 ms-3 text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl"><span
        class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Ajouter un contact :
    </span></h1>


    <div class="container mx-auto border-2 mt-10 justify-center rounded shadow">




    <form action="{{ route('contact.store') }}" class="mt-5 justify-center p-10"  method="POST">
        @csrf

        <div class="mb-6">
            <label for="Nom" class="block mb-2 text-sm font-medium text-gray-900 text-1xl">Nom :</label>
            <input type="text" id="Nom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required name="Nom" value="{{ old('Nom') }}">
            @error('Nom') <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="Prenom" class="block mb-2 text-sm font-medium text-gray-900 text-1xl">Prénom :</label>
            <input type="text" id="Prenom" name="Prenom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required value="{{ old('Prenom') }}">
            @error('Prenom') <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="Telephone" class="block mb-2 text-sm font-medium text-gray-900 text-1xl">Telephone :</label>
            <input type="Tel" id="Telephone" name="Telephone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="{{ old ('Telephone')}}">
            @error('Telephone') <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-6">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email :</label>
          <input type="email" id="email" name="Email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " required value="{{ old('Email')}}">
          @error('Email') <div class="text-red-500">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-6">
            <label for="Adresse_postale" class="block mb-2 text-sm font-medium text-gray-900 text-1xl">Adresse :</label>
            <input type="text" id="Adresse_postale" name="Adresse_postale" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="{{ old('Adresse_postale')}}">
            @error('Adresse_postale') <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="Date_de_naissance" class="block mb-2 text-sm font-medium text-gray-900 text-1xl">Date de naissance :</label>
            <input type="Date" id="Date_de_naissance" name="Date_de_naissance" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="{{ old('Date_de_naissance')}}">
              @error('Date_de_naissance') <div class="text-red-500">{{ $message }}</div>
              @enderror
        </div>






        <button type="submit" class="mt-3 mb-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enregistrer</button>
      </form>



</body>
</html>
