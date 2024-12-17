@extends('layouts.app')
@section('content')

<div class="backBtnContainer">
        <a href="{{ route('santashome') }}" class="backBtn">🔙</a>
</div>

<div class="tableKid">
    <h2 class="form-title">Kids</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Photo</th>
                <th>Age</th>
                <th>Behaviour</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kids as $kid)
                <tr>
                    <td>{{$kid->id}}</td>
                    <td>{{$kid->name}}</td>
                    <td>{{$kid->surname}}</td>
                    <td>{{$kid->photo}}</td>
                    <td>{{$kid->age}}</td>
                    <td>
                        @if ($kid->behaviour === 1)
                            <span class="active">Good</span>
                        @else
                            <span class="inactive">Bad</span>
                        @endif
                    </td>
                    <td>{{ $kid->created_at->format('d/m/y')}}</td>
                    <td>
                        <a class="crudBtn" href="kids/show/{{$kid->id}}">👀</a>
                        <a class="crudBtn" href="kids/create">🆕</a>
                        <a class="crudBtn"href="kids/edit/{{$kid->id}}">📝</a>
                        <a class="crudBtn" href="?action=delete&id={{$kid->id}}">🗑️</a></td>
                </tr>
            @endforeach
        <tbody>
    </table>
</div>
@endsection
