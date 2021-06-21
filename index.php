<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/css/main.css">


<!-- Back to top button -->

    <title>Anthony RITA</title>
</head>
<body>
<a id="button"><i class='fas fa-angle-double-up' style='font-size:28px'></i></a>

<?php include('partials/navbar.php');?>
<main>
<?php include('partials/header.php');
 include('partials/skills-section.php');
 include('partials/about-section.php');
 include('partials/timeline-section.php');
 ?>
<hr>
<?php include('partials/project-section.php');?>
    </main>
<?php include('partials/footer.php');?>
</body>
</html>