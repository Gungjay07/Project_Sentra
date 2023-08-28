<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Adhi Beton</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <img src="assets/adhi.jpeg" width="60" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active ms-3" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Prouduk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Tentang Kami</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <a class="btn btn-outline-success" href="input.php" type="submit">Tambah Data</a>
                        <a class="btn btn-outline-danger ms-3" href="delete.php" type="submit">Hapus Data</a>
                        <a class="btn btn-outline-primary ms-3" href="update.php" type="submit">Update Data</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/download.png" class="rounded mx-auto d-block mt-5" width="40%" alt="">

                    <div class="container">
                        <p>PT Adhi Persada Beton merupakan anak perusahaan PT Adhi Karya (Persero) Tbk. yang berdiri pada bulan Desember 2013 dengan visi menjadi perusahaan unggul dengan inovasi dan pengembangan produk berkualitas untuk pertumbuhan berkelanjutan.
                            ADHI Beton telah menerapkan sistem manajemen mutu ISO 9001:2015, sistem manajemen lingkungan ISO 14001:2015, dan SMK3 PP Nomor 50 Tahun 2012 sehingga ADHI Beton dapat menghasilkan produk yang berkualitas serta memberikan pelayanan terbaik untuk pelanggan.
                        </p>
                        <p>Beberapa proyek strategis nasional telah sukses ditangani, untuk memenuhi kebutuhan beton precast dan ready mix pada proyek-proyek tersebut, ADHI Beton telah membangun pabrik beton precast dan ready mix permanen di Sadang - Purwakarta, dan Mojokerto. Selain itu telah dibangun pabrik beton precast dan ready mix movable Sibanceh, Kelapa Gading, dan Jogjakarta, serta pabrik beton precast movable di Sentul. Seluruh pabrik PT Adhi Persada Beton didirikan guna menciptakan produk sesuai dengan standar nasional dan internasional. Produk yang kuat juga kokoh dan sudah teruji seiring waktu berjalan.</p>
                    </div>

                    <!-- <div class="container">
          <div class="carousel-caption text-start">
            <h1>Adhi Beton</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Lainnya</a></p>
          </div>
        </div> -->
                </div>

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->




        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
        </script>


</body>

</html>