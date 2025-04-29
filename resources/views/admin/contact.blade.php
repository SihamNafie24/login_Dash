<!-- contact.blade.php -->
<div class="container mt-5 mb-5">
    <div class="card shadow p-4">
        <div class="card-header bg-primary text-white text-center">
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

            
        </div>
       
        <div class="container">
    <div class="contact-card">
        <h2>Contact Us</h2>
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

        