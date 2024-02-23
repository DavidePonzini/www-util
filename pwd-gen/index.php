<?php require_once('../../php/functions.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- Imports -->
    <?php include('../../components/imports.html'); ?>

    <!-- Policies -->
    <?php include('../../components/head_policies.html'); ?>
</head>
<body>
    <!-- Navbar -->
    <?php include('../../components/navbar.html'); ?>
    
    <div class="parallax" style="background-image: url(/res/010101.jpg)">
        <div class="container">
            <div class="content-tab">
                <h1>Password Generator</h1>
                <hr>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-sm">
                        <form action="pwd-gen.php" method="get">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Password length</span>
                                <input type="number" class="form-control" id="len" name="len" value="16" min="1" max="255">
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group-text">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="charactersL" name="charactersL" checked>
                                    </div>        
                                </div>
                                <input type="text" class="form-control" value="Lowercase" disabled>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group-text">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="charactersU" name="charactersU" checked>
                                    </div>        
                                </div>
                                <input type="text" class="form-control" value="Uppercase" disabled>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group-text">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="charactersD" name="charactersD" checked>
                                    </div>        
                                </div>
                                <input type="text" class="form-control" value="Digits" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-text">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="charactersS" name="charactersS" checked>
                                    </div>        
                                </div>
                                <input type="text" class="form-control" value="Symbols" disabled>
                            </div>
                            <button type="submit" id="submit" class="btn btn-primary">Generate password</button>
                        </form>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="separator">
        <?php include('../../components/ads_banner.html'); ?>
    </div>

    <?php include('../../components/footer.php'); ?>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Custom -->
    <script src="/scripts/parallax.js"></script>
</body>
</html>