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

<body class="bg-gray-100 overflow-x-hidden margin-auto h-screen">
    <!-- Header  -->
    <header class="bg-white">
        <div class="flex items-center w-full">
            <div class="flex justify-center">
                <div id="logo"
                    class="flex items-center border bg-customRed rounded-br-only sm:mr-4 md:mr-8 md:w-72 sm:w-40 md:h-20 sm:h-20 pl-5 pb-2 pr-7 pt-1 md:text-5xl sm:text-2xl">
                    <p class="font-itim md:text-5xl sm:text-2xl text-white">Meu Perfil</p>
                </div>
            </div>
            <div class="flex-grow justify-center">
                <nav id="navbar" class="hidden md:flex items-center space-x-8 gap-4 mx-10">
                    <a href="{{ url('/home')}}#home"
                        class="text-customBlue text-xl sm:text-2xl font-itim hover:text-purple-900 hover:pb-3">Meus
                        Dados</a>
                    <a href="{{ url('/teacher-profile-mural')}}#teacher-profile-mural"
                        class="text-customBlue text-xl sm:text-2xl font-itim hover:text-purple-900 hover:pb-3">Mural</a>
                    <a href="{{ url('/teacher-profile-list')}}#sponsors"
                        class="text-customBlue text-xl sm:text-2xl font-itim hover:text-purple-900 hover:pb-3">Chat</a>
                    <a href="{{ url('/grades')}}#sponsors"
                        class="block text-red-600 text-xl sm:text-2xl font-itim py-2 underline underline-offset-4 hover:text-purple-900">Notas</a>
                </nav>
            </div>
            <div class="flex justify-end w-1/3">
                <div id="mobile-nav" class="md:hidden flex justify-end">
                    <button id="mobile-menu-toggle" class="focus:outline-none">
                        <img class="h-10 w-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                    </button>
                </div>
                <div id="userAction" class="md:absolute top-0 right-0 flex items-center mt-6 space-x-2 mr-3">
                    <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900 md:block hidden">
                        <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden bg-white py-2 px-4">
            <a href="#" class="text-customBlue text-lg font-itim py-2 hover:text-purple-900">Meus Dados</a>
            <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Mural</a>
            <a href="{{ url('/teacher-profile-list')}}#sponsors"
                class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Chat</a>
            <a href="{{ url('/grades')}}#sponsors"
                class="block text-customRed text-lg font-itim py-2 hover:text-purple-900">Notas</a>
        </div>
    </header>
    <!-- End Header -->

    <!--Grades Atribution-->
    <div class="bg-gray-100">
        <div class="container mx-auto p-8 w-11/12 md:w-8/12 lg:w-6/12 xl:w-5/12">
            <h1 class="text-3xl font-bold text-center mb-8">Nome do Curso</h1>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <div class="w-full md:w-1/3">
                    <label for="matricula" class="block text-gray-700 font-bold mb-2">Nº da Matrícula</label>
                    <input type="text" id="matricula"
                        class="shadow appearance-none border border-customRed rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                </div>
                <div class="w-full md:w-1/3">
                    <label for="nome" class="block text-gray-700 font-bold mb-2">Nome do Aluno</label>
                    <input type="text" id="nome"
                        class="shadow appearance-none border border-customRed rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                </div>
                <div class="w-full md:w-1/3">
                    <label for="desempenho" class="block text-gray-700 font-bold mb-2">Desempenho</label>
                    <select id="desempenho"
                        class="shadow appearance-none border border-customRed rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Selecione</option>
                        <option value="Muito Bom">Muito Bom</option>
                        <option value="Bom">Bom</option>
                        <option value="Regular">Regular</option>
                        <option value="Irregular">Irregular</option>
                    </select>
                </div>
                <div class="w-full md:w-1/3">
                    <label for="nota" class="block text-gray-700 font-bold mb-2">Nota</label>
                    <select id="nota"
                        class="shadow appearance-none border border-customRed rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Selecione</option>
                        <option value="10">10</option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-4 mt-4 justify-center md:justify-end">
                <button
                    class="bg-customRed hover:bg-red-500 rounded-xl w-full md:w-20 h-10 text-white items-center">Enviar</button>
            </div>
        </div>
    </div>

    <div id="Divider" class="w-full h-1 bg-customRed "></div>

    <!--Search Bar-->
    <div class="flex flex-col items-center justify-center my-20">
        <div class="relative flex items-center bg-customRed rounded-lg w-11/12 md:w-3/6 mb-4">
            <div class="rounded-l-lg p-3 bg-customRed">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input type="text" placeholder="Search..."
                class="w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 text-gray-800 placeholder-gray-500" />
            <div class="absolute right-3 cursor-pointer">
                <img src="{{ asset('images/icons/tres-pontosp.png') }}" alt="" class="w-5 h-5 object-cover rounded-xl">
            </div>
        </div>
        <!-- END Search Bar-->
         
        <table class="text-sm text-left rtl:text-right text-black w-full md:w-8/12 overflow-x-auto">
            <thead class="text-xs text-white uppercase bg-customRed">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        N° Matrícula
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Desempenho
                    </th>
                    <th scope="col" class="px-2 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <th scope="row" class="px-4 py-4 font-medium text-black whitespace-nowrap">
                        Nome
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-2 py-4 text-right">
                        <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900">
                            <img src="{{ asset('images/icons/EditIcon.png') }}" alt="Logo" class="w-5 h-5">
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <th scope="row" class="px-4 py-4 font-medium text-black whitespace-nowrap">
                        Desempenho
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-2 py-4 text-right">
                        <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900">
                            <img src="{{ asset('images/icons/EditIcon.png') }}" alt="Logo" class="w-5 h-5">
                        </a>
                    </td>
                </tr>
                <tr class="bg-white hover:bg-gray-50">
                    <th scope="row" class="px-4 py-4 font-medium text-black whitespace-nowrap">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-2 py-4 text-center">
                        <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900">
                            <img src="{{ asset('images/icons/EditIcon.png') }}" alt="Logo" class="w-5 h-5">
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    </div>

    <footer class="w-full xl:mt-96">
    <img src="{{ asset('images/Finalback-Red.png') }}" alt="" class="w-full object-cover h-auto">
</footer>


    <!-- END Footer Image -->

</body>
</html>