@extends('layouts.admin')

@section('content')
<div class="row">
    <h1>Principal</h1>
</div>
<hr>
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{$usuarios->count()}}</h3>
                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <a href="{{url('/admin/usuarios')}}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>
@endsection