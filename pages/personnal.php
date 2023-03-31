<!DOCTYPE html>
<html>

<head>
    <!-- Liens externes -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#FFB100" />
    <title>Ma page - Sparkless</title>
    <!-- SOURCES -->
    <link rel="stylesheet" href="../src/style.css" />
    <link rel="icon" href="../img/icon/favicon.ico" />
    <link rel="apple-touch-icon" href="../img/icon/android-chrome-512x512.png" />
    <script src="../src/signup.js" type="module"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <!-- MANIFEST -->
    <link rel="manifest" href="../src/manifest.json" />
</head>

<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-5 text-center bg-image" style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 400px;
      margin-top: 58px;
    ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Heading</h1>
                    <h4 class="mb-3">Subheading</h4>
                    <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
                </div>
            </div>
        </div>
    </div>
</header>

<body>
    <script>
    if ("serviceWorker" in navigator) {
        navigator.serviceWorker.register("sw.js", {
            scope: "/"
        });
    }
    </script>
</body>

</html>