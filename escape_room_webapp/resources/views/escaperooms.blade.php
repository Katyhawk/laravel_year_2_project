@extends('layouts.layout')

@section('content')
<div class="card text-dark border-0" id="main_card">
    <img src="/images/escaperooms/fotovanpage.jpg" class="card-img rounded-0" alt="solar-eclipse" />
    <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="bg-light rounded-2 col-9 d-flex justify-content-center">
                <h1 class="card-title pt-1">
                    WELCOME TO ESCAPE ROOM ROC MIDDEN NEDERLAND
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Informatie sectie -->
        <div class="col-md-6 d-flex justify-content-end">
            <div class="section">
                <h2>Escapekisten</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Temporibus ullam, velit, odio rem esse reiciendis, cum
                    mollitia nemo eius tempora illo accusamus et amet nobis
                    iure perspiciatis consequuntur omnis eos?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Reprehenderit illo accusamus et labore quibusdam in
                    consectetur id nulla excepturi. Pariatur debitis aliquam
                    iure ea, ab doloribus minus inventore fuga dicta!
                </p>
                <ul>
                    <li>Belangrijk punt 1</li>
                    <li>Belangrijk punt 2</li>
                    <li>Belangrijk punt 3</li>
                </ul>
                <img src="/images/escaperooms/Screenshot_2024-05-21_104733.jpg" width="450" alt="" />
            </div>
        </div>
        <!-- Escaperoom sectie -->
        <div class="col-md-6 d-flex justify-content-end">
            <div class="section">
                <h2>Escaperoom</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Temporibus ullam, velit, odio rem esse reiciendis, cum
                    mollitia nemo eius tempora illo accusamus et amet nobis
                    iure perspiciatis consequuntur omnis eos?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Reprehenderit illo accusamus et labore quibusdam in
                    consectetur id nulla excepturi. Pariatur debitis aliquam
                    iure ea, ab doloribus minus inventore fuga dicta!
                </p>
                <ul>
                    <li>Belangrijk punt 1</li>
                    <li>Belangrijk punt 2</li>
                    <li>Belangrijk punt 3</li>
                </ul>
                <img src="/images/escaperooms/Screenshot_2024-05-21_104733.jpg" width="450" alt="" />
            </div>
        </div>
    </div>
</div>
<!--boek nu button-->
<div class="d-flex justify-content-center mt-4 mb-4">
    <br />
    <a href="/booking" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Boek Nu</a>
</div>
</main>
@endsection