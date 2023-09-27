
<div>
    <div class="relative">
        <input
            wire:model.live="search"
            type="search"
            placeholder="Recherche d'un contact..."
            class="block w-full py-2 px-4 pr-10 text-sm text-gray-900 placeholder-gray-400 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:text-black dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400"
        >
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg
                class="w-4 h-4 text-gray-500 dark:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 20 20"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                />
            </svg>
        </div>
    </div>



    <div class="container mx-auto bg-blue-100 mt-5">
        <table class="w-full mt-10">
            <thead>
                <tr>
                    <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Nom</th>
                    <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Prenom</th>
                    <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Email</th>
                    <th class="bg-blue-500 text-white font-bold py-2 px-4 text-left">Telephone</th>
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
                            <td class="border py-2 px-4">{{ $contact->Numero_de_telephone }}</td>
                            <td class="border py-2 px-4">{{ $contact->Adresse_Postale }}</td>
                            <td class="border py-2 px-4">{{  date('d.m.Y', strtotime($contact->Date_de_naissance))}}</td>
                            <td class="border py-2 px-4">
                                <button type="submit"
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>

                                <a href="{{ route('contact.edit', ['id' => $contact->id]) }}"

                                        class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                        Edit

                                </a>


                            </td>

                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>
