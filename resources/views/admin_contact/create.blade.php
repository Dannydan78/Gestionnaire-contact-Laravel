<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>Créer nouveau contact</title>
</head>

<body>

    <div class="container mx-auto mt-8">

        @extends('sidebar')





        <div class="mx-auto w-96">
            <h1 class="text-3xl">Ajouter contact</h1>

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 italic">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            <form class="mt-10 p-5" action="{{ route('admin.store') }}" method="POST">




                @csrf
                <label for="Nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Nom</label>
                <input type="text" id="Nom"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="Nom" placeholder="" required>

                @error('Nom')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror


                 <label for="Prenom" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">
                    Prénom</label>
                    <input type="text" id="Prenom"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="Prenom" placeholder="" required>

                    <label for="Adresse_Postale"
                        class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Adresse</label>
                    <input type="text" id="Adresse Postale"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="Adresse_postale" placeholder="" required>

                    <label for="email"
                        class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Email</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="Email" placeholder="" required>

                    <label for="Numero_de_telephone"
                        class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Numéro de
                        téléphone</label>
                    <input type="tel" id="Numero de telephone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="Numero_de_telephone" placeholder="" required>

                    <label for="Date_de_naissance"
                        class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Date de
                        naissance</label>
                    <input type="date" id="Date de naissance"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="Date_de_naissance" placeholder="" required>

                    <button type="submit"
                        class="mt-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Enregistrer</button>
        </div>

        <div class="text-center mt-4">
      <a href="{{ route('admin.contact.index') }}"
                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Retour
                à la liste</a>
        </div>
    </div>




    </div>

</body>






</body>

</html>
