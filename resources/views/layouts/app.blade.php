<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
    <meta name="description" content="Bootstrap navbar examples for any type of project, Bootstrap 4" />

    <title>Colorantes Mariposa - @yield('title')</title>

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

        // Wait for the page to finish loading
        document.addEventListener('DOMContentLoaded', function () {
            // Attach `change` event listener to checkbox
            document.getElementById('billing-checkbox').onchange = toggleBilling;
        }, false);

        function toggleBilling() {
            // Select the billing text fields
            var billingItems = document.querySelectorAll('#s8 input[type="radio"]');

            // Toggle the billing text fields
            for (var i = 0; i < billingItems.length; i++) {
                billingItems[i].disabled = !billingItems[i].disabled;
            }
        }
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
        input:disabled {
            background: #fd0000;
        }
    </style>
</head>
<body>

<header class="section-header" >
    <div class="container">
        <div class="row py-4">
            <div class="col-sm-6"><h2>Colorantes Mariposa API</h2></div>
            <div class="col-sm-6"><img src="../resources/images/logoColorim.png" class="img-fluid img-thumbnail" ></div>
        </div>


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
            @yield('nav')
        </div> <!-- navbar-collapse.// -->
    </nav>

    <section class="section-content py-5">

        @yield('content')

    </section>

</div><!-- container //  -->

</body>
</html>
