@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">

        <!-- Users Card -->
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><i class="fas fa-users"></i> Users</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $usersCount }}</h5>
                </div>
            </div>
        </div>

        <!-- Roles Card -->
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header"><i class="fas fa-user-shield"></i> Roles</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $rolesCount }}</h5>
                </div>
            </div>
        </div>

        <!-- Permissions Card -->
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header"><i class="fas fa-lock"></i> Permissions</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $permissionsCount }}</h5>
                </div>
            </div>
        </div>

        <!-- Messages Card -->
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header"><i class="fas fa-envelope"></i> Messages</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $messagesCount }}</h5>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
