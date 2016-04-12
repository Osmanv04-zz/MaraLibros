@extends ('layouts.principal')
@section('content')

        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/imgcarrusel.png" alt="Chania">

                    </div>

                    <div class="item">
                        <img src="images/imgcarrusel2.png" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="images/imgcarrusel3.png" alt="Flower">
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--
        <div class="review-slider">
            <ul id="flexiselDemo1">
                <li><img src="images/r1.jpg" alt=""/></li>
                <li><img src="images/r2.jpg" alt=""/></li>
                <li><img src="images/r3.jpg" alt=""/></li>
                <li><img src="images/r4.jpg" alt=""/></li>
                <li><img src="images/r5.jpg" alt=""/></li>
                <li><img src="images/r6.jpg" alt=""/></li>
            </ul>
            <script type="text/javascript">
                $(window).load(function() {

                    $("#flexiselDemo1").flexisel({
                        visibleItems: 6,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: false,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 2
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems: 3
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 4
                            }
                        }
                    });
                });
            </script>
            <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        </div>
        -->
   <div class="container">
        <div class="row">
            <div class="col-md-3" >
                <img src="http://localhost:8000/images/logo.png" class="img-rounded center-block" style="margin-top:20px;">
             </div>
            <div class="textopresentacion">
                <div class="col-md-8" style="margin-top:7px; border-left: 1px solid black">
                    <p>MaraLibros, su editorial favorita y mayor confianza, le ofrece los textos de educación primaria con la mejor calidad en material y contenido. Visítenos, registrese y disfrute de los beneficios que le ofrecemos, solicite su presupuesto y con gusto le atenderemos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top:10px;" id="textobuscados";>
                <p>LIBROS MAS BUSCADOS</p>
            </div>
        </div>
    </div>
   
    <div class="more-reviews">
        <ul id="flexiselDemo2">
            <li><img src="images/portada1.png" alt=""/></li>
            <li><img src="images/portada2.png" alt=""/></li>
            <li><img src="images/portada3.png" alt=""/></li>
            <li><img src="images/portada4.jpeg" alt=""/></li>
        </ul>
        <script type="text/javascript">
            $(window).load(function() {

                $("#flexiselDemo2").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: false,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 3
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });
            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
@endsection