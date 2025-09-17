@extends('layouts.app')
@section('title', 'Boletines')
@endif

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Boletines</h3>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="margin-bottom:0;">Listado de Boletines</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"
                                    title="Collapse">
                                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Titulo</th>
                                            <th>Nivel de riesgo</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($modules as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>@if($item->status==1) <span class="badge rounded-pill text-bg-success">Visible</span> @else <span class="badge rounded-pill text-bg-secondary">Oculta</span> @endif</td>
                                            <td>
                                                <form style="display: inline-block;" class="mx-2" action="{{ route('modules.changeStatus',$item->id) }}" method="post">
                                                    @csrf
                                                    <button class="btn" type="submit">
                                                        @if($item->status == 1)
                                                        <a title="Desactivar @if($type==1) Sección @elseif($type==2) Página @endif"><i class="text-secondary bi bi-ban-fill"></i></a>
                                                          @else
                                                        <a title="Activar @if($type==1) Sección @elseif($type==2) Página @endif"><i class="text-success bi bi-check-circle-fill"></i></a>
                                                        @endif
                                                    </button>
                                                </form>

                                                <a class="text-dark " title="Editar @if($type==1) Sección @elseif($type==2) Página @endif" class="mx-2 text-dark"><i class="bi bi-pencil-fill"></i></a>
                                                <a title="Ver @if($type==1) Sección @elseif($type==2) Página @endif" class="mx-2 text-dark"><i class="bi bi-eye-fill"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <!--end::Row-->

        </div>
        <!--end::Container-->

    </div>
    <!--end::App Content-->
@endsection

@push('scripts')
    <script>
        var table = new DataTable('#myTable', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.3.4/i18n/es-ES.json',
            },
        });

        const btnsShow = document.getElementsByName('btns-show');
        for (const btn of btnsShow) {
            btn.addEventListener('click', async (e) => {
                try {
                    let response = await fetch("{{ route('incidents.getIncident', ':id') }}".replace(':id', e.target.id), {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                    });

                    if (!response.ok) {
                        throw new Error("Error en la petición: " + response.status);
                    }

                    let result = await response.json();
                    console.log(result.incident.entity_type.name);
                    document.getElementById('name').textContent=result.incident.name;
                    document.getElementById('email').textContent=result.incident.email;
                    document.getElementById('entity').textContent=result.incident.entity;
                    document.getElementById('entity_type').textContent=result.incident.entity_type.name;
                    document.getElementById('phone').textContent=result.incident.phone;
                    document.getElementById('state').textContent=result.incident.state;
                    document.getElementById('date').textContent=result.incident.detection_date;
                    document.getElementById('time').textContent=result.incident.detection_time;
                    document.getElementById('objetive_host').textContent=result.incident.objetive_host;
                    document.getElementById('origin_host').textContent=result.incident.origin_host;
                    document.getElementById('assessment').textContent=result.incident.assessment;
                    document.getElementById('evident').textContent=result.incident.evident;
                    document.getElementById('affected_services').textContent=result.incident.affected_service.name;
                    document.getElementById('affected_infrastructure').textContent=result.incident.affected_infrastructure.name;
                    document.getElementById('description').textContent=result.incident.description;

                    return result;
                } catch (error) {
                    console.error("Fallo en fetch:", error);
                }
            });
        }

    </script>
@endpush
