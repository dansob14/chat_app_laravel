<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHAT APP</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        @else
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        @endif
    </head>
    <body class="bg-dark text-white flex p-2 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-100  text-sm mb-6">
            @if (Route::has('login'))
                <nav class="navbar bg-body-tertiary text-white border border-info border-3 rounded">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <div id="sign-buttons">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn btn-primary"
                                        aria-pressed="true"
                                        role="button"
                                    >
                                        Log in
                                    </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="btn btn-primary"
                                        aria-pressed="true"
                                        role="button"
                                    >
                                            Register
                                    </a>
                                @endif
                                @endauth
                            </div>
                    </div>
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex w-75 ">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat nulla nec rutrum ultricies. Maecenas sit amet volutpat leo, eget auctor tellus. Vestibulum et purus id mauris tempus placerat. Sed tristique arcu scelerisque bibendum laoreet. In commodo iaculis arcu vel laoreet. Nullam nec consequat metus. Sed semper magna sem, a aliquam risus finibus ut. Sed ac venenatis nunc, eu semper lacus. Suspendisse suscipit ultrices ultrices. Ut commodo, est sed lacinia dignissim, ante purus lobortis purus, vitae placerat ligula dolor scelerisque nulla.
                </p>
                
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
