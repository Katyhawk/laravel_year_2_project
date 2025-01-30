@extends('layouts.layout')

@section('content')
<!-- There's no need for an html, header or body tag, those elements are already included in the layout.blade.php file. -->
<!-- All code goes in between @section('content') and @endsection. -->
<!-- Delete this code and add your own. -->
<div class="d-flex justify-content-center">
    <h1>Add your header here</h1>
    <div class="col-6">
        <p>Add the content of the page here</p>
    </div>
    <img src="/images/delete-later/kitties.jpg" alt="example image" class="col-6">
</div>
@endsection