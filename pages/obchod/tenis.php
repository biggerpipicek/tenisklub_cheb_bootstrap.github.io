<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VypletemeRaketu.cz - Kontakt</title>
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="../../styles/tenis.css">
    <script src="https://kit.fontawesome.com/c83f76cb7b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- NAVIGACE -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a href="../../index.html" class="navbar-brand">
                <b>VypletemeRaketu.cz</b>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarMenu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.html">Domů</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../rakety/vypletani-raket.html">Vyplétání raket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../prodejna/prodejna.html">Prodejna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../kontakt.html">Kontakt</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" id="dropdownMenu" data-bs-toggle="dropdown" role="button" aria-expanded="false">Obchod</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                            <li>
                                <a href="tenis.php" class="dropdown-item">Tenis</a>
                            </li>
                            <li>
                                <a href="doplnky.php" class="dropdown-item">Doplňky</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- KONTEJNER S PRODUKTY -->
    <div class="container d-grid produkty-container">
        <div class="card text-center">
            <img src="../../imgs/products_tenis/minios_ultra.webp" class="card-img-top">
            <div class="card-body">
                <h3 class="card-title">Wilson Minions Ultra 100</h3>
                <p class="card-text" id="card-text">Tady je další člen řady Wilson Ultra: Wilson Ultra 100! Přesněji řečeno Wilson Minions Ultra 100!</p>
                <p clpass="h2 card-title pricing-card-title">6090 Kč</p>
                <a type="button" class="btn btn-primary">Zobrazit produkt</a>
            </div>
        </div>
        <div class="card text-center">
            <img src="../../imgs/products_tenis/wilson_blade.webp" alt="" class="card-img-top">
            <div class="card-body">
                <h3 class="card-title">Wilson Blade 100L V8</h3>
                <p class="card-text" id="card-text">S raketou Blade 100L V8 vytváří Wilson inovativní raketu, která vylepšuje řadu Blade V8 a představuje ovladatelnější raketu.</p>
                <p class="h2 card-title pricing-card-title">6020 Kč</p>
                <a type="button" class="btn btn-primary">Zobrazit produkt</a>
            </div>
        </div>
        <div class="card text-center">
            <img src="../../imgs/products_tenis/micky_us_open.jpg" alt="" class="card-img-top">
            <div class="card-body">
                <h3 class="card-title">Tenisové míčky US Open 4 ks žluté</h3>
                <p class="card-text" id="card-text">Závodní tenisové míčky na tvrdý povrch nebo antuku. Tuba 4 míčků.</p>
                <p class="h2 card-title pricing-card-title">169 Kč</p>
                <a type="button" class="btn btn-primary">Zobrazit produkt</a>
            </div>
        </div>
        <div class="card text-center">
            <img src="../../imgs/products_tenis/micky_dunlop.jpg" alt="" class="card-img-top">
            <div class="card-body">
                <h3 class="card-title">Tenisové míčky Dunlop Fort All Court 2 × 4</h3>
                <p class="card-text" id="card-text">Tenisový míček Dunlop Fort pro kontrolované a pohodlné odpaly.</p>
                <p class="h2 card-title pricing-card-title">379 Kč</p>
                <a type="button" class="btn btn-primary">Zobrazit produkt</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../../script.js"></script>
</body>
</html>