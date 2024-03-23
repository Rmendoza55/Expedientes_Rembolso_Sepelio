@extends('template')

@section('title','crear_sepelio')

@push('css')

@endpush

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h6 mb-2 text-gray-800">Expedientes de Sepelio</h1>
    
    <!--Formulario de Sepelio-->
    <div>
        <div class="card shadow mb-4" style="padding: 1%">
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-gradient-info">
                    <h6 class="m-0 font-weight-info text-light">Datos Sobre la Presentación del Expediente</h6>
                </div>
                <div class="card-body row">
                    
                    <div class="col-sm-12 col-lg-4 mb-sm-3">
                        <h6>Lugar de Presentacion</h6>
                        <select class="form-control form-control" style="padding-right: 60%;"
                            id="exampleInputEmail" aria-describedby="emailHelp"
                            placeholder="Seleccione el Distrito">
                            <option value="">Seleccione el Distrito</option>
                            <option value="2">Rimac</option>
                            <option value="3">Independencia</option>
                            <option value="4">San Martin de Porres</option>
                            <option value="5">Los Olivos</option>
                            <option value="6">Comas</option>
                            <option value="7">Puente Piedra</option>
                            <option value="8">Carabayllo</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-4 mb-sm-3">
                        <h6>Fecha de Presentacion</h6>
                        <input type="date" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 col-lg-4 mb-sm-3">
                        <h6>IPRESS Publica</h6>
                        <select class="form-control form-control" style="padding-right: 60%;"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                            <option value="">Seleccione el IPRESS</option>
                            <option value="2">CMI Rimac</option>
                            <option value="3">CMI Piedra Liza</option>
                            <option value="4">CS Caqueta</option>
                            <option value="5">CS Leoncio Prado</option>
                            <option value="6">CS Ciudad y Campo</option>
                            <option value="7">CS Mariscal Castilla</option>
                            <option value="8">CS Villa los Angeles</option>
                            <option value="9">CS San Juan de Amancaes</option>
                            <option value="10">CS Flor de Amancaes</option>
                            <option value="11">CSMC Samay</option>
                        </select>
                    </div>
                        
                </div>
            </div>
    
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-gradient-info">
                    <h6 class="m-0 font-weight-info text-light">Datos del Acreditado del Sepelio</h6>
                </div>
                <div class="card-body row">
                    <div class="col-sm-12 col-lg-2 mb-sm-3">
                        <h6>Documento del Acreditado</h6>
                        <input type="number" class="form-control"
                        id="exampleInputPassword" placeholder="Ingrese el Documento">
                    </div>
                    <div class="col-auto">
                        <br>
                        <button class="btn btn-info" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                    <div class="col-sm-12 col-lg-4 mb-sm-3">
                        <h6>Nombres y Apellidos del Acreditado</h6>
                        <input type="text" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 col-lg-5 mb-sm-3">
                        <h6>Direccion del Acreditado</h6>
                        <input type="text" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <br>
                    <div class="col-sm-12 col-lg-9 mb-sm-3">
                        <h6>Referencia Domiciliaria</h6>
                        <input type="text" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 col-lg-2 mb-sm-3">
                        <h6>Edad</h6>
                        <input type="number" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <br>
                    <div class="col-sm-12 col-lg-4 mb-sm-3">
                        <h6>Departamento</h6>
                        <select class="form-control form-control" style="padding-right: 60%;"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                            <option value="">Seleccione el Departamento</option>
                            <option value="2">LIMA</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-4 mb-sm-3">
                        <h6>Provincia</h6>
                        <select class="form-control form-control" style="padding-right: 60%;"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                            <option value="">Seleccione la Provincia</option>
                            <option value="2">LIMA</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-4 mb-sm-3">
                        <h6>Distrito</h6>
                        <select class="form-control form-control" style="padding-right: 60%;"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                            <option value="">Seleccione el Distrito</option>
                            <option value="2">RIMAC</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-sm-12 col-lg-3 mb-sm-3">
                        <h6>Telefono</h6>
                        <input type="text" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 col-lg-3 mb-sm-3">
                        <h6>Celular</h6>
                        <input type="text" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 col-lg-3 mb-sm-3">
                        <h6>Correo Electronico</h6>
                        <input type="email" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 col-lg-2 mb-sm-3">
                        <h6>Parentesco</h6>
                        <select class="form-control form-control" style="padding-right: 60%;"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                            <option value="">Ninguno</option>
                            <option value="2">Hijo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-gradient-info">
                    <h6 class="m-0 font-weight-info text-light">Datos del Fallecido</h6>
                </div>
                <div class="card-body row">
                    <div class="col-sm-12 col-lg-2 mb-sm-3">
                        <h6>Fecha de Fallecimiento</h6>
                        <input type="date" class="form-control"
                        id="exampleInputPassword" placeholder="Ingrese el Documento">
                    </div>
                    <div class="col-sm-12 col-lg-2 mb-sm-3">
                        <h6>Documento del Fallecido</h6>
                        <input type="number" class="form-control"
                        id="exampleInputPassword" placeholder="Ingrese el Documento">
                    </div>
                    <div class="col-auto">
                        <br>
                        <button class="btn btn-info" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                    <div class="col-sm-12 col-lg-5 mb-sm-3">
                        <h6>Nombres y Apellidos del Fallecido</h6>
                        <input type="text" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 col-lg-2 mb-sm-3">
                        <h6>Contrato Afiliacion</h6>
                        <input type="text" class="form-control"
                            id="exampleInputEmail" placeholder="Ejemp. 2 - XXXXXXXX">
                    </div>
                    <br>
                    <div class="col-sm-12 col-lg-9 mb-sm-3">
                        <h6>Referencia Domiciliaria</h6>
                        <input type="text" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-12 col-lg-2 mb-sm-3">
                        <h6>Edad</h6>
                        <input type="number" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <br>
                    <div class="col-sm-12 col-lg-4 mb-sm-3">
                        <h6>Departamento</h6>
                        <select class="form-control form-control" style="padding-right: 60%;"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                            <option value="">Seleccione el Departamento</option>
                            <option value="2">LIMA</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-4 mb-sm-3">
                        <h6>Provincia</h6>
                        <select class="form-control form-control" style="padding-right: 60%;"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                            <option value="">Seleccione la Provincia</option>
                            <option value="2">LIMA</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-4 mb-sm-3">
                        <h6>Distrito</h6>
                        <select class="form-control form-control" style="padding-right: 60%;"
                            id="exampleInputEmail" aria-describedby="emailHelp">
                            <option value="">Seleccione el Distrito</option>
                            <option value="2">RIMAC</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-gradient-info">
                    <h6 class="m-0 font-weight-info text-light">Otros Datos del Expediente</h6>
                </div>
                <div class="card-body row">
                    <div class="col-sm-12 col-lg-2 mb-sm-3">
                        <h6>Importe de la Boleta</h6>
                        <input type="number" class="form-control"
                        id="exampleInputPassword" placeholder="S/. 00">
                    </div>
                    <div class="col-sm-12 col-lg-2 mb-sm-3">
                        <h6>N° de Comprobante de Pago</h6>
                        <input type="text" class="form-control"
                        id="exampleInputPassword" placeholder="Ejemplo. EB01-4">
                    </div>
                </div>
            </div>
            <div class="card-bpdy row">
                <div class="col-auto" style="margin-right: 25%">
                    <br>
                    <button class="btn btn-success" type="button" style="width: 45%">
                        <img src="img/img-project/circle-arrow-left-solid.svg" alt="" style="width: 12%; height: auto; margin-right: 15px">
                        Regresar
                    </button>
                </div>
                <div class="col-auto text-center">
                    <br>
                    <button class="btn btn-info" type="button" style="width: 45%">
                        <img src="img/img-project/floppy-disk-solid.svg" style="width: 12%; height: auto; margin-right: 15px">
                        Guardar
                    </button>
                </div>
            </div>
        </div>
    </div>
    

@endsection

@push('js')
    
@endpush