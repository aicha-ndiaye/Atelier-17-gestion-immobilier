<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <section class="bg-white py-20">
        <script src="https://cdn.tailwindcss.com"></script>
        <div class="font-sans leading-normal tracking-normal">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Hero section -->

            <div class="container mx-auto px-4">
                <div class="max-w-2xl mx-auto text-center">
                    <h1 class="text-4xl font-bold mb-6">We're launching soon</h1>
                    <p class="text-gray-600 mb-12">Enter your email to be the first to know when we launch.</p>
                    <form class="max-w-md mx-auto">
                        <div class="flex items-center">
                            <input type="email"
                                class="bg-gray-100 mr-3 py-2 px-4 w-full rounded-md focus:outline-none focus:bg-white"
                                placeholder="Enter your email">
                            <button type="submit"
                                class="bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>

    <!-- Features section -->
    <section class="bg-gray-200 py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Nos Biens</h2>
                <p class="text-gray-600 mb-12">Cette propriété luxueuse offre une expérience de vie inégalée avec
                    un design impressionnant. C'est une occasion unique d'acquérir une maison élégante et
                    fonctionnelle, proche des commodités de la ville.
                </p>
            </div>
            <div class="flex flex-wrap -mx-4 mt-12">
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="rounded-md bg-white shadow-md p-8">
                        <div class="text-4xl font-bold text-purple-600 mb-4">01</div>
                        <h3 class="text-2xl font-bold mb-4">Feature 1</h3>
                        <p class="text-gray-600 mb-4">Cette propriété luxueuse offre une expérience de vie inégalée avec
                            un design impressionnant. C'est une occasion unique d'acquérir une maison élégante et
                            fonctionnelle, proche des commodités de la ville.</p>
                    </div>
                </div>

            </div>


        </div>
        </div>
    </section>
    </div>

</body>

</html>
