@extends('layouts.app')
@section('content')
    <h3>Patients</h3>
    <p>
        <a href="{{ route('patients.create') }}" class="btn btn-outline-primary ">Create patient</a>
    </p>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($patients->isEmpty())
        <p>No patients available.</p>
    @else
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->phone }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>
                            <a href="{{ route('patients.edit', $patient->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
