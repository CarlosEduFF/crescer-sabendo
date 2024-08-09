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
    <header class="bg-white">
        <div class="flex items-center w-full">
            <div class="flex justify-start w-1/3">
                <div id="logo"
                    class="flex items-center border bg-customRed rounded-br-only sm:mr-4 md:mr-8 md:w-72 sm:w-40 md:h-20 sm:h-20 pl-5 pb-2 pr-7 pt-1 md:text-5xl sm:text-2xl">
                    <p class=" font-itim md:text-5xl sm:text-2xl text-white">Meu Perfil</p>
                </div>
            </div>
            <div class="flex-grow justify-center">
                <nav id="navbar" class="hidden md:flex items-center space-x-8 gap-4 mx-10">
                    <a href="{{ url('/home')}}#home"
                        class="text-red-600 text-2xl font-itim hover:text-purple-900 underline underline-offset-4 hover:pb-3">Meus
                        Dados</a>
                    <a href="{{ url('/teacher-profile-mural')}}#teacher-profile-mural"
                        class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:pb-3">Mural</a>
                    <a href="{{ url('/teacher-profile-chat')}}#sponsors"
                        class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:pb-3">Chat</a>
                </nav>
            </div>
            <div class="flex justify-end w-1/3">
                <div id="mobile-nav" class="md:hidden flex justify-end">
                    <button id="mobile-menu-toggle" class="focus:outline-none">
                        <img class=" h-10 w-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                    </button>
                </div>
                <div id="userAction" class="md:absolute top-0 right-0 flex items-center mt-6 space-x-2 mr-3">
                    <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900 md:block hidden">
                        <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div id="mobile-menu" class="hidden bg-white py-2 px-4">
        <a href="#" class="text-customRed text-lg font-itim py-2 hover:text-purple-900">Meus Dados</a>
        <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Mural</a>
        <a href="{{ url('/teacher-profile-chat')}}#sponsors"
            class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Chat</a>
    </div>
    </header>
    <!-- End Header -->

    <!--Home Profile-->
    <div id="ProfileImage" class="relative w-screen h-52 mb-4 md:mb-10">
        <div class="relative inset-0 bg-customBrown w-full h-52 md:h-40 lg:h-52 sm:h-32">
            <!-- diminui a altura em telas menores -->
            <div class="absolute bottom-4 sm:right-4 mx-10 right-2">
                <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900">
                    <img src="{{ asset('images/icons/EditIcon.png') }}" alt="Logo" class="w-10 h-10 sm:w-6 sm:h-6">
                </a>
            </div>
        </div>
        <div id="ProfileIcon" class="z-10 absolute bottom-0 left-0 translate-y-1/2 md:mx-12 mx-4 my-3">
            <div
                class="border-2 border-black rounded-full w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 xl:w-56 xl:h-56 flex justify-center items-center">
                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                    class="rounded-full w-20 h-20 sm:w-28 sm:h-28 md:w-36 md:h-36 lg:w-44 lg:h-44 xl:w-52 xl:h-52 object-cover">
            </div>
        </div>
    </div>
    <!-- END Home Profile-->

    <!--Divider Menu-->
    <div class="my-6  w-11/12 flex justify-between items-center relative">
        <div class="flex-1 flex justify-center">
            <p class="font-itim font-bold sm:text-4xl">Nome do Professor</p>
        </div>
        <div class=" flex mx-5">
            <button onclick="iniciarJavaScript()" data-modal-target="authentication-modal"
                data-modal-toggle="authentication-modal"
                class="block text-white bg-transparent hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 active:bg-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                <img src="{{ asset('images/icons/tres-pontos.png') }}" alt="Logo" class="md:w-10 md:h-10 sm:w-8 sm:h-8">
            </button>
        </div>
    </div>
    <div class="flex justify-center">
        <div id="Divider" class="w-11/12 h-1 bg-gray-400 "></div>
    </div>
    <!--END Divider Menu-->

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-8 md:w-8/12 sm:10-12 max-h-full mx-auto">
            <!-- Modal content -->
            <div class="relative bg-customBrown rounded-4xl shadow ">
                <!-- Modal header -->
                <div class="flex flex-col items-center justify-center p-4 md:p-5 rounded-t">
                    <h3 class="text-3xl font-bold text-black ">
                        Seus Dados
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-blue-300 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="authentication-modal">
                        <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-8 md:p-10">
                    <form class="" action="#">
                        <div class="mb-1 flex flex-col justify-start">
                            <label for="codigoL" class="block mb-0.5 text-lg font-medium text-black">Código</label>
                            <label class="block text-lg font-medium text-black">XXXXXX</label>
                        </div>
                        <div class="mb-4">
                            <label for="Nome" class="block mb-1 text-lg font-medium text-black">Nome</label>
                            <input type="text" name="Nome" id="Nm"
                                class="bg-white border border-gray-500 text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="EmailL" class="block mb-1 text-lg font-medium text-black">Email</label>
                            <input type="email" name="Email" id="emil"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5 "
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="TelefoneL" class="block mb-1 text-lg font-medium text-black">Telefone</label>
                            <input type="text" name="Telefone" id="tel"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5 "
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="formaçãoL" class="block mb-1 text-lg font-medium text-black">Formação</label>
                            <input type="text" name="formação" id="formç"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5 "
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="DTNL" class="block mb-1 text-lg font-medium text-black">Data de
                                Nascimento</label>
                            <input type="text" name="date" id="nasc"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5 "
                                required />
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-customRed hover:bg-customRedDark focus:ring-4 focus:outline-none focus:ring-customRedDark font-medium rounded-lg text-lg px-5 py-2.5 text-center">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--END Main modal -->

    <!--Data teacher-->
    <div class="w-full h-96 shadow-sm flex justify-center items-center my-14">
        <div id="gridCourses"
            class="my-20 bg-customBrown md:w-8/12 w-full rounded-4xl p-10 flex flex-wrap justify-between">
            <div class="w-full md:w-1/2">
                <p class="font-itim text-2xl font-bold h-20 ">Nome</p>
                <p class="font-itim text-2xl font-bold h-20">Email</p>
                <p class="font-itim text-2xl font-bold h-20">Idade</p>
            </div>
            <div class="w-full md:w-1/2">
                <p class="font-itim text-2xl font-bold h-20">Telefone</p>
                <p class="font-itim text-2xl font-bold h-20">Formação</p>
            </div>
        </div>
    </div>
    <!--End Data teacher-->

    <!--My Courses-->
    <div class="flex flex-wrap justify-between mx-5">
        <div id="Pt1" class=" w-10/12 md:w-7/12 border-2 border-black rounded-4xl mx-7 md:mx-14 my-10">
            <div class="my-5 mx-10 max-w-full flex justify-between">
                <p class="font-itim text-black text-2xl">Meus Cursos</p>
                <a class="font-itim underline underline-offset-2 text-lg">Ver todos</a>
            </div>
            <div id="gridCourses" class="grid grid-cols-1 md:grid-cols-3 my-8">
                <!--Content-->
                <div class="flex items-center justify-center gap-4 my-10">
                    <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-40 h-26 ">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-40 h-26 ">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-40 h-26 ">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-40 h-26 ">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-40 h-26 ">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-40 h-26 ">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-40 h-26 ">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-40 h-26 ">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-10">
                    <div class="border-2 rounded-xl border-Black w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-40 h-26 ">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END My Courses-->

        <!-- ONGS NAMES -->
        <div id="Pt2" class="w-10/12 md:w-3/12 border-2 border-black rounded-4xl mx-7 md:mx-14 my-10">
            <div class="my-5 mx-10 max-w-full flex justify-center">
                <p class="font-itim text-black text-4xl">Ongs</p>
            </div>
            <div id="gridCourses" class="flex flex-wrap justify-center my-8">

                <!--content-->
                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>

                <label class="relative  mr-4 mb-4 flex items-center">
                    <span class="mr-2">
                        <div class=" border-2 rounded-full border-black w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class=" rounded-full w-10 h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-lg">Nome XXXXXXXXXXXXXXXXXXX</p>
                </label>
            </div>
        </div>
    </div>
    <!-- END ONGS NAMES -->

    <!-- Teacher Footer Image -->
    <footer>
        <div class="max-w-full max-h-20">
            <!-- Image -->
            <img src="{{ asset('images/Finalback-Red.png') }}" alt=""
                class="relative inset-0 w-full h-full object-fit ">
        </div>
    </footer>
    <!-- END Teacher Footer Image -->
</body>

</html>