@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg animate__animated animate__fadeInUp">
                <div class="card-header bg-primary text-white text-center">
                    <h2>About Us</h2>
                </div>
                <div class="card-body">
                    <h4 class="mb-3">Welcome to Our Platform!</h4>
                    <p style="font-size: 17px; line-height: 1.7;">
                        This project is a simple yet powerful system to manage roles and permissions. 
                        Built with Laravel, it offers secure authentication and easy control over user access.
                    </p>
                    <p style="font-size: 17px; line-height: 1.7;">
                        Our goal is to make managing user roles as simple and intuitive as possible for businesses, startups, and personal projects.
                    </p>
                    <hr>
                    <h5>Technologies used:</h5>
                    <ul style="font-size: 16px;">
                        <li>Laravel Framework</li>
                        <li>Bootstrap 4</li>
                        <li>CoreUI Template</li>
                        <li>MySQL Database</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


