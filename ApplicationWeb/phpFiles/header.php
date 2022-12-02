<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>
    <title><?php echo $title; ?></title>
</head>
<body>
    
<header>

    <div class="wrapper">

        <div class="wrapper-left" style="width: 20vw">
            <a href="index.php"><img src="Pictures/icons8-lighter-100.png" alt="Icône Briquet"></a>
        </div>

        <div class="wrapper-h1">
            <h1><?php echo $h1 ?></h1>
        </div>

        <div class="wrapper-right" style="width: 20vw">
            <form class="d-flex" role="search" action="recherche.php">
                <input class="form-control me-2" type="search" placeholder="Rechercher un briquet" aria-label="Search" name="search" required>
                <button type="submit" class="btn btn-outline-success"
                        onmouseover="this.style.background='rgba(0,131,205,.8)'"
                        onmouseout="this.style.background='var(--third-color)'"
                        style="border-color: var(--third-color); color: var(--primary-color); background: var(--third-color);">
                        <img src="Pictures/loupe.png" alt="Loupe"></button>
            </form>
        </div>

    </div>

</header>

<div class="container">