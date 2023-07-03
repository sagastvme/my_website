<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My website</title>
    @vite('resources/css/app.css')
    <script>
        // Burger menus
        document.addEventListener('DOMContentLoaded', function () {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');
            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function () {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');
            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function () {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function () {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
    </script>

</head>
<body class="">
<nav class="relative px-4 py-4 flex justify-between items-center bg-white border border-gray-400 ">

        <span class="items-center justify-center my-auto ml-2 text-2xl">Eduardos website</span>

    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-blue-600 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2  lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">


            <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#about">About me
                </a></li>


            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>
            </li>
            <li><a class="text-sm bg- text-gray-400 hover:text-gray-500" href="#portfolio">Portfolio</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>
            </li>
            <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#skills">Skills</a></li>

            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>
            </li>
            <li class="flex items-center gap-2">
                <a class="text-sm text-gray-400" href="#experience">Work experience</a>

            </li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>
            </li>

            <li><a class="text-sm text-gray-400 hover:text-gray-500"
                   href="">My account</a></li>

    </ul>






</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>


    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">

            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul>



                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                           href="">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                           href="">Messages</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                           href="">Friends</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                           href="">Friend requests</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                           href="">My account</a>
                    </li>

            </ul>
        </div>
        <div class="mt-auto">

            <p class="my-4 text-xs  text-gray-400">
                <span>Copyright © {{now()->year}}</span>
            </p>
        </div>
    </nav>
</div>

<div class="h-screen  flex flex-col justify-center bg-gradient-to-l from-purple-400  to-emerald-300 items-center">

    <h1 class="text-center font-thin text-5xl -mt-20">Eduardo Gomara Sagastume</h1>
    <h2 class="text-center text-3xl font-thin mt-20">Full Stack Web Developer</h2>
</div>







<div id="about" class="relative lg:h-screen  bg-white overflow-hidden mt-16">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                 fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100"></polygon>
            </svg>

            <div class="pt-1"></div>

            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h2 class="my-6 text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
                        About me
                    </h2>

                    <p class="text-black">
                        I am Eduardo Gomara Sagastume, a highly enthusiastic Full Stack Web Developer committed to crafting extraordinary web experiences. Equipped with a solid background in full stack development and a meticulous eye for design, my goal is to deliver groundbreaking and user-centric solutions that surpass expectations.

                        My development journey commenced at 42 Madrid, under the guidance of Fundacion Telefonica. Since then, I have acquired my Software Engineer Diploma at IES Clara del Rey with an average grade of 9, and I've been actively refining my skills and expanding my knowledge through ongoing learning and hands-on experience.

                    </p>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 h-screen bg-red-200">
        <img class="w-full object-cover object-top h-full lg:w-full lg:h-full" src="https://talksport.com/wp-content/uploads/sites/5/2022/11/2022-group-h-match-portugal-779033372.jpg" alt="">
    </div>
</div>





<section

    class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
>
    <div id="portfolio" class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">

                    <h2
                        class="text-dark mb-4 mt-5 text-3xl font-bold sm:text-4xl md:text-[40px]"
                    >
                        My portfolio
                    </h2>
                    <p class="text-body-color text-base">I've been working in diverse projects, utilizing a range of technologies such as Laravel, Symfony, React, Vue.js, Tailwind CSS, and Docker.</p>
                </div>
            </div>
        </div>

        <div class="-mx-4 flex flex-wrap">
            <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden rounded-lg bg-gray-200">
                        <img
                            src="/bus.svg"
                            alt="portfolio"
                            class="w-full h-96 p-14"
                        />
                    </div>

                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Live transport app
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">El rastro</h3>
                        <a
                            href="https://elrastro.club/" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>

            </div>
            <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden rounded-lg bg-gray-200">
                        <img
                            src="/whats.svg"
                            alt="portfolio"
                            class="w-full h-96 p-28 "
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Clone
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">
                            WhatsApp Desktop Clone
                        </h3>
                        <a
                            href="https://whatsdeskclone.web.app/" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>
            <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden rounded-lg bg-gray-200">
                        <img
                            src="/football.svg"
                            alt="portfolio"
                            class="w-full h-96 p-24"
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              In Development
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">Football fantasy game</h3>
                        <a
                            href="https://fantasyprototype.web.app/points" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>
            <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden rounded-lg bg-gray-200">
                        <img
                            src="/medicine.svg"
                            alt="portfolio"
                            class="w-full h-96 p-24"
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Telemedicine
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">
                            Visit the doctor from home
                        </h3>
                        <a
                            href="https://github.com/sagastvme/telemedicine" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>
            <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden rounded-lg bg-gray-200">
                        <img
                            src="/weather.svg"
                            alt="portfolio"
                            class="w-full h-96 p-24"
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Live weather information
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">Weather app</h3>
                        <a
                            href="http://weather.elrastro.club/" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>
            <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden bg-gray-200 rounded-lg">
                        <img
                            src="/spotify.svg"
                            alt="portfolio"
                            class="w-full h-96 p-24"
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Clone
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">Spotify clone</h3>
                        <a
                            href="https://spotify.elrastro.club/" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>
            <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden rounded-lg bg-gray-200">
                        <img
                            src="/monster.webp"
                            alt="portfolio"
                            class="w-full h-96 p-24"
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Url shortener
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">Shorten it</h3>
                        <a
                            href="https://short.elrastro.club/" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>  <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden  rounded-lg bg-gray-200">
                        <img
                            src="/linkedin.svg"
                            alt="portfolio"
                            class="w-full h-96 p-24 "
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Clone
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">Linkedin clone</h3>
                        <a
                            href="https://linkedin.elrastro.club/" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>  <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden rounded-lg bg-gray-200 ">
                        <img
                            src="/breaking.svg"
                            alt="portfolio"
                            class="w-full h-96 p-24"
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Game
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">Breaking bad</h3>
                        <a
                            href="https://breakingbadedu.web.app/" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>  <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden rounded-lg  bg-gray-200">
                        <img
                            src="/map.svg"
                            alt="portfolio"
                            class="w-full h-96 p-24 "
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Interactive map
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">Spanish elections</h3>
                        <a
                            href="https://spanishelectionsbyedu.web.app/" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>  <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative mb-12">
                    <div class="overflow-hidden bg-gray-200 rounded-lg">
                        <img
                            src="/bitwarden.svg"
                            alt="portfolio"
                            class="w-full h-96 p-24"
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Password Manager
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">Bitwarden</h3>
                        <a
                            href="https://bitwardenbyedu.web.app/" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>  <div

                class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
                <div class="relative  mb-12">
                    <div class="overflow-hidden rounded-lg bg-gray-200">
                        <img
                            src="/react.svg"
                            alt="portfolio"
                            class="w-full h-96 p-24 "
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Weather app
            </span>
                        <h3 class="text-dark mb-4 text-xl font-bold">Weather app with React</h3>
                        <a
                            href="https://react-weather-edu.web.app/" target="_blank"
                            class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-gray-500"
                        >
                            Visit the website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<section

    class=""
>
    <div  class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">

                    <h2 id="skills"
                        class="text-dark mb-4 mt-5 text-3xl font-bold sm:text-4xl md:text-[40px]"
                    >
                        My technical skills
                    </h2>
                </div>
            </div>
        </div>

        <div class="-mx-4 flex flex-wrap">








            <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="relative my-16">
                    <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-gradient-to-r from-blue-500 to-purple-500 py-9 px-3 text-center shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-white">Programming Languages:</h2>
                        <ul class="max-w-md mx-auto space-y-1 text-gray-100 list-disc list-inside">
                            <li class="text-lg">
                                JavaScript
                            </li>
                            <li class="text-lg">
                                HTML
                            </li>
                            <li class="text-lg">
                                CSS
                            </li>
                            <li class="text-lg">
                                Java
                            </li>
                            <li class="text-lg">PHP</li>
                        </ul>
                    </div>
                </div>

            </div>        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="relative my-16">
                    <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-gradient-to-r from-blue-500 to-purple-500 py-9 px-3 text-center shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-white">Frameworks:</h2>
                        <ul class="max-w-md mx-auto space-y-1 text-gray-100 list-disc list-inside">
                            <li class="text-lg">
                                Vue.js
                            </li>
                            <li class="text-lg">
                                Tailwind CSS
                            </li>
                            <li class="text-lg">
                                Symfony
                            </li>
                            <li class="text-lg">Laravel</li>
                            <li class="text-lg">React</li>
                        </ul>
                    </div>
                </div>
            </div>






            <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="relative my-16">
                    <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-gradient-to-r from-blue-500 to-purple-500 py-9 px-3 text-center shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-white">Other technologies:</h2>
                        <ul class="max-w-md mx-auto space-y-1 text-gray-100 list-disc list-inside">
                            <li class="text-lg">
                                Docker
                            </li>
                            <li class="text-lg">
                                Github
                            </li>
                            <li class="text-lg">
                                VPS management
                            </li>
                            <li class="text-lg">Nginx proxy server</li>
                            <li class="text-lg">MySQL</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        </div>
        </div>
    </div>
</section>











<section

    class=""
>
    <div  class="container mx-auto">
        <div class="-mx-4 flex flex-wrap" id="experience">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">

                    <h2 id="skills"
                        class="text-dark mb-4 mt-5 text-3xl font-bold sm:text-4xl md:text-[40px]"
                    >
                        My work experience
                    </h2>
                </div>
            </div>
        </div>

        <div class="-mx-4 flex flex-wrap">

            <div class="w-full px-4 md:w-1/2">
                <div class="relative my-16 h-full">
                    <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-pink-400 h-96 py-9 px-3 text-center shadow-lg">
                        <h2 class="text-4xl mb-5 text-white font-bold">Current job</h2>
                        <p class="text-white mt-14  text-lg leading-relaxed">
                            Currently, I am employed at <a target="_blank" class="font-bold underline" href="https://practikalia.com/en/">Practickalia</a>, serving as one of two members in the IT company. In this role, I am responsible for managing a comprehensive course web platform. I utilize technologies such as Backbone.js, Vue.js, Bootstrap, and Django for the backend development. We strive to deliver top-quality web experiences to our users.
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 md:w-1/2">
                <div class="relative my-16 h-full">
                    <div class="relative z-10 mx-7 -mt-20 rounded-lg bg-blue-950 h-96    py-9 px-3 text-center shadow-lg">
                        <h2 class="text-4xl mb-5 text-white font-bold">My NTT Experience</h2>
                        <p class="text-white text-lg mt-14 leading-relaxed">As a Frontend Developer at <a target="_blank" class="font-bold underline" href="https://www.nttdata.com/global/en/">NTT DATA</a>, I have had the opportunity to work on exciting projects, collaborating with talented individuals and utilizing cutting-edge technologies such as Vue.js and Tailwind CSS. From crafting captivating user interfaces to implementing interactive functionalities, I am committed to creating seamless and visually appealing applications that meet the needs of our clients.</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>
</section>







<section

    class=""
>
    <div  class="container mx-auto">
        <div class="-mx-4 flex flex-wrap" id="experience">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">

                    <h2 id="skills"
                        class="text-dark mb-4 mt-5 text-3xl font-bold sm:text-4xl md:text-[40px]"
                    >
                        Languages
                    </h2>
                </div>
            </div>
        </div>

        <div class="flex flex-row w-full bg-red-200">
            <p class="mx-12 py-2 text-lg font-semibold text-white bg-purple-500 rounded-lg shadow-lg">Hola</p>
            <span class="flex items-center px-2 text-gray-800">Image Placeholder</span>
        </div>


    </div>
    </div>
</section>




{{--<h5 class="bg-lime-400">Languages</h5>--}}
{{--<p class="bg-lime-400">Native spanish and english</p>--}}

{{--<h5 class="bg-yellow-200">Contact information</h5>--}}
{{--<p class="bg-yellow-200">Full Stack Web Developer--}}
{{--    Website 443-721-8218 Cherry Valley Rd, 21136--}}
{{--    Email LinkedIn GitHub</p>--}}
{{--<h5 class="bg-red-200">Extra activities</h5>--}}
{{--<p class="bg-red-200">Participant at Pool 42.--}}
{{--    One intensive month programming--}}
{{--    in C and using Apple software.--}}
{{--    • Member of Loopback Madrid.--}}
{{--    Association that digitizes SMEs</p>--}}
{{--<h5 class="bg-green-400">Education</h5>--}}
{{--<p class="bg-green-400">EDUCATION--}}
{{--    • Software engineer.--}}
{{--    Polytechnic University of Madrid--}}
{{--    September 2020 - June 2023--}}
{{--    • High School Diploma--}}
{{--    La Inmaculada Marillac--}}
{{--    September 2018 - June 2020--}}
{{--    • Introduction to Computer Science--}}
{{--    Harvard University--}}
{{--    Online</p>--}}


</body>
</html>
