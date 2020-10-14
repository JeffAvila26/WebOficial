<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            //  little hack to detect if the user is on ie 11
            const isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
            // get all the links with an ID that starts with 'sectionLink'
            const listOfLinks = document.querySelectorAll("a[href^='#sectionLink");
            // loop over all the links
            listOfLinks.forEach(function(link) {
                // listen for a click
                link.addEventListener('click', () => {
                    // toggle highlight on and off when we click a link
                    listOfLinks.forEach((link) => {
                        if (link.classList.contains('highlighted')) {
                            link.classList.remove('highlighted');
                        }
                    });
                    link.classList.add('highlighted');
                    // get the element where to scroll
                    let ref = link.href.split('#sectionLink');
                    ref = "#section" + ref[1];
                    // ie 11 does not support smooth scroll, so we will simply scroll
                    if (isIE11) {
                        window.scrollTo(0, document.querySelector(ref).offsetTop);
                    } else {
                        window.scroll({
                            behavior: 'smooth',
                            left: 0,
                            // top gets the distance from the top of the page of our target element
                            top: document.querySelector(ref).offsetTop
                        });
                    }
                })
            })
        })

    </script>
</head>

<body class="antialiased">
    <div id="header">
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="/">Logo_Web</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#sectionLink1" class="nav-link">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#sectionLink2" class="nav-link">Servicio</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#sectionLink3" class="nav-link">Clientes</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="ml-4 text-sm text-gray-700 underline">Register</a>
                                        @endif
                                    </li>
                        @endif
                        </ul>
                </div>
                @endif
                </form>
        </div>
        </nav>
        </div>
    </body>
    </html>
