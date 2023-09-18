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
            <h1 class="text-center text-3xl mt-3">Modifier le contact</h1>
        </div>




            <div class="flex items-center justify-center mt-10">
                <div>
                    {{-- <table class="min-w-full divide-y divide-gray-200 border border mt-4">
                        <tr>
                            <th scope="col" class="border px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Prenom</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Adresse postale</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Numero de telephone</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Date de naissance</th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>

                        </tr>

                    </thead>
                    </table> --}}
                    {{-- <a href="{{ route('admin.destroy', ['id' =>$contact->id  ]) }}"></a> --}}

                    <div class="container h-100 mt-5">
                        <div class="row h-100 justify-content-center align-items-center">
                            <div class="col-10 col-md-8 col-lg-6">

                                <form action="{{ route('admin.update', ['id' => $contact->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group w-80">

                                        <label for="Prenom" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">
                                            Nom</label>
                                            <input type="text" id="Prenom" value="{{ $contact->Nom }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="Prenom" placeholder="" required>

                                        <label for="Prenom" class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">
                                            Prénom</label>
                                            <input type="text" id="Prenom" value="{{ $contact->Prenom}}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="Prenom" placeholder="" required>

                                            <label for="Adresse_Postale"
                                                class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Adresse</label>
                                            <input type="text" id="Adresse Postale" value="{{ $contact->Adresse_Postale}}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="Adresse_postale" placeholder="" required>

                                            <label for="email"
                                                class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Email</label>
                                            <input type="email" id="email" value="{{ $contact->Email }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="Email" placeholder="" required>

                                            <label for="Numero_de_telephone"
                                                class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Numéro de
                                                téléphone</label>
                                            <input type="tel" id="Numero de telephone" value="{{ $contact->Numero_de_telephone}}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="Numero_de_telephone" placeholder="" required>

                                            <label for="Date_de_naissance"
                                                class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Date de
                                                naissance</label>
                                            <input type="date" id="Date de naissance" value="{{ $contact->Date_de_naissance}}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-00 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="Date_de_naissance" placeholder="" required>

                                            <button type="submit"
                                                class="mt-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Enregistrer</button>

                                                <div class="text-center mt-4">

                                                    <a href="{{ route('admin.contact.index') }}"
                                                              class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Retour
                                                              à la liste</a>
                                                      </div>

                                    </div>



                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>





</html>
