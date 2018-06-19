@extends('layouts.app')

@section('content')

 
<div class="row">
    <div class="col col-lg-10 offset-1">
            
            @include('prueba.create')
            @include('prueba.modalEdit')
            @include('prueba.modalDelete')
        <table class="table table-bordered">
            <tbody>
                <th>Id</th>
                <th>Nombre</th>
                <th>apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Opciones <button class="btn btn-warning" data-toggle="modal" data-target="#ModalCreate">Nuevo</button>
                </th>
                {{ csrf_field() }}
            </tbody>
            @foreach($empleados as $indexKey => $p)
            <tr class="item{{$p->id}}">
                <td class="col1" hidden>{{ $indexKey+1 }}</td>
                <td>{{$p->id}}</td>
                <td>{{$p->nombres}}</td>
                <td>{{$p->apellidos}}</td>
                <td>{{$p->telefono}}</td>
                <td>{{$p->correo}}</td>
                <td>
                
                <button class="edit-modal btn btn-info" data-id="{{$p->id}}" data-nombre="{{$p->nombres}}" data-apellido="{{$p->apellidos}}" data-telefono="{{$p->telefono}}" data-correo="{{$p->correo}}">
                 Edit</button>
                <button class="delete-modal btn btn-danger" data-nombres="{{$p->nombres}}"><i class="ace-ico fa fa-trash-o bigger-200"></i></button>          
            
                </td>
            </tr>
                        
            @endforeach
        </table>

    </div>  
     
</div>

 

@endsection 

@section('scripts')

<script type="text/javascript"> 

//script para eliminar con peticion ajax

  $(document).on('click', '.delete-modal', function() {
           nombre= $(this).data('nombres');
            $('.txtBorrar').text('Esta seguro que desea eliminar al Empleado '+nombre+'?');          
            $('#deleteModal').modal('show');
            id = $('#id_delete').val();
            
        });
        
        $('.modal-footer').on('click', '.delete', function() {
            $.ajax({
                type:'DELETE',
                url: 'empleados/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
                    toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                    $('.item' + data['id']).remove();
                   
                }
            });
        });

                dd('probando si se captura id: '+id);


//script para editar empleado
$(document).on('click', '.edit-modal', function() {
           
            $('#id_edit').val($(this).data('id'));
            $('#nombres_edit').val($(this).data('nombre'));
            $('#apellidos_edit').val($(this).data('apellido'));
            $('#telefono_edit').val($(this).data('telefono'));
            $('#correo_edit').val($(this).data('correo'));
            id = $('#id_edit').val();
            $('#editModal').modal('show');
        });
        $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
                type: 'PUT',
                url: 'empleados/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#id_edit").val(),
                    'nombres': $('#nombres_edit').val(),
                    'apellidos': $('#apellidos_edit').val(),
                    'telefono': $('#telefono_edit').val(),
                    'correo': $('#correo_edit').val()
                },
                success: function(data) {
                  
                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#editModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);
                        
                    } else {
                        toastr.success('Se ha Modificado Correctamente!', 'Aviso!', {timeOut: 5000});
                        //$('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td class='col1'>" + data.id + "</td><td>" + data.nombres + "</td><td>" + data.apellidos+ "</td><td>"+ data.telefono+ "</td><td>"+ data.correo + "</td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-nombre='" + data.nombres + "' data-apellido='" + data.apellidos + "' data-telefono='" + data.telefono  "' data-correo='" + data.correo"'>Edit</button> <button class="btn btn-danger"><i class="ace-ico fa fa-trash-o bigger-200"></i></button></td></tr>");
                         
                        $('.col1').each(function (index) {
                            $(this).html(index+1);


                        });
                    }
                }
            });
        });        
</script>
@endsection	