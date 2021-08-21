@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="title" style="margin-top: 10px">Nuevo Usuario</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('users')}}">Usuarios</a></li>
              <li class="breadcrumb-item active">Nuevo Usuario</li>
            </ol>
          </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                      <li>{{$error}} </li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulario</h3>
              </div>
              <div class="card-body">
                

 <div class="box box-info">
    <form action="{{route('user.save')}}" method="POST" id="user-new-form" enctype="multipart/form-data" >
    {{ csrf_field() }}
      <input type="hidden" name="id" value="0">
      <input type="hidden" name="is_new" value="true">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="" class="form-control" placeholder="Ingrese un nombre de usuario" maxlength="255">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Identificacion:</strong>
                   <input type="text" name="identificacion" value="" class="form-control" placeholder="000000" maxlength="20" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="example@email.com"
                        value="" maxlength="255" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="password" class="form-control" placeholder="example@email.com"
                        value="" maxlength="20" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cargo:</strong>
                    <select name="cargo" class="form-control" id="select-cargo" required>
                      <option value="">Seleccione un cargo</option>
                      <option value="administrador">Administrador</option>
                      <option value="supervisor">Supervisor</option>
                      <option value="agente">Agente</option>
                    </select>
                </div>
            </div>

             <div id="section-horario" class="col-xs-12 col-sm-12 col-md-12 horario" >
              
              <p><strong>Horario</strong><br/>
                <em>Selecciona la hora de entrada y salida de cada día de la semana</em>
              </p>
                <div class="form-group">
                  <label>Lunes:</label>
                  <p>
                  De <input type="time" class="time" name="lunes_hora_inicial" min="00:00" max="23:59" value="08:00" >
                  A <input type="time" class="time" name="lunes_hora_final" min="00:00" max="23:59" value="18:00" >
                  </p>
                </div>
                <div class="form-group">
                  <label>Martes:</label>
                  <p>
                  De <input type="time" class="time" name="martes_hora_inicial" min="00:00" max="23:59" value="08:00" >
                  A <input type="time" class="time" name="martes_hora_final" min="00:00" max="23:59" value="18:00" >
                  </p>
                </div>
                <div class="form-group">
                  <label>Miercoles:</label>
                  <p>
                  De <input type="time" class="time" name="miercoles_hora_inicial" min="00:00" max="23:59" value="08:00" >
                  A <input type="time" class="time" name="miercoles_hora_final" min="00:00" max="23:59" value="18:00" >
                  </p>
                </div>
                <div class="form-group">
                  <label>Jueves:</label>
                  <p>
                  De <input type="time" class="time" name="jueves_hora_inicial" min="00:00" max="23:59" value="08:00" >
                  A <input type="time" class="time" name="jueves_hora_final" min="00:00" max="23:59" value="18:00" >
                  </p>
                </div>
                <div class="form-group">
                <label>Viernes</label>
                 <p>
                  De <input type="time" class="time" name="viernes_hora_inicial" min="00:00" max="23:59" value="08:00" >
                  A <input type="time" class="time" name="viernes_hora_final" min="00:00" max="23:59" value="18:00" >
                  </p>
                </div>
                <div class="form-group">
                  <label>Sábado</label>
                  <p>
                  De <input type="time" class="time" name="sabado_hora_inicial" min="00:00" max="23:59" value="08:00" >
                  A <input type="time" class="time" name="sabado_hora_final" min="00:00" max="23:59" value="18:00" >
                  </p>
                </div>
                <div class="form-group">
                  <label>Domingo:</label>
                  <p>
                  De <input type="time" class="time" name="domingo_hora_inicial" min="00:00" max="23:59" value="08:00" >
                  A <input type="time" class="time" name="domingo_hora_final" min="00:00" max="23:59" value="18:00" >
                  </p>
                </div>
                <div class="form-group">
                  <label>Festivo:</label>
                 <p>
                  De <input type="time" class="time" name="festivo_hora_inicial" min="00:00" max="23:59" value="08:00" >
                  A <input type="time" class="time" name="festivo_hora_finañ" min="00:00" max="23:59" value="18:00" >
                  </p>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagen:</strong>
                    <input type="file" name="file" class="form-control" placeholder=""
                        required="">
                </div>
            </div>
      
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <button id="submit" type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('users') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>

    </form>

</div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
          </div>


</div>
@endsection
@push('page_scripts')
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>


<script>


  $('.time').change(function(e){
    var val=$(this).val()+':00';
    $(this).val(val);
  })

$('#select-cargo').change(function(e){

  if($(this).val()=="agente"){
    $('#section-horario').show();
  }else{
    $('#section-horario').hide();
  }

})

// just for the demos, avoids form submit
var form = $( "#user-new-form" );
$.validator.messages.required = 'Este campo es requerido';
$.validator.messages.email = 'Email invalido';

$('#user-new-form').validate({
  rules: {
        nombre: { required:true },
        email:{ required:true },
        identificacion:{ required:true },
        cargo:{ required:true },
        password:{ required:true },
        file: { 
              required:true ,
              extension:"jpg,jpeg,png",
              maxsize: 400000
        }
    },messages: {
                file:{
                    filesize:" El archivo no debe superar los 400 KB.",
                    extension:"Por favor subir imagenes con extensión .jpg o .png.",
                    maxsize:"Por favor suba una imagen."
                }
            },
    
})

$("#submit").validate({ 
 onsubmit: false,
  
 submitHandler: function(form) {  
   if ($(form).valid())
   {
       form.submit(); 
   }
   return false; // prevent normal form posting
 }
});



/*
$( "#submit" ).click(function(e) {
  e.preventDefault();
  if($( "#user-new-form" ).valid()){
    alert('valido');
    $( "#user-new-form" ).submit();
  }else{
    alert('ERRORES')
  }
});
*/
</script>
@endpush