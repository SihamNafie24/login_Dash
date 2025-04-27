@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h3>Contact Us</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input id="name" type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input id="email" type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" class="form-control" rows="4" placeholder="Type your message..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

