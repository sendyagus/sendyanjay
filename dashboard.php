<?php
session_start()


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./asset/css/stylee.css">
    <title>Document</title>
</head>
<!-- navbar -->


<nav class="navbar navbar-expand-lg navbar-light bg-nav px-5 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand w-25" href="#" style="color:white">
            <img src="./Asset/img/naruto.png" alt="naruto" class="w-25">
            sendy
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item" 5px>
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item" 2px>
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item" 2px>
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item" 2px>
                    <a class="nav-link" href="http://127.0.0.1:5500/about.html">About</a>
                </li>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- selesai navbar -->

<!-- jumbotron -->
<section class="mediaku bg-primary">
    <div class="container ">
        <div class="row ">
            <!-- <div class="d-flex mx-auto  align-items-center"> -->

            <div class=" col-auto col-md-6 col-lg-6 text-center">

                <div class="card mx-auto" style="width: 19rem;">
                    <img src="./Asset/img/kanan.png" class="card-img-top" alt="..." style="background-position: cover;">
                    <div class="card-body">
                        <h3 class="card-text">Ini adalah gambar</h3>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>

            <div class=" col-auto col-md-6 col-lg-6 text-center  justify-content-center">
                <div class="card mx-auto" style="width: 19rem;">
                    <div class="ratio ratio-1x1">
                        <iframe src="video.mp4" title="YouTube video" allowfullscreen></iframe>
                    </div>
                    <div class="card mt-100">
                        <span>
                            <h3 class="card-text">Ini adalah vidio</h3>
                        </span>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>

                <!-- </div> -->
            </div>

        </div>
    </div>

</section>
<!-- selesai jumbotron -->


<!-- carosel -->
<div class="header">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active col-md-6" data-bs-interval="1000">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-auto col-md-4 col-lg-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="./Asset/img/naruto.webp" class="card-img" alt="...">
                                    </div>
                                    <div class="card-body mt-5">
                                        <h1 class="card-title">Joko</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Culpa, mollitia.</p>
                                        <a href="#" class="btn btn-primary">pencet</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-auto col-md-4 col-lg-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <span class="overlay asep"></span>
                                    <div class="card-image">
                                        <img src="./Asset/img/asep.jpeg" class="card-img" alt="...">
                                    </div>
                                    <div class="card-body mt-5">
                                        <h1 class="card-title">asep</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Culpa, mollitia.</p>
                                        <a href="#" class="btn btn-primary">pencet</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-auto col-md-4 col-lg-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <span class="overlay udin"></span>
                                    <div class="card-image">
                                        <img src="./Asset/img/naruto.webp" class="card-img" alt="...">
                                    </div>
                                    <div class="card-body mt-5">
                                        <h1 class="card-title">udin</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Culpa, mollitia.</p>
                                        <a href="#" class="btn btn-primary">pencet</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-6" data-bs-interval="1000">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-auto col-md-4 col-lg-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <span class="overlay megachan"></span>
                                    <div class="card-image">
                                        <img src="./Asset/img/banteng.jpg" class="card-img" alt="...">
                                    </div>
                                    <div class="card-body mt-5">
                                        <h1 class="card-title">panu</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Culpa, mollitia.</p>
                                        <a href="#" class="btn btn-primary">pencet</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-auto col-md-4 col-lg-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <span class="overlay asep"></span>
                                    <div class="card-image">
                                        <img src="./Asset/img/budi.jpeg" class="card-img" alt="...">
                                    </div>
                                    <div class="card-body mt-5">
                                        <h1 class="card-title">budi</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Culpa, mollitia.</p>
                                        <a href="#" class="btn btn-primary">pencet</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-auto col-md-4 col-lg-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <span class="overlay megachan"></span>
                                    <div class="card-image">
                                        <img src="./Asset/img/banteng.jpg" class="card-img" alt="...">
                                    </div>
                                    <div class="card-body mt-5">
                                        <h1 class="card-title">megachan</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Culpa, mollitia.</p>
                                        <a href="#" class="btn btn-primary">pencet</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-auto col-md-4 col-lg-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <span class="overlay jamal"></span>
                                    <div class="card-image">
                                        <img src="./Asset/img/jamal.jpeg" class="card-img" alt="...">
                                    </div>
                                    <div class="card-body mt-5">
                                        <h1 class="card-title">jamal</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Culpa, mollitia.</p>
                                        <a href="#" class="btn btn-primary">pencet</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-auto col-md-4 col-lg-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="./Asset/img/naruto.webp" class="card-img" alt="...">
                                    </div>
                                    <div class="card-body mt-5">
                                        <h1 class="card-title">Jeki</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Culpa, mollitia.</p>
                                        <a href="#" class="btn btn-primary">pencet</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-auto col-md-4 col-lg-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <span class="overlay jamal"></span>
                                    <div class="card-image">
                                        <img src="./Asset/img/naruto.webp" class="card-img" alt="...">
                                    </div>
                                    <div class="card-body mt-5">
                                        <h1 class="card-title">Jony</h1>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Culpa, mollitia.</p>
                                        <a href="#" class="btn btn-primary">pencet</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
</div>

<footer class="bg-dark text-center text-white ">

    <div class="container-fluid p-4">



        <section>
            <form action="">
                <div class="row justify-content-center d-flex">
                    <div class="col-auto">
                        <p class="p-2">
                            <strong>mari kita logout</strong>
                        </p>
                    </div>

                    <div class="col-auto">
                        <a href="logout.php"> <button type="button" class="btn btn-success">logout</button>
                        </a>
                    </div>
                </div>
            </form>




        </section>


    </div>


    <div class="text-center mb-3" color: white;>
        <!-- Facebook -->
        <a style="color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f fa-lg"></i></a>

        <!-- Twitter -->
        <a style="color: #55acee;" href="#!" role="button" class="mx-4"><i class="fab fa-twitter fa-lg"></i></a>

        <!-- Google -->
        <a style="color: #dd4b39;" href="#!" role="button"><i class="fab fa-google fa-lg"></i></a>

        <!-- Instagram -->
        <a style="color: #ca35ca;" href="#!" role="button" class="mx-4"><i class="fab fa-instagram fa-lg"></i></a>

    </div>

    <div class="text-center p-3 copyright" style="background-color: #000;">
        2023 dibuat oleh:
        <a href="#" class="text-white">sendy agus priyanto</a>

    </div>
    </div>
</footer>

<!-- Script -->
<script src="./asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>