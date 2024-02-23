<?php require_once('../php/functions.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>// Utils</title>

    <!-- Imports -->
    <?php include('../components/imports.html'); ?>

    <!-- Policies -->
    <?php include('../components/head_policies.html'); ?>
</head>
<body>
    <!-- Navbar -->
    <?php include('../components/navbar.html'); ?>
    
    <div class="parallax" style="background-image: url(/res/server-bg.png)">
        <div class="container">
            <div class="content-tab">
                <h1>Common</h1>
                <div class="row center">
                    <div class="col-lg links">
                        <div class="card">
                            <img class="card-img-top" src="/res/html.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Regex</h5>
                                <p class="card-text">Run any Regex on given text.</p>
                                <a href="regex/" class="btn btn-primary">Open</a>
                            </div>
                        </div>
                    
                        <div class="card">
                            <img class="card-img-top" src="/res/010101.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Password generator</h5>
                                <p class="card-text">Random password generator.</p>
                                <a href="pwd-gen/" class="btn btn-primary">Open</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="separator">
        <?php include('components/ads_banner.html'); ?>
    </div>

    <div class="parallax" style="background-image: url(/res/010101.jpg)">
        <div class="container">
            <div class="content-tab">
                <h1>Debugging</h1>
                <div class="row center">
                    <div class="col-lg links">
                        <div class="card">
                            <img class="card-img-top" src="/res/010101.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Password hasher</h5>
                                <p class="card-text">Calculate password hash for a given plain string.</p>
                                <a href="pwd-hash.php" class="btn btn-primary">Open</a>
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/res/html.jpg">
                            <div class="card-body">
                                <h5 class="card-title">HTTP Code</h5>
                                <p class="card-text">HTTP response code selector.</p>
                                <a href="http-code.php" class="btn btn-primary">Open</a>
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/res/server-bg.png">
                            <div class="card-body">
                                <h5 class="card-title">PHP Request</h5>
                                <p class="card-text">Display server-side HTTP GET/POST request data.</p>
                                <a href="request.php" class="btn btn-primary">Open</a>
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/res/server-bg.png">
                            <div class="card-body">
                                <h5 class="card-title">PHP $_SERVER</h5>
                                <p class="card-text">Display the content of $_SERVER.</p>
                                <a href="server.php" class="btn btn-primary">Open</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="separator">
        <?php include('../components/ads_banner.html'); ?>
    </div>

    <?php include('../components/footer.php'); ?>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Custom -->
    <script src="/scripts/parallax.js"></script>
</body>
</html>