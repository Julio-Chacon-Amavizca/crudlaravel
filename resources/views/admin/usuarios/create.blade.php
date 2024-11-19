@extends('layouts.admin')

@section('content')
<div class="row">
    <h1>Nuevo Usuario</h1>
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Llene los datos</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/usuarios')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" id="name">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                                @error('name')
                                <s class="alert alert-danger">{{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" id="password">
                                <label for="">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" id="password_verify">
                                <label for="">Confirmar Contraseña</label>
                                <input type="password" class="form-control" name="password_verify" id="password_verify"
                                    placeholder="Confirmar Contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{url('/admin/usuarios')}}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy2"></i> Guardar Registro
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection