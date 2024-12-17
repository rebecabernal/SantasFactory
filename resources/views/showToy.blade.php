@extends('layouts.app')
@section('content')

    <div class="backBtnContainer">
        <a href="{{ route('toyshome') }}" class="backBtn">🔙</a>
    </div>

    <div class="tableToy">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Minimun Age</th>
                <th>Created at</th>
            </tr>
            </thead>
            <tb>
                <tr>
                    <td>{{$toys->id}}</td>
                    <td>{{$toys->name}}</td>
                    <td>{{$toys->photo}}</td>
                    <td>{{$toys->description}}</td>
                    <td>+{{$toys->min_age}}</td>
                    <td>{{$toys->created_at->format('d/m/y')}}</td>
                </tr>
            <tb>
        </table>
    </div>
@endsection