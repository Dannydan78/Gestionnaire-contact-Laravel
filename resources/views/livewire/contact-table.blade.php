{{-- <div>
    <div class="flex items-center justify-center mt-4">
        <div class="min-w-full divide-y divide-gray-200 border border mt-5">
            <table class="min-w-full divide-y divide-gray-200 border border">
                <thead>
                    <tr>
                        <th scope="col"
                            class="border px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Id</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nom</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Prenom</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Adresse postale</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Numero de telephone</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date de naissance</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email</th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">

                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-100 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        </th>
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
                                <a class="cursor-default" href="{{ route('admin.show', ['id' => $contact->id]) }}">
                                    <x-heroicon-s-eye class="h-7 w-7 hover:text-gray-500 text-black cursor-pointer" />
                                </a>
                            </td>
                            <td>

                                <form class="cursor-default"
                                    action="{{ route('admin.destroy', ['id' => $contact->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <x-heroicon-o-trash class="h-7 w-7 text-red-600" />
                                    </button>
                                </form>
                            <td>
                                <a href="{{ route('admin.edit', ['id' => $contact->id]) }}">
                                    <x-heroicon-o-pencil class="h-7 w-7 text-blue-600" />
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $contacts->links() }}
            <button wire:click="increment"
                class="mt-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                type="button">Incrementer</button>
        </div>
    </div --}}
