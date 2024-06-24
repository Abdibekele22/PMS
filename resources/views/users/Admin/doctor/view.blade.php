@extends('users.admin.layout.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <form action="{{ route('cusers_search') }}" method="GET">
        @csrf
        <div class="nav-item d-flex align-items-center col-md-4">
            <label for="role_id" class="form-lable nowrap flex-1">Role ID:</label>
            <input type="text" name="role_id" id="role_id" class="form-control d-flex">
            <button type="submit" class="btn rounded-pill btn-secondary">Search</button>
        </div>
    </form>
    <div class="card">
        <h5 class="card-header"> Users List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>
                            <form action="{{ route('doctor_edit', $user->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-primary">UPDATE</button>
                            </form>
                            <form action="#" method="post">
                                @method('DELETE')
                                @csrf
                                <!-- <button type="submit" class="btn btn-sm btn-clean btn-icon btn-icon-md" class="btn-lg btn-primary">DELETE<i
                                    class="btn-lg btn-danger"></i></button> -->
                                <input type="submit" class="btn btn-sm btn-danger" value="DELETE">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
