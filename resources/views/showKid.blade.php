@extends('layouts.app')
@section('content')

    <div class="backBtnContainer">
        <a href="{{ route('kidshome') }}" class="backBtn">🔙</a>
    </div>

    <div class="tablekid">
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
            </tr>
            </thead>
            <tb>
                <tr>
                    <td>{{$kids->id}}</td>
                    <td>{{$kids->name}}</td>
                    <td>{{$kids->surname}}</td>
                    <td>{{$kids->photo}}</td>
                    <td>{{$kids->age}}</td>
                    <td>
                        @if ($kids->behaviour === 1)
                            <span class="active">Good</span>
                        @else
                            <span class="inactive">Bad</span>
                        @endif
                    </td>
                    <td>{{$kids->created_at->format('d/m/y')}}</td>
                </tr>
            <tb>
        </table>
    </div>
@endsection