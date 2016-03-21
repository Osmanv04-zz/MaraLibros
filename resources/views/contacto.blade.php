@extends('layouts.principal')
@section('content')
    <div class="contact-content">
        <div class="top-header">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
                <p>MaraLibros C.A </p>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Inicio</a></li>


                    <li><a href="#about">Catalogo</a></li>
                    <li><a href="#contact">Contactenos</a></li>
                    <li><a href="#contact">Iniciar Sesion</a></li>
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
    </div>
    <div class="main-contact">
        <h3 class="head">Contactenos</h3>
        <div class="contact-form">
            <form>
                <div class="col-md-6 contact-left">
                    <input type="text" placeholder="Nombre" required/>
                    <input type="text" placeholder="Correo" required/>
                    <input type="text" placeholder="Numero telefonico" required/>
                </div>
                <div class="col-md-6 contact-right">
                    <textarea placeholder="Mensaje"></textarea>
                    <input type="submit" value="Enviar"/>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>

        </div>


    @endsection