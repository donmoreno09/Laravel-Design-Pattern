@extends('layouts')

@section('content')

<div class="row">
    <div class="col-xl-6 m-auto shadow p-3">

        <h4 class="text-center fw-bold border-bottom pb-2"> Factor Pattern in Laravel 11 </h4>

        {{-- Session Flash message --}}
        @if ($message = session('success'))
            <div class="alert alert-success"> {{ $message }}</div>
        @elseif ($message = session('error'))
            <div class="alert alert-danger"> {{ $message }}</div>
        @endif

        {{-- Form starts --}}
        <form action="{{ route('users.store')}}" method = "POST">
            @csrf

            <div class="card">
                <div class="card-header">
                    <h5 class="fw-bold card-title"> User Registration </h5>
                </div>

                <div class="card-body">
                    {{-- Name --}}
                    <div class="form-group mb-3">
                        <label for="name"> Name </label>
                        <input type="text" class = "form-control" placeholder = "Name" id = "name" name = "name" />

                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="form-group mb-3">
                        <label for="email"> Email </label>
                        <input type="text" class = "form-control" placeholder = "Email" id = "email" name = "email" />

                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="form-group mb-3">
                        <label for="password"> Password </label>
                        <input type="password" class = "form-control" placeholder = "Password" id = "password" name = "password" />

                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Phone Number --}}
                    <div class="form-group mb-3">
                        <label for="phone_number"> Phone Number </label>
                        <input type="text" class = "form-control" placeholder = "Phone Number" id = "phone_number" name = "phone_number" />

                        @error('phone_number')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type = "submit" class = "btn btn-primary"> Register </button>
                </div>
            </div>
        </form>

        {{-- List out the todos --}}
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Phone Number </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->phone_number }} </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"> No users found. </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection