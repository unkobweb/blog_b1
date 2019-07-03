<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <title>Admin panel</title>
</head>
<body onload="javascript:slideAll();">
<header>
    <?php
        require_once "_adminmenu.php";
    ?>
</header>
    <?php
        switch ($_GET['page']){
            case 1:
                echo "Modification de post";
                break;
            case 2:
                echo "Description association";
                break;
            case 3:
                echo "Journal d'evenement";
                break;
            case 4:
                require_once 'ip-log.php';
                break;
        }
    ?>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>