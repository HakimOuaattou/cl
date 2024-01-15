<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre de langue - Université Sultan Moulay Slimane</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/input.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'infinite-scroll': 'infinite-scroll 25s linear infinite',
                    },
                    keyframes: {
                        'infinite-scroll': {
                            from: { transform: 'translateX(0)' },
                            to: { transform: 'translateX(-100%)' },
                        }
                    }                    
                },
            },
        };
    </script>
</head>
<body class="">
    <div class="bg-white relative">
        <header class="">
            <div class="bg-[#1088BC]">
                <div class="max-w-8xl mx-auto h-10 px-4 flex items-center justify-between sm:px-6 lg:px-8">
                    <div class="flex space-x-2 md:order-2">
                        <a href="#" class="text-white p-1 rounded-sm hover:bg-white hover:text-[#1088BC]">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#" class="text-white p-1 rounded-sm hover:bg-white hover:text-[#1088BC]">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#" class="text-white p-1 rounded-sm hover:bg-white hover:text-[#1088BC]">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </div>
        
                    <div class="flex items-center space-x-6">
                        <a href="#" class="flex items-center gap-2 text-sm font-normal text-[#1088BC]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  class="bg-white p-1 rounded-full w-5 h-5">
                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                            </svg>
                            <span class="hidden sm:block text-white">+212523480218</span>
                        </a>
                        <a href="#" class="flex items-center gap-2 text-sm font-normal text-[#1088BC]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  class="bg-white p-1 rounded-full w-5 h-5">
                                <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>
                            <span class="hidden sm:block text-white">contact@usms.ma</span>
                        </a>                        
                    </div>
                </div>
              </div>
            </div>
            <div class="relative bg-white">
                <div class="flex justify-between items-center max-w-8xl mx-auto px-4 py-10 sm:px-6  md:space-x-10 lg:px-8">
                    <div class="flex justify-start items-center -mt-3">
                        <a href="/">
                            <img class="h-10 w-auto sm:h-14" src="/images/logo.png" alt="">
                        </a>
                    </div>

                    <nav class="hidden lg:flex items-center space-x-4 lg:space-x-10">
                        <a href="/" class="text-base font-medium text-gray-500 hover:text-[#F5A52C] py-2 border-b-2 border-transparent hover:border-[#F5A52C] uppercase"> Accueil </a>
                        <a href="/apropos" class="text-base font-medium text-gray-500 hover:text-[#F5A52C] py-2 border-b-2 border-transparent hover:border-[#F5A52C] uppercase"> à propos </a>
                        <a href="{{url('/')}}/#missions" class="text-base font-medium text-gray-500 hover:text-[#F5A52C] py-2 border-b-2 border-transparent hover:border-[#F5A52C] uppercase"> Missions </a>
                        <a href="{{url('/')}}/#contact" class="text-base font-medium text-gray-500 hover:text-[#F5A52C] py-2 border-b-2 border-transparent hover:border-[#F5A52C] uppercase"> Contactez nous </a>
                        <a href="/inscription" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-8 py-2 border border-[#1088BC] rounded-sm shadow-sm text-base font-medium text-[#1088BC] hover:text-white hover:bg-[#1088BC] duration-300"> Inscris-toi </a>
                    </nav>

                    <button onclick="openModalMenu()" class="flex lg:hidden items-center gap-2 hover:underline pb-2  text-sm text-gray-700 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                          </svg>                                                    
                    </button>

                    <div class="flex items-center justify-center -mt-1">
                        <img src="/images/logo_usms.png" class="h-8 w-auto sm:h-14" alt="">
                    </div>
                </div>

            </div>
            <!-- Modal Manu -->
            <div id="modalMenu" class="hidden fixed z-20 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class=" relative flex items-center justify-center min-h-screen pt-4 px-4 text-center sm:block sm:p-0 ">
                    <div class="fixed inset-0 bg-black bg-opacity-90 transition-opacity" aria-hidden="true">
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div class="absolute top-6 right-6 pt-4 pr-4">
                            <button onclick="closeModalMenu()" type="button" class="text-white">
                                <svg class="h-10 w-10 font-bold" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="inline-block align-middle  px-4 pb-4 pt-32 overflow-hidden transform transition-all">
                            <ul class="flex flex-col items-center justify-center gap-14">
                                <li>
                                    <a href="/" class="text-4xl text-white font-bold hover:underline">Accueil</a>
                                </li>

                                <li>
                                    <a href="/apropos" class="text-4xl text-white font-bold hover:underline">à propos</a>
                                </li>

                                <li>
                                    <a href="{{url('/')}}/#missions" class="text-4xl text-white font-bold hover:underline">Missions</a>
                                </li>

                                <li>
                                    <a href="{{url('/')}}/#contact" class="text-4xl text-white font-bold hover:underline">Contactez nous</a>
                                </li>

                                <li>
                                    <a href="/inscription" class="whitespace-nowrap inline-flex items-center justify-center px-8 py-2 bg-[#1088BC] hover:opacity-80 rounded-sm shadow-sm text-base font-medium text-white"> Inscris-toi </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class=" ">
            <!-- Hero section -->
            <section class="relative">
                <div class="absolute inset-x-0 bottom-0"></div>
                <div class="min-h-[550px] max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="relative shadow-xl rounded-2xl sm:overflow-hidden">
                        <div class="absolute w-full">
                            <section class="max-w-8xl relative mx-auto py-0 ">
                                <div class="mySlider hidden fade space-y-10 md:space-y-0 overflow-hidden">
                                    <!-- left -->
                                    <div class="md:col-span-3 flex">
                                        <div class="w-full relative h-[550px] rounded-lg shadow-2xl bg-black">
                                            <img class="w-full h-full img overflow-hidden rounded-lg object-cover" src="/images/hero1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mySlider hidden fade space-y-10 md:space-y-0 overflow-hidden">
                                    <!-- left -->
                                    <div class="md:col-span-3 flex">
                                        <div class="w-full relative h-[550px] rounded-lg shadow-2xl bg-black">
                                            <img class="w-full h-full img overflow-hidden rounded-lg object-cover" src="/images/hero2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mySlider hidden fade space-y-10 md:space-y-0 overflow-hidden">
                                    <!-- left -->
                                    <div class="md:col-span-3 flex">
                                        <div class="w-full relative h-[550px] rounded-lg shadow-2xl bg-black">
                                            <img class="w-full h-full img overflow-hidden rounded-lg object-cover" src="/images/hero3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- dots -->
                                <div class="absolute z-10 top-48">
                                    <div class="grid grid-rows-4 gap-4 p-2 place-items-center">
                                        <div class="index w-2 py-3 text-xs flex items-center border justify-center  border-[#F5A52C]" onclick="currentSlide(1)"></div>
                                        <div class="index w-2 py-3 text-xs flex items-center border justify-center  border-[#F5A52C]" onclick="currentSlide(2)"></div>
                                        <div class="index w-2 py-3 text-xs flex items-center border justify-center  border-[#F5A52C]" onclick="currentSlide(3)"></div>
                                    </div>
                                </div>
                            </section>
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-400 to-gray-500 mix-blend-multiply rounded-sm"></div>
                        </div>
                        <div class="flex flex-col items-center justify-center relative sm:px-6 py-32 lg:px-8">
                            <h1 class="text-center mb-6">
                                <span class="text-3xl font-bold tracking-tight sm:text-5xl lg:text-6xl text-white bg-[#1088BC] py-2 px-4 rounded-lg">Centre de langue</span>
                            </h1>

                            <span class="text-center text-md sm:text-2xl font-medium tracking-tight block text-white">Université sultan moulay slimane</span>

                            <p class="mt-6 mb-10 max-w-lg mx-auto text-center text-sm sm:text-xl text-white sm:max-w-3xl">Explorez le monde avec nous, apprenez une nouvelle langue aujourd'hui !</p>
                            
                            <a href="/inscription" class="px-6 py-3 border border-transparent text-base font-medium rounded-sm shadow-sm text-white bg-[#F5A52C] hover:bg-opacity-90"> Inscris-toi </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Logo Cloud -->
            <section class="max-w-7xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:px-8">
                <div class="relative font-inter antialiased">
                    <div class="relative flex flex-col justify-center overflow-hidden">
                        <div class="w-full max-w-7xl mx-auto px-4 md:px-6">
                            <div class="text-center">
                                <div
                                    x-data="{}"
                                    x-init="$nextTick(() => {
                                        let ul = $refs.logos;
                                        ul.insertAdjacentHTML('afterend', ul.outerHTML);
                                        ul.nextSibling.setAttribute('aria-hidden', 'true');
                                    })"
                                    class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]"
                                >
                                    <ul x-ref="logos" class="flex items-center justify-center md:justify-start [&_li]:mx-4 [&_img]:max-w-none animate-infinite-scroll">
                                        <li class="flex flex-col items-center justify-center gap-4 bg-gray-50 py-3 px-10 rounded-md border border-gray-200 hover:shadow-xl">
                                            <img class="h-10 w-10 rounded-full" src="/images/langues/arabe.png" alt="arabe flag">
                                            <span class="font-bold text-gray-700">Arabe</span>
                                        </li>
                    
                                        <li class="flex flex-col items-center justify-center gap-4 bg-gray-50 py-3 px-10 rounded-md border border-gray-200 hover:shadow-xl">
                                            <img class="h-10 w-10 rounded-full" src="/images/langues/italy.png" alt="italy flag">
                                            <span class="font-bold text-gray-700">Italien</span>
                                        </li>
                    
                                        <li class="flex flex-col items-center justify-center gap-4 bg-gray-50 py-3 px-10 rounded-md border border-gray-200 hover:shadow-xl">
                                            <img class="h-10 w-10 rounded-full" src="/images/langues/france.png" alt="france flag">
                                            <span class="font-bold text-gray-700">Français</span>
                                        </li>
                    
                                        <li class="flex flex-col items-center justify-center gap-4 bg-gray-50 py-3 px-10 rounded-md border border-gray-200 hover:shadow-xl">
                                            <img class="h-10 w-10 rounded-full" src="/images/langues/germany.png" alt="germany flag">
                                            <span class="font-bold text-gray-700">Allemand</span>
                                        </li>
                    
                                        <li class="flex flex-col items-center justify-center gap-4 bg-gray-50 py-3 px-10 rounded-md border border-gray-200 hover:shadow-xl">
                                            <img class="h-10 w-10 rounded-full" src="/images/langues/spain.png" alt="spain flag">
                                            <span class="font-bold text-gray-700">Espagnol</span>
                                        </li>
                    
                                        <li class="flex flex-col items-center justify-center gap-4 bg-gray-50 py-2 px-10 rounded-md border border-gray-200 hover:shadow-xl">
                                            <img class="h-12 w-12 rounded-full" src="/images/langues/china.png" alt="china flag">
                                            <span class="font-bold text-gray-700">Chinoise</span>
                                        </li>
                    
                                        <li class="flex flex-col items-center justify-center gap-4 bg-gray-50 py-3 px-10 rounded-md border border-gray-200 hover:shadow-xl">
                                            <img class="h-10 w-10 rounded-full" src="/images/langues/uk.png" alt="china flag">
                                            <span class="font-bold text-gray-700">Anglais</span>
                                        </li>
                                    </ul>                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Content -->
            <section class="pb-16 bg-gradient-to-r from-cyan-500 to-cyan-700 lg:pb-0 lg:relative">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
                    <div class="relative lg:-my-8">
                        <div class="mx-auto max-w-md p-4 pt-16 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                            <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full border border-gray-200">
                                <img class="object-cover lg:h-full lg:w-full" src="/images/image1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                            <blockquote>
                                <div>
                                    <h2 class="text-4xl font-extrabold text-white">UNE PRATIQUE VIVANTE <br> DES LANGUES</h2>

                                    <p class="mt-6 text-md font-normal text-white tracking-wider">Les professeurs de langue au centre guide les apprenants du groupe tout au long du cours pour une assimilation à travers la pratique dynamique et orale de la langue. Son objectif : vous faire progresser grâce à votre curiosité et vos échanges avec le groupe. Les groupes de niveaux sont primordiaux au centre car c'est l'envie de communiquer tous ensemble qui vous fera progresser !</p>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Missions -->
            <section id="missions" class="bg-gray-50">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                    <h2 class="mt-6 text-center text-3xl font-semibold uppercase text-[#F5A52C] tracking-wide">MISSIONS DU CENTRE</h2>

                    <div class="grid grid-cols-1 gap-4 sm:gap-8 mt-8 lg:mt-16 md:grid-cols-2 xl:grid-cols-3">
                        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-3 shadow-sm flex items-start space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                            <p class="text-sm text-gray-500">
                                Garantir l'harmonisation des formations, des ressources et des contenus en langues.
                            </p>
                        </div>

                        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-3 shadow-sm flex items-start space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                            <p class="text-sm text-gray-500">
                                Uniformiser les méthodologies et les approches didactiques en matière d'enseignement des langues.
                            </p>
                        </div>

                        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-3 shadow-sm flex items-start space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                            <p class="text-sm text-gray-500">
                                Préparer à la certification en langues étrangères (français, anglais, espagnol …).
                            </p>
                        </div>
                        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-3 shadow-sm flex items-start space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                            <p class="text-sm text-gray-500">
                                Elaborer et organiser des programmes de formations continues des enseignants.
                            </p>
                        </div>

                        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-3 shadow-sm flex items-start space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                            <p class="text-sm text-gray-500">
                                Prospecter et explorer les applications numériques et les solutions didactisées nécessaires à l'enseignement des langues dans les différentes étapes (test diagnostic, cours en présentiel et à distance, évaluations …)
                            </p>
                        </div>

                        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-3 shadow-sm flex items-start space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                            <p class="text-sm text-gray-500">
                                Elaborer des supports pédagogiques et des contenus didactiques.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="bg-white">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                    <div class="">
                        <section class="bg-white">
                            <div class="container px-6 py-12 mx-auto">
                                <div class="text-center">
                                    <p class="font-medium text-[#F5A52C]">Contactez-nous</p>

                                    <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl">Entrer en contact</h1>

                                    <p class="mt-3 text-gray-500">Notre équipe est toujours là pour discuter.</p>
                                </div>

                                <div class="grid grid-cols-1 gap-12 mt-10 sm:grid-cols-10">
                                    <div class="col-span-3 flex flex-col items-center justify-center text-center">
                                        <span class="p-3 text-[#F5A52C] rounded-full bg-yellow-100/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                            </svg>
                                        </span>

                                        <h2 class="mt-4 text-lg font-medium text-gray-800">Email</h2>
                                        <p class="text-sm text-gray-500">Lundi-Vendredi de 8:30am à 16:30pm.</p>
                                        <p class="mt-2 text-sm text-[#1088BC]">contact@usms.ma</p>
                                    </div>

                                    <div class="col-span-3 sm:col-span-4 flex flex-col items-center justify-center text-center">
                                        <span class="p-3 text-[#F5A52C] rounded-full bg-yellow-100/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                        </span>
                                        
                                        <h2 class="mt-4 text-lg font-medium text-gray-800">Adresse</h2>
                                        <p class="text-sm text-gray-500">Centre de langue</p>
                                        <p class="mt-2 text-sm text-[#1088BC]">Centre Universitaire Mghila Beni Mellal 8 23000 Maroc</p>
                                    </div>

                                    <div class="col-span-3 flex flex-col items-center justify-center text-center">
                                        <span class="p-3 text-[#F5A52C] rounded-full bg-yellow-100/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                            </svg>
                                        </span>
                                        
                                        <h2 class="mt-4 text-lg font-medium text-gray-800">Phone</h2>
                                        <p class="text-sm text-gray-500">Lundi-Vendredi de 8:30am à 16:30pm.</p>
                                        <p class="mt-2 text-sm text-[#1088BC]">(+212) 523480218</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="overflow-hidden rounded-lg h-96">
                            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;q=pr%C3%A9sidence%20benimellal+(Centre%20Code%20212)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-gray-50 border-t border-gray-200">
            <div class="mx-auto max-w-7xl px-4 sm:px-8 pt-12 ">
                <!-- Footer Columns -->
                <div class="grid grid-cols-10 font-normal text-sm text-gray-500 flex flex-col lg:flex-row space-y-8 lg:space-y-2 lg:items-start lg:justify-between lg:space-x-4 lg:pr-5">
    
                    <div class="col-span-12 xs:col-span-4 sm:col-span-4">
                        <a href="/" class="flex items-center gap-2">
                            <img src="/images/logo.png" class="h-14">
                        </a>
                        <p class="mt-5 text-md font-extrabold text-gray-800 opacity-90 whitespace-nowrap tracking-wide">E-langue</p>
                        <p class="mt-1 font-normal whitespace-nowrap">Centre de langue<br> Univerité Sultan Moulay Slimane <br>Campus Mghila - Béni Mellal 8 23000 Maroc</p>
                    </div>
    
                    <div class="col-span-12 xs:col-span-2 sm:col-span-2 flex flex-col space-y-2">
                        <p class="font-bold text-md mb-4 text-gray-800 uppercase tracking-wide">LIENS</p>
    
                        <a class="block hover:text-gray-700 flex items-canter gap-1" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F5A52C" class="w-4 h-4 pt-0.5">
                                <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>
                            <span>Accueil</span>
                        </a>
                        <a class="block hover:text-gray-700 flex items-canter gap-1" href="/apropos">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F5A52C" class="w-4 h-4 pt-0.5">
                                <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>
                            <span>À propos de nous</span>
                        </a>
                        <a class="block hover:text-gray-700 flex items-canter gap-1" href="/#missions">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F5A52C" class="w-4 h-4 pt-0.5">
                                <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>
                            <span>Missions</span>
                        </a>
                        <a class="block hover:text-gray-700 flex items-canter gap-1" href="/#contact">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F5A52C" class="w-4 h-4 pt-0.5">
                                <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>
                            <span>Contactez-nous</span>
                        </a>
                    </div>
    
                    <div class="col-span-12 xs:col-span-2 sm:col-span-2 flex flex-col space-y-2">
                        <p class="font-bold text-md mb-4 text-gray-800 uppercase tracking-wide">CONTACTEZ-NOUS</p>
    
                        <a class="block hover:text-gray-700 flex items-canter gap-1" href="https://twitter.com/domain_io" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F5A52C"  class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span class="">Tél : +212523480218</span>
                        </a>
    
                        <a class="block hover:text-gray-700 flex items-canter gap-1" href="https://twitter.com/domain_io" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F5A52C"  class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span class="">Fax : +212523480218</span>
                        </a>
    
                        <a class="block hover:text-gray-700 flex items-canter gap-1" href="mailto:support@domain.io" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F5A52C" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
    
                            <span class="">Contact@usms.ma</span>
                        </a>
                    </div>
    
                    <div class="col-span-12 xs:col-span-2 sm:col-span-2 flex flex-col space-y-2">
                        <p class="font-bold text-md mb-4 text-gray-800 uppercase tracking-wide">INSCRIPTION</p>
    
                        <a class="block hover:text-gray-700 flex items-canter gap-1" href="/inscription">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F5A52C" class="w-4 h-4 pt-0.5">
                                <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>
                            <span>Inscris-toi</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright -->
            <div class="mt-10 py-4 text-sm leading-6 text-white border-t border-gray-200 bg-[#1088BC]">
                <div class="mx-auto max-w-7xl px-4 sm:px-8 sm:flex sm:items-center sm:justify-center gap-2">
                    <p class="">
                        © 2024 <span class="font-semibold "><a href="/" class="hover:underline">E-langue</a>, </span> Tous droits réservés. Université Sultan Moulay Slimane.
                    </p>
                </div>
            </div>    
    
        </footer>

        <div id="backToTopBtn" onclick="scrollToTop()" class="hidden fixed bottom-8 right-8 z-50 cursor-pointer">
            <span class="bg-[#1088BC] flex items-center justify-center p-3 text-white rounded-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>                  
            </span>
        </div>
    </div>

    <script src="/js/main.js"></script>
</body>
</html>