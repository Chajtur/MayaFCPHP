<!doctype html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="https://kit.fontawesome.com/55b2ee1815.js" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>
        Maya FC
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" href="/assets/LogoMaya.ico">
</head>

<body class="bg-black">
    <header>
        <?php include 'components/header.php'; ?>
    </header>
    <content class="">
    </content>
    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>
    <!-- Modal de espera mientras cargan datos -->
    <div class="modal fade" id="spinner" tabindex="-1" role="dialog" aria-labelledby="spinnerLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="spinner-border text-info" style="width: 4rem; height:4rem"></div>
                    <div clas="text-primary">
                        <p>Por favor espera mientras cargamos tus datos<br><br><small class="fw-bold">MAYA FC</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal para información general -->
    <div class="modal" tabindex="-1" id="infoModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="infoModalText">
                    <p>Tu sesión ha expirado debido a inactividad, deberás volver a iniciar sesión</p>
                </div>
                <div class="modal-footer" id="infoModalButtons">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
</body>