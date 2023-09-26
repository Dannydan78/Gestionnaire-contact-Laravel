<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <title>Contacts</title>
    @livewireStyles()
</head>

<body>


    @include('front-navbar')

    <form class="mt-3 m-5">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-4 pl-10 text-sm text-gray-900 border-gray-100 rounded-lg bg-gray-50  dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black"
                placeholder="Rechercher un contact..." required>
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Recherche
            </button>

        </div>
    </form>
    <h1 class="mb-4  ms-3 text-3xl font-extrabold text-gray-900 dark:text-gray-300 md:text-5xl lg:text-6xl"><span
            class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Tout vos contacts :
        </span></h1>


        @if (session('success'))
        <span class="w-100 py-3 bg-green-600 text-white rounded p-2"> {{ session('success') }} </span>
            @endif

        <div class="container mx-auto bg-blue-100 mt-5">
        <table class="w-full mt-10">
            <thead>
                <tr>
                    <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Nom</th>
                    <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Prenom</th>
                    <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Email</th>
                    <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Adresse</th>
                    <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Date de naissance</th>
                    <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <form class="cursor-default"
                            action="{{ route('front.contact.destroy', ['id' => $contact->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td class="border py-2 px-4">{{ $contact->Nom }}</td>
                            <td class="border py-2 px-4">{{ $contact->Prenom }}</td>
                            <td class="border py-2 px-4">{{ $contact->Email }}</td>
                            <td class="border py-2 px-4">{{ $contact->Adresse_Postale }}</td>
                            <td class="border py-2 px-4">{{ $contact->Date_de_naissance }}</td>
                            <td class="border py-2 px-4">
                                <button type="submit"
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Supprimer</button>
                                    <a href="{{ route('contact.edit', ['id' => $contact->id]) }}">
                                        <button type="button" class="text-gray-900 bg-gradient-to-r from-yellow-200 via-yellow-400 to-yellow-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                            Modifier
                                        </button>
                                    </a>

                            </td>

                        </form>
                    </tr>

                    @endforeach
                </tbody>
        </table>

        {{ $contacts->links() }}

    </div>

<div class="">

</div>

    <footer class="bg-gray-900 text-white p-4 bottom-0 w-full fixed">
        @include('front-footer')
    </footer>

    @livewireScripts()

</body>

</html>


