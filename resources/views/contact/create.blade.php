@extends('layout')

@section('title', 'Contacto')
    
@section('extra-css')
    <link rel="stylesheet" href="css/pages/contacto.css">
@endsection

@section('content')

<div class="additional-info">
  <p>Si considera que su pregunta es común, por favor primero asegúrese que no se encuentre en la sección <a href="preguntas-frecuentes">preguntas frecuentes</a>.</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.9950050063508!2d-57.56553748467594!3d-38.00057697971896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9584deae122e7697%3A0x9e8d9fc9509d9056!2sEscuela+de+Educaci%C3%B3n+Secundaria+T%C3%A9cnica+N.3+Domingo+Faustino+Sarmiento!5e0!3m2!1ses-419!2sar!4v1559964463874!5m2!1ses-419!2sar" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
  <p>¿Desea llamarnos directamente? </p>
  Tel: <a href="tel:0223 495-0285">495-0285</a>
  <p>O bien, puede ir a la dirección: 14 de Julio 2550</p>

</div>
    
  <div class="wrap-contact100">
      @if(session()->has('message'))
      <div class="alert alert-success" role="alert">
          <strong>Envío exitoso</strong> {{ session()->get('message') }}
      </div>

      @endif

    <form class="contact100-form validate-form" action="/contacto" method="POST">
      <span class="contact100-form-title">
        Contactanos
      </span>

      <div class="wrap-input100 validate-input" data-validate="Escriba su nombre">
        <span class="label-input100">Nombre</span>
        <input class="input100" type="text" value="{{ old('name')}}" name="name" placeholder="Nombre completo...">
        <span class="focus-input100"></span>
        <div> {{ $errors->first('name') }} </div>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Escriba un email válido: ex@gmail.com">
        <span class="label-input100">Email</span>
        <input class="input100" type="text" value="{{ old('email')}}" name="email" placeholder="Dirección de Email...">
        <span class="focus-input100"></span>
        <div> {{ $errors->first('email') }} </div>
      </div>

      <div class="wrap-input100">
        <span class="label-input100">Celular(opcional)</span>
        <input class="input100" type="text" value="{{ old('phone')}}" name="phone" placeholder="Celular...">
        <span class="focus-input100"></span>
        <div> {{ $errors->first('phone') }} </div>
      </div> 

      <div class="wrap-input100 validate-input" data-validate = "Se requiere un mensaje">
        <span class="label-input100">Mensaje</span>
        <textarea class="input100" name="message" placeholder="Preguntas/Comentarios...">{{ old('message')}}</textarea>
        <span class="focus-input100"></span>
        <div> {{ $errors->first('message') }} </div>
      </div>

      @csrf

      
      <button class="btn btn-lg btn-outline-dark">Enviar consulta</button>
      
    </form>
  </div>


@endsection

@section('extra-js')
    <script src="js/contacto.js"></script>
@endsection
    