<!DOCTYPE html>
    <html>

    <div class="modal fade text-left" id="md_armas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title white" id="myModalLabel20">Arma
                    </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">

                <div class="form-group has-icon-left">
                        <label for="Id-icon">Arma</label>
                        <select class="choices form-select">

                            <option value="square">Seleccione...</option>
                            <option value="square">Ametralladoras</option>
                            <option value="rectangle">Fusiles de francotirador</option>
                            <option value="rombo">Fusiles de asalto</option>

                        </select>
                    </div>

                    <div class="form-group has-icon-left">
                                <label for="Id-icon">DUI</label>
                                <select class="choices form-select">
                                    <option value="square">Seleccione...</option>
                                    <option value="square">[05580999-7]JUAN ANTONIO QUESADA</option>
                                    <option value="rectangle">[05580339-1] RIGOBERTO JOSUE GONZALES</option>
                                    <option value="rombo">[03580000-3] MAXIMILIANO PONCE DE LEON</option>

                                </select>
                            </div>

                    <div class="form-group has-icon-left">
                        <label for="Apellido-icon">Fecha de asignación</label>
                        <div class="position-relative">
                            <input type="date" class="form-control" placeholder="####-###-#####-##-#" id="Serie-icon">
                            <div class="form-control-icon">
                                <i class="bi bi-card-heading"></i>
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