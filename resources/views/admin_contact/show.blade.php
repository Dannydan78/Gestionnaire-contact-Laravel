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
            <h1 class="text-center text-3xl mt-3">Afficher le contacts</h1>
        </div>




            <div class="flex items-center justify-center mt-10">
                <div>
                    <table class="min-w-full divide-y divide-gray-200 border border mt-4">
                        <tr>
                            <th scope="col" class="border px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Prenom</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Adresse postale</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Numero de telephone</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Date de naissance</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>

                        </tr>
                        <td class="px-6 py-4 border">{{ $contact->id }}</td>
                        <td class="px-6 py-4">{{ $contact->Nom }}</td>
                                <td class="px-6 py-4">{{ $contact->Prenom }}</td>
                                <td class="px-6 py-4">{{ $contact['Adresse_Postale'] }}</td>
                                <td class="px-6 py-4">{{ $contact['Numero_de_telephone'] }}</td>
                                <td class="px-6 py-4">{{ $contact['Date_de_naissance'] }}</td>
                                <td class="px-6 py-4">{{ $contact->Email }}</td>
                    </thead>
                    </table>
                    <a href="{{ route('admin.destroy', ['id' =>$contact->id  ]) }}"></a>
                </div>
            </div>
        </div>
    </div>
</body>






</html>
