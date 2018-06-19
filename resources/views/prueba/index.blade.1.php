@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col col-lg-10 offset-1">
            
            @include('prueba.create')
        <table class="table table-bordered">
            <tbody>
                <th>Id</th>
                <th>Nombre</th>
                <th>apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Opciones <button class="btn btn-warning" data-toggle="modal" data-target="#ModalCreate">Nuevo</button>
                </th>
            </tbody>
            @foreach($empleados as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nombres}}</td>
                <td>{{$p->apellidos}}</td>
                <td>{{$p->telefono}}</td>
                <td>{{$p->correo}}</td>
                <td>
                <button class="btn btn-success">Editar</button>

                {{Form::open(array('action'=>array('EmpleadoController@destroy',$p->id), 'method'=> 'delete'))}}
                <a class="red btnBorrar" href="">
                  <i class="ace-ico fa fa-trash-o bigger-200"></i>
                </a>
                {{Form::Close()}}
            
                </td>
            </tr>
                        
            @endforeach
        </table>
        
    </div>  
     
</div>

 

@endsection 

@section('scripts')

<script type="text/javascript"> 


$(document).ready(function(){  

$('.btnBorrar').click(function(e){

e.preventDefault();
if(! confirm("Esta seguro que desea Eliminar?")){
return false;
}

var row= $(this).parents('tr');
var form= $(this).parents('form');
var url= form.attr('action');

$.post(url,form.serialize(),function(result){
row.fadeOut();
// toastr.success('Empleado Eliminado Correctamente');
})

.fail(function(){
// toastr.error('hubo un error en la peticoin');
})
})

})
</script>
@endsection	