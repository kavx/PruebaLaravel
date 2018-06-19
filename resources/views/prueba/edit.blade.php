<!-- Modal form to edit a form -->
<div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editar Empleado</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">

            <div class="form-group">
            <label  class="control-label col-sm-2" for="id">ID:</label>
            <div class="col-sm-10">            
            <input type="text" class="form-control" id="id_edit" disabled required>   
            </div>
            </div>
                        
            <div class="form-group">
            <label class="col-form-label" for="nombres">Nombres:</label>
            <div class="col-sm-10">
            <input type="text" id="nombres_edit" class="form-control" autofocus required>    
            </div>
            </div>

            <div class="form-group">
            <label class="col-form-label" for="apellidos">Apellidos:</label>
            <div class="col-sm-10">
            <input type="text" id="apellidos_edit" class="form-control"  required>
            </div>
            </div>

            <div class="form-group"> 
            <label class="col-form-label" for="telefono">Telefono:</label>
            <div class="col-sm-10">
            <input type="text" id="telefono_edit" class="form-control"  required>
            </div>
            </div>

            <div class="form-group"> 
            <div class="col-sm-10">
            <label class="col-form-label" for="correo">Correo:</label>
            
            <input type="email" id="correo_edit" class="form-control"  required>
            </div>
            </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span> Editar
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>