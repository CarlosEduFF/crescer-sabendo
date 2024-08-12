<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 overflow-x-hidden margin-auto">
    <!-- Header  -->
    <header class="bg-white w-full">
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div id="logo" class="flex items-center border bg-customRed rounded-br-only pl-5 pr-7 pt-1 pb-2">
            <p class="font-itim text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl">Meu Perfil</p>
        </div>

        <!-- Navbar -->
        <nav id="navbar" class="hidden md:flex items-center space-x-6 mx-4">
            <a href="{{ url('/teacher-profile')}}" 
               class="text-customBlue text-xl lg:text-2xl font-itim hover:text-purple-900  hover:pb-3">
               Meus Dados
            </a>
            <a href="{{ url('/teacher-profile-mural')}}#teacher-profile-mural" 
               class="text-customBlue text-xl lg:text-2xl font-itim hover:text-purple-900 hover:pb-3">
               Mural
            </a>
            <a href="{{ url('/teacher-profile-list')}}#sponsors" 
               class="text-red-600 text-xl lg:text-2xl font-itim underline underline-offset-4 hover:text-purple-900 hover:pb-3">
               Chat
            </a>
            <a href="{{ url('/grades')}}#sponsors" 
               class="text-customBlue text-xl lg:text-2xl font-itim hover:text-purple-900 hover:pb-3">
               Notas
            </a>
        </nav>

        <!-- User Action / Mobile Menu Toggle -->
        <div class="flex items-center space-x-4">
            <!-- Mobile Menu Toggle -->
            <div id="mobile-nav" class="md:hidden flex items-center">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10 w-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>
            <!-- User Icon -->
            <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900 hidden md:block">
                <img id="userImg" class="h-10 mr-5" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
            </a>
        </div>
    </div>

    <div id="mobile-menu" class="hidden bg-white py-2 px-4">
        <a href="{{ url('/teacher-profile')}}" 
           class="text-customBlue text-lg font-itim py-2 hover:text-purple-900">
           Meus Dados
        </a>
        <a href="#aboutus" 
           class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">
           Mural
        </a>
        <a href="{{ url('/teacher-profile-list')}}#sponsors" 
           class="block text-customRed text-lg font-itim py-2 hover:text-purple-900">
           Chat
        </a>
        <a href="{{ url('/grades')}}#sponsors" 
           class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">
           Notas
        </a>
    </div>
</header>

    <!-- End Header -->

    <!-- Search -->
    <div class="bg-red-400 p-4">
        <div class="flex  sm:flex-row items-center justify-between gap-4">
            <!-- Header Section -->
            <div class="flex items-center">
                <h1 class="text-black font-bold text-lg sm:text-xl">CHAT</h1>
                <img src="{{ asset('images/icons/ChatIcon.png') }}" alt="Chat Icon" class="w-5 h-5 sm:w-8 sm:h-8 ml-2">
            </div>
            <!-- Search Input -->
            <input type="text" placeholder="Pesquisar"
                class="border border-black rounded-full px-4 py-2 focus:outline-none focus:ring-2 w-52 sm:w-96">
            <!-- Edit Icon Link -->
            <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900">
                <img src="{{ asset('images/icons/EditIcon.png') }}" alt="Edit Icon" class="w-7 h-7 sm:w-8 sm:h-8">
            </a>
        </div>
    </div>
    <!-- END Search -->



    <div class="container ">
        <div class="flex flex-col md:flex-row h-auto w-screen">
            <!-- Sidebar -->
            <div id="1-contact-list" class=" bg-purple-100 p-4 w-full sm:w-2/4 flex flex-col items-center">
                <p class="font-itim text-4xl text center my-10">Lista de Contatos</p>

                <a href="{{ url('/teacher-profile-chat')}}#sponsors" class="block mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="border-2 rounded-full border-black w-9 h-9 flex items-center justify-center">
                                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                    class="rounded-full w-8 h-8 object-cover">
                            </div>
                        </div>
                        <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                    </div>
                </a>

                <a href="{{ url('/teacher-profile-chat')}}#sponsors" class="block mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="border-2 rounded-full border-black w-9 h-9 flex items-center justify-center">
                                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                    class="rounded-full w-8 h-8 object-cover">
                            </div>
                        </div>
                        <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                    </div>
                </a>


                <a href="{{ url('/teacher-profile-chat')}}#sponsors" class="block mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="border-2 rounded-full border-black w-9 h-9 flex items-center justify-center">
                                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                    class="rounded-full w-8 h-8 object-cover">
                            </div>
                        </div>
                        <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                    </div>
                </a>
                <a href="{{ url('/teacher-profile-chat')}}#sponsors" class="block mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="border-2 rounded-full border-black w-9 h-9 flex items-center justify-center">
                                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                    class="rounded-full w-8 h-8 object-cover">
                            </div>
                        </div>
                        <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                    </div>
                </a>
                <a href="{{ url('/teacher-profile-chat')}}#sponsors" class="block mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="border-2 rounded-full border-black w-9 h-9 flex items-center justify-center">
                                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                    class="rounded-full w-8 h-8 object-cover">
                            </div>
                        </div>
                        <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                    </div>
                </a>
                <a href="{{ url('/teacher-profile-chat')}}#sponsors" class="block mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="border-2 rounded-full border-black w-9 h-9 flex items-center justify-center">
                                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                    class="rounded-full w-8 h-8 object-cover">
                            </div>
                        </div>
                        <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                    </div>
                </a>
                <a href="{{ url('/teacher-profile-chat')}}#sponsors" class="block mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="border-2 rounded-full border-black w-9 h-9 flex items-center justify-center">
                                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                    class="rounded-full w-8 h-8 object-cover">
                            </div>
                        </div>
                        <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                    </div>
                </a>
                <a href="{{ url('/teacher-profile-chat')}}#sponsors" class="block mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="border-2 rounded-full border-black w-9 h-9 flex items-center justify-center">
                                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                    class="rounded-full w-8 h-8 object-cover">
                            </div>
                        </div>
                        <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                    </div>
                </a>
                <a href="{{ url('/teacher-profile-chat')}}#sponsors" class="block mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="border-2 rounded-full border-black w-9 h-9 flex items-center justify-center">
                                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                    class="rounded-full w-8 h-8 object-cover">
                            </div>
                        </div>
                        <span class="text-gray-700 font-medium">Nome XXXXXXXX</span>
                    </div>
                </a>
            </div>
            <div id="2-click" class="bg-red-200 w-screen h-screen sm:flex sm:justify-center sm:items-center hidden ">
                    <p class="font-itim text-4xl text-gray-100 text-center">Clique em qualquer contato para conversar
                </div>
            </div>




    </div>
</body>

</html>