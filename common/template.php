<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Mon portfolio</title>
</head>

<body>

    <?php

    include "navigation.php";

    if (!isset($page)) {
        $page = "accueil";
    }

    switch ($page) {
        case 'accueil':
            include "content/index_content.php";
            break;
        case 'realisations':
            include "content/realisations_content.php";
            break;
        case 'veilles':
            include "content/veille_content.php";
            break;
        case 'cv':
            include "content/cv.html";
            break;
        default:
            include "content/404.html";
            break;
    }


    include "footer.php";

    ?>
    
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>