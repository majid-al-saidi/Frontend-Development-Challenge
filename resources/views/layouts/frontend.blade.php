<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Rihal Quiz</title>

    <style>
        @font-face {
            font-family: "Tajawal";
            src: url({{ asset('fonts/Tajawal-Regular.ttf') }});
        }

        body {
            font-family: "Tajawal", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

    </style>
</head>

<body class="text-blueGray-800 antialiased">
    {{-- https://tailwindcomponents.com/component/features-section --}}

    <div id="app">

        <div class="relative bg-gray-50 min-h-screen">
            <div class="relative mx-auto w-full min-h-full">
                <div class="py-16 bg-gray-50 overflow-hidden">
                    <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>

</html>
