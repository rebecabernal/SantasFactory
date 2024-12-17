@extends('layouts.app')
@section('content')

<div class="backBtnContainer">
        <a href="{{ route('santashome') }}" class="backBtn">🔙</a>
</div>

<div class="tableToy">
<h2 class="form-title">Toys</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Minimun Age</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tb>
            @foreach ($toys as $toy)
                <tr>
                    <td>{{$toy->id}}</td>
                    <td>{{$toy->name}}</td>
                    <td>{{$toy->photo}}</td>
                    <td>{{$toy->description}}</td>
                    <td>+{{$toy->min_age}}</td>
                    <td>{{$toy->created_at->format('d/m/y')}}</td>
                    <td>
                        <a class="crudBtn" href="toys/show/{{$toy->id}}">👀</a>
                        <a class="crudBtn" href="toys/create">🆕</a>
                        <a class="crudBtn"href="toys/edit/{{$toy->id}}">📝</a>
                        <a class="crudBtn" href="?action=delete&id={{$toy->id}}">🗑️</a></td>
                </tr>
            @endforeach
        <tb>
    </table>
</div>
@endsection
