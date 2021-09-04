@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{route('brand.form')}}" class="btn btn-primary">Nueva marca</a>
        </div>

</div>

<!-- @if(Session::has('message'))
<p class="alert alert-success">
    {{Session::get('message')}}

</p>
@endif -->


<!-- Vista de la tabla brand  -->
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td>{{$brand->name}}</td>
            <td class="col-sm-2">
                <a href="{{ route('brand.form',  ['id' => $brand->id]) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('brand.delete', ['id'=>$brand->id]) }}" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection