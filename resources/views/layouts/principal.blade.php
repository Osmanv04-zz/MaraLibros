<!DOCTYPE html>
<html>
<head>
    <title>MaraLibros C.A</title>
    @include('institucion.createModal')
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
                    <a href="/"><img src="http://localhost:8000/images/logo4.png" alt="" /></a>
                    <p>MaraLibros C.A </p>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>


                        <li><a href="#about">Catalogo</a></li>
                        <li><a href="#contact">Contactenos</a></li>
                        <li><a href="#contact">Iniciar Sesion</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Registrarse</a></li>
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
    <div class="pie">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                   
                </div>
                <div class="col-md-4 text-center" style="margin-top:50px;">
                    <p class="textopie">Creado por: SoftMOB c.a &copy; 2016</p>
                    <p class="textopie"> Email: SoftMOB@gmail.com</p>
                    <p class="textopie">Números Telefónicos:  + 58 281-2769049</p>
                    <p class="textopie">                      + 58 412-9471756</p>
                </div>
                <div class="col-md-4">
                   
                </div>
            </div>
       
              
        </div> 
    </div>
</div>
 

</div> 

{!!Html::script('js/script.js') !!}
<div class="clearfix"></div>
</body>
</html>