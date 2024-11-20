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
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name" placeholder="Nombre"
                                    value="{{old('name')}}" required>
                                @error('name')
                                <small style="color: rgb(208, 17, 17)">{{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Correo electronico</label>
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    value="{{old('email')}}" required>
                                @error('email')
                                <small style="color: rgb(208, 17, 17)">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input type="password" class="form-control" name="password" placeholder="Contraseña"
                                    required>
                                @error('password')
                                <small style="color: rgb(208, 17, 17)">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Confirmar Contraseña</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="Confirmar Contraseña" required>
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