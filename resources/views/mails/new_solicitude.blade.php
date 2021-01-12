@component('mail::message')
# Has recibido una nueva consulta

Nombre: {{$request->name}}
<br>
Correo: {{$request->email}}
<br>
Teléfono: {{$request->phone}}
<br>
Mensaje: {{$request->message}}

Gracias,<br>
{{ config('app.name') }}
@endcomponent