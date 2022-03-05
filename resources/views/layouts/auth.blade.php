<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- Fonts --}}
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

        {{-- <script src="https://kit.fontawesome.com/474b4eccce.js" crossorigin="anonymous"></script> --}}

        {{--AdminKit CSS file --}}
        <link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.min.css" integrity="sha512-ygIxOy3hmN2fzGeNqys7ymuBgwSCet0LVfqQbWY10AszPMn2rB9JY0eoG0m1pySicu+nvORrBmhHVSt7+GI9VA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>


    <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
        <main class="d-flex w-100 h-100">
            <div class="container d-flex flex-column">
                <div class="row vh-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                        {{-- <div class="d-table-cell align-middle">

                            <div class="text-center mt-4">
                                <h1 class="h2">Welcome back, Charles</h1>
                                <p class="lead">
                                    Sign in to your account to continue
                                </p>
                            </div>

                            <div class="card"> --}}
                                {{-- <div class="card-body"> --}}

                                    @yield('content')

                                {{-- </div> --}}
                            {{-- </div>

                        </div> --}}
                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- AdminKit JS file --}}
        <script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>
    </body>

</html>
