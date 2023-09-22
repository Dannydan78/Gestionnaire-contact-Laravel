@foreach ($contacts as $contact )

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-500 dark:bg-blue-100 dark:text-gray-00">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Nom & Prénom :
                </th>

                <th scope="col" class="px-6 py-3">
                    Adresse :
                </th>
                <th scope="col" class="px-6 py-3">
                    Telephone :
                </th>
                <th scope="col" class="px-6 py-3">
                    Date de naissance :
                </th>

            </tr>
        </thead>
        <tbody>
            <tr class="bg-blue-200 dark:border-gray-700 dark:bg-gray-700 p-8">


                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-10 h-10 rounded-full" src="/images/floyd.webp" alt="">
                    <div class="pl-3">
                        <div class="text-base font-semibold">{{ $contact->Nom }}  {{$contact->Prenom}}</div>
                        <div> </div>
                        <div class="font-normal text-gray-500">{{ $contact->Email}}</div>
                    </div>
                </th>
                <td class="px-6 py-4 text-white">
                    {{ $contact->Adresse_Postale }}
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center text-white">
                        {{ $contact->Numero_de_telephone }}
                    </div>
                </td>
                <td class="px-6 py-4 text-white">
                    {{ $contact->Date_de_naissance }}
                </td>

            </tr>

        </tbody>
    </table>

</div>

<div class="mt-2">

    {{ $contacts->links() }}
</div>
@endforeach
