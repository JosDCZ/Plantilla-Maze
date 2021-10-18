<!DOCTYPE html> 
<html> 
 
<div class="modal fade text-left" id="modalhabilidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true"> 
                    <div class="modal-dialog modal-dialog-centered" role="document"> 
                        <div class="modal-content"> 
                            <div class="modal-header bg-primary"> 
                                <h4 class="modal-title white" id="myModalLabel16">Especialidad
                                </h4> 
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> 
                                    <i data-feather="x"></i> 
                                </button> 
                            </div> 
                            <div class="modal-body"> 
                                <div class="row"> 
                                    <div class=""> 
                                         
                                        <div class="form-group has-icon-left"> 
                                            <label for="Id-icon">Dui Empleado</label> 
                                            <select class="choices form-select"> 
 
                                                        <option value="square">Seleccione...</option> 
                                                        <option value="square">[05580999-7]JUAN ANTONIO QUESADA</option> 
                                                        <option value="rectangle">[05580339-1] RIGOBERTO JOSUE GONZALES</option> 
                                                        <option value="rombo">[03580000-3] MAXIMILIANO PONCE DE LEON</option> 
                                                         
                                            </select> 
                                        </div> 
                                        <div class="form-group has-icon-left"> 
                                            <label for="Id-icon">Especialidad</label> 
                                            <select class="choices form-select"> 
 
                                                        <option value="square">Seleccione...</option> 
                                                        <option value="square">Grupo Especial de Operaciones </option> 
                                                        <option value="rectangle">Unidades de Intervención Policial</option> 
                                                        <option value="rombo">Unidad de Caballería</option>
                                                        <option value="rombo">Unidad de Guías Caninos.</option> 
                                                         
                                            </select> 
                                        </div> 
 
                                        <div class="form-group has-icon-left"> 
                                            <label for="Apellido-icon">Fecha Asignación</label> 
                                            <div class="position-relative"> 
                                                <input type="date" class="form-control" id="Apellido-icon"> 
                                                <div class="form-control-icon"> 
                                                    <i class="bi bi-credit-card-2-front"></i> 
                                                </div> 
                                            </div> 
                                        </div> 
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">Tipo Especialidad</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Le gusta
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    La desempeña
                                                </label>
                                            </div>

                                        </div>
                                </div> 
                            </div> 
                            <div class="modal-footer"> 
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" onclick="Limpiar()"> 
                                    <i class="bx bx-x d-block d-sm-none"></i> 
                                    <span class="d-none d-sm-block">Cancelar</span> 
                                </button> 
                                <button type="button" class="btn btn-primary ml-1" onclick="validarCampos()"> 
                                    <i class="bx bx-check d-block d-sm-none"></i> 
                                    <span class="d-none d-sm-block">Registrar</span> 
                                </button> 
                                 
                            </div> 
                        </div> 
                    </div> 
                </div> 
    </div>
</html>