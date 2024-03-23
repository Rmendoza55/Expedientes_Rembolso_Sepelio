@extends('template')

@section('title','registro_sepelios')

@push('css')
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Registro de Sepelios</h1>
    <p class="mb-4">Es el reembolso de los gastos de sepelio de un asegurado de los planes SIS Gratuito,
         SIS Independiente, SIS Emprendedor, SIS para todos y SIS Microempresas del Seguro Integral de Salud (SIS). 
         Este se realiza en las Instituciones Prestadoras de Servicio de Salud (IPRESS) y 
         cubre hasta un monto máximo de S/ 1,000.00.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Expedientes de Sepelio</h6>
        </div>
        <div style="margin-top: 1%; margin-left: 1%">
            <a href="{{ route('crear_sepelio') }}" class=" btn  btn-info shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Registrar Nuevo Sepelio</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Nº Expediente</th>
                            <th>Acreditado</th>
                            <th>Fallecido</th>
                            <th>Fecha Fallecimiento</th>
                            <th>Fecha Recepcion</th>
                            <th>Dias desde la Recepcion</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nº</th>
                            <th>Nº Expediente</th>
                            <th>Acreditado</th>
                            <th>Fallecido</th>
                            <th>Fecha Fallecimiento</th>
                            <th>Fecha Recepcion</th>
                            <th>Dias desde la Recepcion</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>8620</td>
                            <td>HUGO LUIS APOLITANO RIOS</td>
                            <td>SORAIDA RIOS ESTELA</td>
                            <td>2024-01-13</td>
                            <td>2024-01-29</td>
                            <td>46</td>
                            <td>DIGITADO</td>
                            <td>Editar eliminar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@push('js')
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
@endpush