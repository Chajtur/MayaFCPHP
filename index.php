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

<body class="bg-black w-view min-h-screen flex flex-col justify-between">
    <div>
        <header>
            <?php include 'components/header.php'; ?>
        </header>
        <content>
        </content>
    </div>
    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>
    <!-- Modal para información general -->
    <!-- <div class="modal" tabindex="-1" id="infoModal">
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
    </div> -->

    <div class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="spinner">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- Modal content -->
            <div class="inline-block align-bottom bg-yellow-400 rounded-lg justify-center overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Loader icon -->
                            <svg class="animate-spin h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25 text-yellow-400" cx="10" cy="10" r="12" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-100" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4">
                            <h3 class="text-xl leading-6 font-bold text-white" id="modal-title">
                                Cargando
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-white">
                                    Ten paciencia mientras cargamos la información!!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>