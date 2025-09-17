<div class="modal modal-xl fade" id="show-incident" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ver Incidente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-center">Información de contacto</h5>
                <div class="card p-3">
                    <div class="row">
                        <div class="col-lg-2 my-1"><strong>Nombre: </strong></div>
                        <div class="col-lg-4 my-1" id="name"></div>
                        <div class="col-lg-2 my-1"><strong>Correo electrónico: </strong></div>
                        <div class="col-lg-4 my-1" id="email"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 my-1"><strong>Institución: </strong></div>
                        <div class="col-lg-4 my-1" id="entity"></div>
                        <div class="col-lg-2 my-1"><strong>Tipo de Institución: </strong></div>
                        <div class="col-lg-4 my-1" id="entity_type"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 my-1"><strong>Teléfono: </strong></div>
                        <div class="col-lg-4 my-1" id="phone"></div>
                        <div class="col-lg-2 my-1"><strong>País: </strong></div>
                        <div class="col-lg-4 my-1" id="state"></div>
                    </div>
                </div>
                <br>
                <h5 class="text-center">Información del incidente</h5>
                <div class="card p-3">
                    <div class="row">
                        <div class="col-lg-2 my-1"><strong>Fecha Detección: </strong></div>
                        <div class="col-lg-4 my-1" id="date"></div>
                        <div class="col-lg-2 my-1"><strong>Hora Detección: </strong></div>
                        <div class="col-lg-4 my-1" id="time"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 my-1"><strong>Host(s) Objetivos: </strong></div>
                        <div class="col-lg-4 my-1" id="objetive_host"></div>
                        <div class="col-lg-2 my-1"><strong>Host(s) Origen: </strong></div>
                        <div class="col-lg-4 my-1" id="origin_host"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 my-1"><strong>Valoración: </strong></div>
                        <div class="col-lg-4 my-1" id="assessment"></div>
                        <div class="col-lg-2 my-1"><strong>Evidenciable: </strong></div>
                        <div class="col-lg-4 my-1" id="evident"><a href=""></a></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 my-1"><strong>Servicios Afectados: </strong></div>
                        <div class="col-lg-4 my-1" id="affected_services"></div>
                        <div class="col-lg-2 my-1"><strong>Infraestructura Afectada: </strong></div>
                        <div class="col-lg-4 my-1" id="affected_infrastructure"></div>
                    </div>
                    <div class="row">
                        <div class="col-12 my-1"><strong>Descripción del Incidente: </strong></div>
                        <div class="col-12 my-1" id="description">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
