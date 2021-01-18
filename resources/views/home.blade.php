<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
    <meta name="description" content="Bootstrap navbar examples for any type of project, Bootstrap 4" />

    <title>Colorantes Mariposa</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>

    <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>


    <script type="text/javascript">
        /// some script
        $(function () {
            'use strict'

            $("[data-trigger]").on("click", function(){
                var trigger_id =  $(this).attr('data-trigger');
                $(trigger_id).toggleClass("show");
                $('body').toggleClass("offcanvas-active");
            });

            // close if press ESC button
            $(document).on('keydown', function(event) {
                if(event.keyCode === 27) {
                    $(".navbar-collapse").removeClass("show");
                    $("body").removeClass("overlay-active");
                }
            });

            // close button
            $(".btn-close").click(function(e){
                $(".navbar-collapse").removeClass("show");
                $("body").removeClass("offcanvas-active");
            });


        })
    </script>

    <style type="text/css">

        body.offcanvas-active{
            overflow:hidden;
        }
        .offcanvas-header{ display:none; }

        @media (max-width: 992px) {
            .offcanvas-header{ display:block; }
            .navbar-collapse {
                position: fixed;
                top:0;
                bottom: 0;
                left: 100%;
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem;
                overflow-y: auto;
                visibility: hidden;
                background-color: black;
                transition: visibility .2s ease-in-out, transform .2s ease-in-out;
            }
            .navbar-collapse.show {
                visibility: visible;
                transform: translateX(-100%);
            }
        }

    </style>
</head>
<body>

<header class="section-header py-4">
    <div class="container">
        <h2>Colorantes Mariposa API</h2>
    </div>
</header> <!-- section-header.// -->
<!-- ========================= SECTION CONTENT ========================= -->

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-trigger="#main_nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse" id="main_nav">

            <div class="offcanvas-header mt-3">
                <button class="btn btn-outline-danger btn-close float-right"> &times Close </button>
                <h5 class="py-2 text-white">Menu Mariposa</h5>
            </div>

            <ul class="navbar-nav">

                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Recursos Humanos </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="nom35"> NOM 35</a></li>
                    </ul>
            </ul>


            <ul class="navbar-nav ml-auto">
                <!--li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li-->
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Catalogos </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        @foreach($catalogos as $catalogo)

                        <li><a class="dropdown-item" href="{{$catalogo->VISTA}}">{{$catalogo->NOM_CATALOGO}}</a></li>
                    @endforeach
                        <!--li><a class="dropdown-item" href="#"> Areas </a></li>
                        <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li-->
                    </ul>
                </li>
            </ul>
        </div> <!-- navbar-collapse.// -->
    </nav>

    <section class="section-content py-5">

        <h6>Demo view: Navbar collapse to off canvas on mobile. <span class="text-danger">Change browser size to see in action</span> </h6>
        <p>For this demo page you should connect to the internet to receive files from CDN  like Bootstrap CSS, Bootstrap JS and jQuery. </p>

        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

        <a href="#" class="btn btn-danger"> &laquo Salir</a>

    </section>

</div><!-- container //  -->

</body>
</html>
