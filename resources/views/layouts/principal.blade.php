<!DOCTYPE html>
<html>
<head>
    <title>MaraLibros C.A</title>
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::script('js/jquery.min.js') !!}
    {!!Html::script('js/bootstrap.min.js') !!}

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
-->
</head>
<body>
<!-- header-section-starts -->
<div class="full">

    <div class="main">
        <div class="header">
            <div class="top-header">
                <div class="logo">
                    <a href="/"><img src="http://localhost:8000/images/logo.png" alt="" /></a>
                    <p>MaraLibros C.A </p>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>


                        <li><a href="#about">Catalogo</a></li>
                        <li><a href="#contact">Contactenos</a></li>
                        <li><a href="#contact">Iniciar Sesion</a></li>
                        <li><a href="/institucion/create">Registrarse</a></li>
                    </ul>
                    <div class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Buscar Libro...">

                        </div>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>

                    </div>
                </div><!--/.nav-collapse -->

            </div>
            @yield('content')
        <div class="news">

            <div class="col-md-6 news-right-grid">

                <div class="news-grid">

                </div>
                <a class="more" href="#">MORE</a>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
</div>

<div class="clearfix"></div>
</body>
</html>