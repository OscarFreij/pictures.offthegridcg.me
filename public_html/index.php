<?php

include "../private_html/Container.php";
$container = new Container();
?>

<!DOCTYPE html>
<html lang="en">

<?php
require "../private_html/templates/head.php";
?>
<body>
<?php
include "../private_html/templates/navbar.php";
if (isset($_GET['album']) && !isset($_GET['image']))
{
    include "../private_html/templates/grid.php";
}
else if (isset($_GET['album']) && isset($_GET['image']))
{
    $container->Functions()->GetImageHeaders($_GET['album'], $_GET['image']);
}
else if (!isset($_GET['album']) && !isset($_GET['image']))
{
    include "../private_html/templates/grid.php";
}
?>
</body>
</html>