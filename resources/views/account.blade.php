<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
        <script src=" {{ asset('js/script.js') }} "></script>

        @vite('resources/css/app.css')

</head>
    <body class="bg-gray-100 overflow-x-hidden">
        <header class="bg-white  ">
            <div class="flex items-center justify-between ">
                <div id="logo" class="flex items-center border p-5 bg-customRed rounded-br-only">
                    <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
                </div>

                <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                    <a href="{{ url('/')}}" class="text-customBlue  text-2xl font-itim hover:text-customRed hover:underline hover:pb-3 ">Home</a>
                    <a href="#" class="text-customRed  text-2xl font-itim hover:text-customRed hover:underline hover:pb-3 ">Meus Dados</a>
                    <a href="#" class="text-customBlue  text-2xl font-itim hover:text-customRed hover:underline hover:pb-3 ">Cursos</a>
                    <a href="{{ url('/donates') }}" class="text-customBlue text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Doações</a>


                </nav>

                <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                    <a href="#" class="text-gray-600 hover:text-customRed ">
                        <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                    </a>
                </div>

                <div id="mobile-nav" class="md:hidden mr-5 ">
                    <button id="mobile-menu-toggle" class="focus:outline-none">
                        <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                    </button>
                </div>

            </div>


            <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
                <a href="#" class="block text-customRed  text-lg font-itim py-2 hover:text-customRed">Meus Dados</a>
                <a href="#" class="block text-customBlue  text-lg font-itim py-2 hover:text-customRed ">Cursos</a>
                <a href="{{ url('/')}}" class="block text-customBlue text-lg font-itim py-2  hover:text-customRed">Home</a>
                <a href="{{ url('/donates') }}#doacao" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Doações</a>

            </div>
        </header>

        <div class="h-full bg-gray-100 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div x-data="{ openSettings: false }" class="absolute right-12 mt-4 rounded">
            <button @click="openSettings = !openSettings" class="border border-gray-400 p-2 rounded text-gray-300 hover:text-gray-300 bg-gray-100 bg-opacity-10 hover:bg-opacity-20" title="Settings">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                    </svg>
                </button>
                <div x-show="openSettings" @click.away="openSettings = false" class="bg-white absolute right-0 w-40 py-2 mt-1 border border-gray-200 shadow-2xl" style="display: none;">
                    <div class="py-2 border-b">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Opções</p>
                        <button class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M4 20h4.586a1 1 0 00.707-.293l9.414-9.414a1 1 0 00-1.414-1.414L8 18.293A1 1 0 007.293 19H4a1 1 0 01-1-1v-3.586a1 1 0 01.293-.707l9.414-9.414a1 1 0 011.414 1.414L5.414 15.586A1 1 0 005 16v4z"/>
                            </svg>
                            <span class="text-sm text-gray-700">Editar Perfil</span>
                        </button>

                    </div>
                    <div class="py-2">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Conta</p>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M13 5l7 7l-7 7" />
                            <path d="M5 12h14" />
                        </svg>
                            <span class="text-sm text-gray-700">Sair</span>
                        </button>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-log-out" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M11 5l-7 7l7 7" />
                            <path d="M19 12h-14" />
                        </svg>

                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg" class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col ml-20 -mt-20">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile.jpg" class="w-40 border-4 border-white rounded-full">
                <div class="flex items-start space-x-2 mt-2">
                    <p class="text-2xl">Livia</p>

                </div>
                <p class="text-xl">Emailpadrao@gmail.com</p>
                <p class=" text-xl">11 912345-6789</p>
            </div>
        </div>

        <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/150" alt="Imagem 1" class="mb-2">
                <button onclick="toggleText('text1')" class="mb-4 px-16 border border-black">
                    <img src="https://via.placeholder.com/20x20?text=%E2%96%BC" alt="Seta para baixo">
                </button>
                <div id="text1" class="hidden">
                    <p>Texto adicional exibido ao clicar no botão.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/150" alt="Imagem 2" class="mb-2">
                <button onclick="toggleText('text2')" class="mb-4 px-16 border border-black">
                    <img src="https://via.placeholder.com/20x20?text=%E2%96%BC" alt="Seta para baixo">
                </button>
                <div id="text2" class="hidden">
                    <p>Texto adicional exibido ao clicar no botão.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/150" alt="Imagem 3" class="mb-2">
                <button onclick="toggleText('text3')" class="mb-4 px-16 border border-black  ">
                    <img src="https://via.placeholder.com/20x20?text=%E2%96%BC" alt="Seta para baixo">
                </button>
                <div id="text3" class="hidden">
                    <p>Texto adicional exibido ao clicar no botão.</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/150" alt="Imagem 4" class="mb-2">
                <button onclick="toggleText('text4')" class="mb-4 px-16 border border-black">
                    <img src="https://via.placeholder.com/20x20?text=%E2%96%BC" alt="Seta para baixo">
                </button>
                <div id="text4" class="hidden">
                    <p>Texto adicional exibido ao clicar no botão.</p>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>


    </body>
</html>

