<!DOCTYPE html>
<html>
<div class="modal fade text-left" id="md_exp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title white" id="myModalLabel16">Experiencia Laboral
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-12">

                            <div class="form-group has-icon-left">
                                <label for="Id-icon">Dui del personal</label>
                                <!-- <select class="choices form-select">

                                    <option value="square">Seleccione...</option>
                                    <option value="square">[05580999-7]JUAN ANTONIO QUESADA</option>
                                    <option value="rectangle">[05580339-1] RIGOBERTO JOSUE GONZALES</option>
                                    <option value="rombo">[03580000-3] MAXIMILIANO PONCE DE LEON</option>

                                </select> -->
                                <input type="text" class="form-control" placeholder="12536360-9 Marta Gloria Campos" id="Apellido-icon">
                            </div>
                            <label for="Id-icon">Trabajo realizado</label>
                            <div class="input-group">
                                <select class="form-select">
                                    <option value="square">Seleccione...</option>
                                    <option value="square">Mecanico automotriz</option>
                                    <option value="square">ALbañil</option>
                                    <option value="square">Mantenimineto de computadoras</option>
                                </select>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#md_addtrabajo" type="button" id="inputGroupFileAddon04">Agregar</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group has-icon-left">
                                <label for="Correo-icon">Fecha de inicio</label>
                                <div class="position-relative">
                                    <?php $hoy = getdate(); ?>
                                    <input type="date" max="<?php $hoy = date("Y-m-d");
                                                            echo $hoy; ?>" class="form-control" placeholder="" id="Id-icon">

                                    <div class="form-control-icon">
                                        <i class="bi bi-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="Correo-icon">Fecha de fin</label>
                                <div class="position-relative">
                                    <?php $hoy = getdate(); ?>
                                    <input type="date" max="<?php $hoy = date("Y-m-d");
                                                            echo $hoy; ?>" class="form-control" placeholder="" id="Id-icon">

                                    <div class="form-control-icon">
                                        <i class="bi bi-calendar"></i>
                                    </div>
                                </div>
                            </div>
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

</html>