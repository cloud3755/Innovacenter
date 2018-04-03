
   <body>
      <h1>Hola, Se pusieron en contacto con nosotros!</h1>
      <div>
      <b>Nombre:</b> {{$Contacto->Nombre}}<br>
      <b>Correo:</b> {{$Contacto->Correo}}<br>
      <b>Telefono:</b> {{$Contacto->Telefono}}<br>
      <b>Mensaje:</b> {{$Contacto->Mensaje}}<br>
      
      </div>
      {{ config('app.name') }}
   </body>

