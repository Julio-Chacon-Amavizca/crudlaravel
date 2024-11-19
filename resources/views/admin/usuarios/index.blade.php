@extends('layouts.admin')

@section('content')
<h1>Listado en usuarios</h1>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Datos Registrados</h3>
                <div class="card-tools">
                    <a href="{{url('/admin/usuarios/create')}}" class="btn btn-primary"><i
                            class="bi bi-person-fill-add"></i>
                        Nuevo Usuario</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-sm table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <center>ID</center>
                            </th>
                            <th>
                                <center>Nombre</center>
                            </th>
                            <th>
                                <center>Email</center>
                            </th>
                            <th>
                                <center>Acciones</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>
                                <center>{{ $usuario->id }}</center>
                            </td>
                            <td>
                                <center>{{ $usuario->name }}</center>
                            </td>
                            <td>
                                <center>{{ $usuario->email }}</center>
                            </td>
                            <td>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection