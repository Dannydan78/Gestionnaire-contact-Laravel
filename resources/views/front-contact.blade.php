
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Contacts
    </title>
</head>
<body>
@include('front-navbar')

<form class="mt-3 m-5">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border-gray-100 rounded-lg bg-gray-50  dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black" placeholder="Rechercher un contact..." required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Recherche</button>
    </div>
</form>
<h1 class="mb-4  ms-3 text-3xl font-extrabold text-gray-900 dark:text-gray-300 md:text-5xl lg:text-6xl"><span
    class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Tout vos contacts : </span></h1>
<div class="container mx-auto bg-blue-100 mt-5">



<table class="border-collapse w-full">
    <thead>
        <tr>
            <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Nom</th>
            <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Prenom</th>
            <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Email</th>
            <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Adresse</th>
            <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Date de naissance</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>

            <td class="border py-2 px-4">{{ $contact->Nom }}</td>
            <td class="border py-2 px-4">{{ $contact->Prenom }}</td>
            <td class="border py-2 px-4">{{ $contact->Email }}</td>
            <td class="border py-2 px-4">{{ $contact->Adresse_Postale }}</td>
            <td class="border py-2 px-4">{{ $contact->Date_de_naissance }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

</div>
<footer class="bg-gray-900 text-white p-4 bottom-0 w-full fixed">
    @include('front-footer')
</footer>
</body>
</html>
