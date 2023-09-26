<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center">
            {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" /> --}}
            <img class="w-10 h-10 rounded-full" src="/images/startup.png" alt="">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white p-2">Contacts
                Laravel</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('home.index') }}"
                        class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                        aria-current="page">Accueil</a>
                </li>
                <li>
                    <a href="{{ route('front.contacts') }}"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contacts</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                </li>


            </ul>

        </div>
        @if(!Auth::user())
        <span class="flex flex-row space-x-5 ">
            <a href="{{ route('signin')}}" class="hover:text-blue-500 text-white italic font-bold">S'inscrire</a>
            <a href="{{ route('auth.login') }}"
                class="hover:text-blue-500 text-white italic font-bold">Se connecter</a>
        </span>
        @else
        <p class="text-white">je suis connecté</p>
        <a  href="{{ route('auth.logout')}}" class="px-6 py-3 rounded-full hover:bg-blue-400 bg-blue-500 text-white">logout</a>
        @endif
    </div>
    {{-- <div class="flex flex-row justify-end me-5">
        <div class="h-14 w-14 bg-blue-500 rounded-full flex items-center justify-center text-white mb-2">
            @auth
                {{ Illuminate\Support\Facades\Auth::user()->name }}
                <form action="{{ route('auth.logout') }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="">Se déconnecter</button>
                </form>
            @endauth
        </div>
    </div> --}}
</nav>
