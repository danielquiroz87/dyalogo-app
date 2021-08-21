@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="title" style="margin-top: 10px">Administrar Usuarios</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div>
        </div>
    </div>


@if(Session::has('flash_message'))
    <div class="alert alert-success">
      <span class="glyphicon glyphicon-ok"></span>
      <em> {!! session('flash_message') !!}</em>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@endif
@if(Session::has('flash_message_delete'))
    <div class="alert alert-danger">
      <span class="glyphicon glyphicon-ok"></span>
      <em> {!! session('flash_message_delete') !!}</em>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@endif

    <a class="btn btn-primary" href="{{route('user.new')}}">Nuevo</a>
	<br/>
	<br/>
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista De Usuarios</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Identificación</th>
                      <th>Email</th>
                      <th>Cargo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach ($users as $user)
                    <tr>
                      <td>{{$user->nombre}}</td>
                      <td>{{$user->identificacion}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->cargo}}</td>
                      <td>
                      	<a href="{{route('user.edit', $user->id)}}" title="Editar"><i class="fa fa-fw fa-edit"></i></a>
                      	<a href="{{route('user.delete', $user->id)}}" title="Eliminar" class="eliminar"><i class="fa fa-fw fa-trash"></i></a>
                      </td>
                    </tr>
                  	@endforeach
                  </tbody>
                  <tfoot>
                  	<tr>
                  	

                  	</tr>
                  </tfoot>
                </table>

                <div class="d-flex justify-content-center">
   				    <div class="">
   				    	<?php echo $users->links(); ?>
   				    </div>

				</div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


        	 <form action="#" method="POST" id="user-delete-form"  >
    				{{ csrf_field() }}
      			<input type="hidden" name="id" id="userid" value="0">
   
        	</form>


@endsection

@push('page_scripts')
<script type="text/javascript">
 $(document).ready(function(){
 	$('.eliminar').click(function(e){
 		e.preventDefault();
 		var url=$(this).attr('href');
 		$('#user-delete-form').attr('action',url);

 		Swal
	    .fire({
	        title: "Eliminar",
	        text: "Está seguro de eliminar este usuario?",
	        icon: 'warning',
	        showCancelButton: true,
	        confirmButtonText: "Sí, eliminar",
	        cancelButtonText: "Cancelar",
	    })
	    .then(resultado => {
	        if (resultado.value) {
	            // Hicieron click en "Sí"
 				$('#user-delete-form').submit();
	        } else {
	            // Dijeron que no
	            console.log("*NO se elimina la venta*");
	        }
	    });



 	})
 })
</script>
@endpush
