<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotello</title>

        <!-- Fonts Roboto -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        {{-- Tailwind --}}
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
              theme: {
                extend: {
                  colors: {
                    colRed: '#871b2a',
                    colGray: '#2e2e2e',
                  }
                }
              }
            }
        </script>
        {{-- AlphineJS --}}
        <script src="//unpkg.com/alpinejs" defer></script>
        {{-- CSS --}}
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="antialiased font-roboto">
        <div class="w-full relative">
            <nav class="bg-colRed">
                <div class="xl:px-24 lg:px-16 md:px-12 px-8 py-6">
                    <div class="flex justify-between items-center">
                        <a href="/">
                            <img src="images/logo.svg" class="w-[150px]" alt="">
                        </a>

                        <ul class="menu lg:flex items-center hidden text-white space-x-10">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Rooms</a>
                            </li>
                            <li>
                                <a href="">Gallery</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="">Contacts</a>
                            </li>
                            <div class="h-10 w-[1px] bg-gray-100 opacity-10"></div>
                            <span class="flex items-center">
                                <x-icon name="telephone" class="mr-2" />
                                <span>804-831-4196</span>
                            </span>
                        </ul>

                        <div x-data="{ show: false }" @click.away="show= false" class="lg:hidden">
                            <button type="button" @click="show = ! show">
                                <x-icon name="menu" class="h-10 w-10 text-white" />
                            </button>

                            <div x-show="show" x-transition.duration.200ms class="min-h-full bg-colRed pl-10 pr-20 py-5 absolute left-0 top-0 space-y-6">
                                <a href="/">
                                    <img src="images/logo.svg" class="w-[150px]" alt="">
                                </a>
                                <div class="flex items-center text-white">
                                    <x-icon name="telephone" class="mr-2" />
                                    <span>804-831-4196</span>
                                </div>

                                <ul class="text-white space-y-2">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Rooms</a>
                                    </li>
                                    <li>
                                        <a href="">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            {{ $slot }}

            <footer class="bg-colGray text-gray-400">
                <div class="xl:px-24 lg:px-16 md:px-12 px-8 py-6">
                    <div class="flex md:flex-row flex-col justify-between items-center">
                        <p class="font-semibold">
                            Copyright © 2022 Hotel Plus  by Denny Firmansyah
                        </p>

                        <div class="flex space-x-8 text-gray-500 md:mt-0 mt-6">
                            <x-icon name="twitter" />
                            <x-icon name="facebook" />
                            <x-icon name="instagram" />
                            <x-icon name="whatsapp" />
                            <x-icon name="tiktok" />
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
