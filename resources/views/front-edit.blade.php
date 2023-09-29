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
        class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Modifier contact:
    </span></h1>


    <div class="container mx-auto border-2 mt-10 justify-center rounded shadow">




    <form class="mt-5 justify-center p-10" action="{{ route('contact.update', ['id' => $contact->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="Nom" class="block mb-2 text-sm font-medium text-gray-900 text-1xl">Nom :</label>
            <input type="text" id="Nom" name="nom" value="{{ $contact->Nom }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-6">
            <label for="Prenom" class="block mb-2 text-sm font-medium text-gray-900 text-1xl">Prénom :</label>
            <input type="text" id="Prenom" name="Prenom" value="{{ $contact->Prenom }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </div>
        <div class="mb-6">
            <label for="Telephone" class="block mb-2 text-sm font-medium text-gray-900 text-1xl">Telephone :</label>
            <input type="Tel" id="Telephone" name="Telephone" value="{{ $contact->Numero_de_telephone }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-6">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email :</label>
          <input type="email" id="email" name="Email" value="{{ $contact->Email }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " required>
        </div>
        <div class="mb-6">
            <label for="Adresse_postale" class="block mb-2 text-sm font-medium text-gray-900 text-1xl">Adresse :</label>
            <input type="text" id="Adresse_postale" name="Adresse_postale" value="{{ $contact->Adresse_Postale}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-6">
            <label for="Date_de_naissance" class="block mb-2 text-sm font-medium text-gray-900 text-1xl">Date de naissance :</label>
            <input type="Date" id="Date_de_naissance" name="Date_de_naissance" value="{{ $contact->Date_de_naissance }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>



        <button type="submit" class="mt-3 mb-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Modifier</button>
        <div>
            <button>
                <a href="{{ route('front.contacts') }}"
                      class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Retour
                      à la liste</a>
            </button>
        </div>
      </form>



</body>
</html>
