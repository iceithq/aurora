@extends('layouts.app')
@section('content')
    <h3>Edit patient</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $patient->name }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea id="address" name="address" class="form-control">{{ $patient->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ $patient->phone }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" value="{{ $patient->email }}">
        </div>

        <button type="submit" class="btn btn-outline-primary">Update Patient</button>
        or <a href="{{ route('patients.index') }}">cancel</a>
    </form>

    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-outline-danger ">Delete</button>
    </form>
@endsection
