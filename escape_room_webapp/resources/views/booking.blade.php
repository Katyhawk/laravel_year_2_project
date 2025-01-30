@extends('layouts.layout')

@section('content')
<!-- Header with image and page title-->
<div>
    <div class="card text-light border-0" id="main_card">
        <img src="/images//booking_page_imgs/pexels-alex-andrews-1983032.jpg" class="card-img rounded-0" alt="solar-eclipse">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
            <h1 class="card-title">Booking</h1>
        </div>
    </div>
</div>
<!-- Container for page content -->
<div class="container">
    <!-- Booking information section -->
    <section>
        <div class="text-center d-flex flex-column">
            <h2 class="p-3">Reserveringsinformatie</h2>
            <p class="p-2">Alinea met algemene informatie over de reservering zelf die altijd van toepassing zijn (boekingskosten, borg, transportkosten, duur van de activiteiten, min/max aantal personen per sessie, afmetingen escapekeet en escapekist). Per activiteit ook uitgewerkt in een list ter overzicht.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae fugiat maiores officia ipsam soluta repellat, error architecto aspernatur ad laboriosam voluptate a non eligendi ipsum tempore, omnis provident! Dolore, debitis!</p>
            <!-- Booking options section -->
            <section>
                <div class="col-12 text-center d-flex flex-column justify-content-center">
                    <h2 class="p-3">Reserveringsopties</h2>
                    <div class="d-flex justify-content-center">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item mr-5"><a href="#escapekist">Escapekist</a></li>
                            <li class="list-group-item"><a href="#escapekeet">Escapekeet</a></li>
                            <li class="list-group-item"><a href="#escapekist">Escapekeet en escapekeet</a></li>
                        </ol>
                    </div>
                    <p class="p-2">Alinea met informatie over reserveren (nu tijdelijk per e-mail).<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque unde perspiciatis rem, corporis deleniti est cupiditate vel, molestiae eos nisi maiores, reprehenderit consequatur quae voluptatem aut. Laborum aut voluptas quam.</p>
                </div>
            </section>
            <div class="d-flex flex-column justify-content-center">
                <div class="d-flex flex-row justify-content-center">
                    <img src="/images/booking_page_imgs/placeholder2.jpg" alt="placeholder 1 escapekist" class="w-50 h-50 col-6 mt-5">
                    <div class="col-6">
                        <h4 class="p-3" id="escapekist">Escapekist</h4>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Boekingskosten</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Borg</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Transportkosten</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Min/max aantal personen</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Duur</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Afmetingen</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <a href="/escaperooms">
                            <button type="button" class="btn btn-outline-primary mt-2">Meer informatie
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="col-6">
                        <h4 class="p-3" id="escapekeet">Escapekeet</h4>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Boekingskosten</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Borg</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Transportkosten</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Min/max aantal personen</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Duur</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li class="list-group-item col-4">Afmetingen</li>
                            <li class="list-group-item col-4">Lorem ipsum</li>
                        </ul>
                        <a href="/escaperooms">
                            <button type="button" class="btn btn-outline-primary mt-2">Meer informatie
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <img src="/images/booking_page_imgs/placeholder1.jpg" alt="placeholder 2 escapekeet" class="w-50 h-50 col-6 mt-5">
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews section -->
    <section>
        <div class="row g-3 mb-4">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="card g-2 mt-2" style="width: 36rem;">
                    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Single item -->
                            <div class="carousel-item active text-center" data-bs-interval="5000">
                                <h1>Henk de Skunk</h1>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- half star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                                </svg>
                                <!-- empty star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                </svg>
                                <p>Ik vond het tof!</p>
                            </div>
                            <!-- Single item -->
                            <div class="carousel-item text-center" data-bs-interval="5000">
                                <h1>Fred de Wasbever</h1>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- half star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                                </svg>
                                <p>Ik vond het fijn dat er gedacht werd aan schoon water!</p>
                            </div>
                            <!-- Single item -->
                            <div class="carousel-item text-center" data-bs-interval="5000">
                                <h1>Joep de Ninja Turtle</h1>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- filled star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- half star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                                </svg>
                                <p>Leuke activiteiten en de pizza was ook awesome.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

</html>