@component('mail::message')

# Gracias por su mensaje

<strong>Nombre: </strong> {{ $data['name']}} <br>
<strong>Email: </strong> {{ $data['email']}} <br>
<strong>Celular: </strong> {{ $data['phone']}} <br>


<strong>Mensaje: </strong> {{ $data['message']}}


@endcomponent
