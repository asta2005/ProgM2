<?php
$pageTitle = "Omar kahouch";
$imageUrl = "https://www.copahost.com/blog/wp-content/uploads/2019/07/imgsize2.png";
$imageTitle = "spiderman";
$author = "asta2005"; // GitHub-naam

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
<main>
<?php echo $mijnVariable;?>
</main>
    <h1><?php echo $pageTitle; ?></h1>
    <img src="<?php echo $imageUrl; ?>" alt="<?php echo $imageTitle; ?>">
    <p>Afbeelding titel: <?php echo $imageTitle; ?></p>
    <p>Auteur: <?php echo $author; ?></p>
</body>
</html>
