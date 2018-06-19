
<!--<form action="EmpleadoController" method= "post" >-->
{!!Form::open(array('url'=>'empleados','method'=>'POST','autocomplete'=>'off'))!!}   
{{Form::token()}} 
<div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar nuevo empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
            <div class="form-group">
            <label class="col-form-label">Nombres:</label>
            <input type="text" name="nombres" class="form-control" placeholder="Escriba su nombre" required>         
            </div>

            <div class="form-group">
            <label class="col-form-label">Apellidos:</label>
            <input type="text" name="apellidos" class="form-control" placeholder="Escriba sus apellidos" required>
            </div>

            <div class="form-group"> 
            <label class="col-form-label">Telefono:</label>
            <input type="text" name="telefono" class="form-control" placeholder="Escriba su numero de telefono" required>
            </div>

            <div class="form-group"> 
            <label class="col-form-label">Correo:</label>
            <input type="email" name="correo" class="form-control" placeholder="Escriba su correo" required>
            </div>

        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Agregar Empleado</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  
</div>
{!!Form::close()!!}