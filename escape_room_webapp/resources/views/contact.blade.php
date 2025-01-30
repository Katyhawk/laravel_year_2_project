@extends('layouts.layout')

@section('content')
<link href="css/contact.css" rel="stylesheet">
<div class="contact">
    <h1>Contactgegevens</h1>
    <div class="contact-info">
        <p>Telefoonnummer: +31 6</p>
        <p>Email: info@example.com</p>
        <p>Locatie: Nederland</p>
    </div>
    <form class="contact-form" action="#" method="post">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <label for="message">Bericht:</label>
        <textarea id="message" name="message" required></textarea>
        <input type="submit" value="Verzenden">
    </form>
    <div class="social-media">
        <p>Vind ons ook op:</p>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
    </div>
</div>
@endsection