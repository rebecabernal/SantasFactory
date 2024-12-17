@extends('layouts.app')
@section('content')

    <div class="backBtnContainer">
        <a href="{{ route('toyshome') }}" class="backBtn">🔙</a>
    </div>

    <div class="tableToy">
        <h2 class="form-title">Edit toy</h2>
        <form action="{{ route('toysupdate', $toy->id) }}" method="PUT" class="form-container">

            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-input" required placeholder="{{ $toy->name}}">
            </div>

            <div class="form-group">
                <label for="photo" class="form-label">Photo</label>
                <input type="text" name="photo" id="photo" class="form-input" required placeholder="{{ $toy->photo}}">
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-select" required placeholder="{{ $toy->description}}">
            </div>

            <div class="form-group">
                <label for="min_age" class="form-label">Minimum Age</label>
                <select type="num" name="min_age" id="min_age" class="form-select" required placeholder="{{ $toy->min_age}}">
                    <option>0</option>
                    <option>7</option>
                    <option>12</option>
                </select>
            </div>

            <div class="form-actions">
                <button type="submit" class="form-button">Edit Toy</button>
            </div>
        </form>
    </div>
@endsection

