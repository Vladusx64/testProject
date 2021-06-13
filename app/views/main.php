<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link rel="stylesheet" type="text / css" href="./assets/css/jquery.fancybox.min.css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <title>Picture</title>
</head>

<body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>Album</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php if ($errors) : ?>
                        <span class="border border-warning">
                        <p class="fs-4"> There were errors at work, please contact the administrators </p>
                        </span>
                    <?php else : ?>
                        <?php for ($i = 0; $i < ARRAY_LENGTH; $i++) : ?>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <a href=<?php echo $arrayPictureUrl[$i]; ?> data-fancybox="gallery">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src=<?php echo $arrayPictureUrl[$i]; ?> role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" />
                                    </a>
                                </div>
                            </div>
                        <?php endfor; ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </main>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
    <script src="../assets/js/jquery.fancybox.min.js"> </script>
</body>

</html>