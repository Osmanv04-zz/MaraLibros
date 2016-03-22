@extends('layouts.principal')
@section('content')
    <div class="contact-content">


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
                    <button type="submit" class="btn btn-default"/>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>

        </div>
    </div>
    @endsection