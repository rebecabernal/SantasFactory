
@extends('layouts.app')
@section('content')

    <div class="backBtnContainer">
        <a href="{{ route('home') }}" class="backBtn">🔙</a>
    </div>

    <div class="tableKid">
        <h2 class="form-title">Create Kid</h2>
        <form action="{{ route('create', $kid->id) }}" method="POST" class="form-container">

        @csrf

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-input" required placeholder="{{ $kid->name}}">
            </div>

            <div class="form-group">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" name="surname" id="surname" class="form-input" required placeholder="{{ $kid->surname}}">
            </div>

            <div class="form-group">
                <label for="photo" class="form-label">Photo</label>
                <input type="text" name="photo" id="photo" class="form-input" required placeholder="{{ $kid->photo}}">
            </div>

            <div class="form-group">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" id="age" class="form-input" required placeholder="{{ $kid->age}}">
            </div>

            <div class="form-group">
                <label for="behaviour" class="form-label">Behaviour</label>
                <select name="behaviour" id="behaviour" class="form-select" required>
                    <option value="1">Good</option>
                    <option value="0">Bad</option>
                </select>
            </div>

            <div class="form-actions">
                <button type="submit" class="form-button">Create Kid</button>
            </div>
        </form>
    </div>
@endsection
