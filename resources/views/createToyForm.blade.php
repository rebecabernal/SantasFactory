@extends('layouts.app')
@section('content')

    <div class="backBtnContainer">
        <a href="{{ route('toyshome') }}" class="backBtn">🔙</a>
    </div>

    <div class="tableToy">
        <h2 class="form-title">Create toy</h2>
        <form action="{{ route('toysstore') }}" method="POST" class="form-container">

        @csrf

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-input">
            </div>

            <div class="form-group">
                <label for="photo" class="form-label">Photo</label>
                <input type="text" name="photo" id="photo" class="form-input">
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <select type="text" id="description" class="form-select">
            </div>

            <div class="form-group">
                <label for="min_age" class="form-label">Minimum Age</label>
                <input type="number" id="min_age" id="min_age" class="form-input">
            </div>

            <div class="form-actions">
                <button type="submit" class="form-button">Create Toy</button>
            </div>
        </form>
    </div>
@endsection

