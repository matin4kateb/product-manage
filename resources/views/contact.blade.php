@extends('layout')

@section('title', 'Contact us')

@section('content')
<h2>Contact Us</h2>
<p>If you have any questions or need assistance, please feel free to reach out to us. We’re here to help!</p>

<form action="/submit-contact" method="POST">
    <div>
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">Email Address:</label>
        <input type="text" id="email" name="email" required>
    </div>

    <div>
        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
    </div>

    <div>
        <button type="submit">Send Message</button>
    </div>
</form>

<p>If you prefer to speak with us directly, you can also reach us at:</p>
<p><strong>Phone:</strong> (123) 456-7890</p>
<p><strong>Email:</strong> support@example.com</p>
@endsection