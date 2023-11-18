<script src="https://cdn.tailwindcss.com"></script>
<!-- component -->
<!DOCTYPE html>
<html class="h-full" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="./tailwind.css" />
    <title>Chi Desk</title>
    <style>
        html {
            font-size: 14px;
            line-height: 1.285;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Arial,
                sans-serif;
        }

        html,
        body {
            width: 100%;
            height: 100%;
        }

        /* can be configured in tailwind.config.js */
        .group:hover .group-hover\:block {
            display: block;
        }

        .focus\:cursor-text:focus {
            cursor: text;
        }

        .focus\:w-64:focus {
            width: 16rem;
        }

        /* zendesk styles */
        .h-16 {
            height: 50px;
        }

        .bg-teal-900 {
            background: #03363d;
        }

        .bg-gray-100 {
            background: #f8f9f9;
        }

        .hover\:border-green-500:hover {
            border-color: #78a300;
        }
    </style>
</head>

<body class="antialiased h-full">
    <!-- you can clone or fork the repo if you want -->
    <!-- https://github.com/bluebrown/tailwind-zendesk-clone   -->

    <div class="h-full w-full flex overflow-hidden antialiased text-gray-800 bg-white">
        <!-- section body side nav -->

        <div class="flex-1 flex flex-col">


            <!-- section body header -->


            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center py-6 px-4 mt-2">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="" aria-label="Home">
                            <img src="https://www.svgrepo.com/show/491978/gas-costs.svg" height="40"
                                width="40" />
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button type="button" id="main-menu" aria-label="Main menu" aria-haspopup="true"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">

                    <span class="inline-flex rounded-md shadow ml-2">
                        <a href="{{ route('logout') }}"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out">
                            Log Out
                        </a>
                    </span>
                </div>
            </nav>
            <!-- main content -->
            <main class="flex-grow flex min-h-0 border-t">
                <!-- section update to tickets -->
                <section class="flex flex-col p-4 w-full max-w-sm flex-none bg-gray-100 min-h-0 overflow-auto">
                    <h1 class="font-semibold mb-3">
                        Modifier Vos Commentaires
                    </h1>
                    <ul>
                        <li>
                            <article tabindex="0"
                                class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                                <span class="flex-none pt-1 pr-2">
                                    <img class="h-8 w-8 rounded-md"
                                        src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                                </span>
                                <div class="flex-1">
                                    <header class="mb-1">
                                        Tarun T <span class="font-semibold">commented</span> on
                                        <h1 class="inline">"RE: WPMS issue".</h1>
                                    </header>
                                    <p class="text-gray-600">
                                        Hi Mazhar, Please note this issue comes when user is not
                                        closing or logout sy…
                                    </p>
                                    <footer class="text-gray-500 mt-2 text-sm">
                                        Friday 22:16
                                    </footer>
                                </div>
                            </article>
                        </li>
                    </ul>
                </section>
                <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start p-8">


                    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                        <div class="order-1 sm:ml-6 xl:ml-0">
                            <h3 class="mb-1 text-slate-900 font-semibold dark:text-slate-200">
                                <span class="mb-1 block text-sm leading-6 text-cyan-500">Hero Patterns</span>Seamless
                                SVG background
                                patterns by the makers of Tailwind CSS.
                            </h3>
                            <div class="prose prose-slate prose-sm text-slate-600 dark:prose-dark">
                                <p>A collection of over 100 free MIT-licensed high-quality SVG patterns for you to use
                                    in your web
                                    projects.</p>
                            </div><a
                                class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500 dark:bg-slate-700 dark:text-slate-100 dark:hover:bg-slate-600 dark:hover:text-white dark:focus:ring-slate-500 mt-6"
                                href="https://heropatterns.com">Learn
                                more<span class="sr-only">, Seamless SVG background patterns by the makers of Tailwind
                                    CSS.</span><svg
                                    class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400 dark:text-slate-500 dark:group-hover:text-slate-400"
                                    width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0L3 3L0 6"></path>
                                </svg></a>
                        </div><img src="https://tailwindcss.com/_next/static/media/heropatterns@75.82a09697.jpg"
                            alt=""
                            class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                            width="1216" height="640">
                    </li>
                </ul>

                <!-- section content -->
