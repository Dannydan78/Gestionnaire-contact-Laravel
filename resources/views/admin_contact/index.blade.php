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
</head>
<title>Contact</title>


<body class="font-[Poppins]">
    <div class="flex">
        <div class="mx-auto">
            @include('sidebar')
        </div>
        <div class="w-4/5 p-4">
            <div class="mx_auto">
            <h1 class="text-center text-3xl mt-3">Liste des contacts</h1>
        </div>
           <div class="mt-4">
          <a href="{{ route('admin.create') }}" class="mt-3 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ajouter un nouveau contact</a>

        </div>



            <div class="flex items-center justify-center mt-4">
                <div class="min-w-full divide-y divide-gray-200 border border mt-5">
                <table class="min-w-full divide-y divide-gray-200 border border">
                    <thead>
                        <tr>
                            <th scope="col" class="border px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Prenom</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Adresse postale</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Numero de telephone</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Date de naissance</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contacts as $index => $contact)
                            <tr class="{{ $index % 2 === 0 ? 'bg-blue-50' : 'bg-white' }}">
                                <td class="px-6 py-4 border">{{ $contact->id }}</td>
                                <td class="px-6 py-4">{{ $contact->Nom }}</td>
                                <td class="px-6 py-4">{{ $contact->Prenom }}</td>
                                <td class="px-6 py-4">{{ $contact['Adresse_Postale'] }}</td>
                                <td class="px-6 py-4">{{ $contact['Numero_de_telephone'] }}</td>
                                <td class="px-6 py-4">{{ $contact['Date_de_naissance'] }}</td>
                                <td class="px-6 py-4">{{ $contact->Email }}</td>

                                <td>
                                    <a href="{{ route('admin.show', ['id' => $contact->id]) }}">
                                        <svg class="h-8 w-8 text-black-100"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />  <circle cx="12" cy="12" r="3" /></svg></a>
                                </td>
                                <td>
                                <a href="{{ route('admin.destroy', ['id' => $contact->id])}}"><svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z" />  <line x1="18" y1="9" x2="12" y2="15" />  <line x1="12" y1="9" x2="18" y2="15" /></svg></a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</body>






</html>
