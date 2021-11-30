<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once 'Teatr.php';
require_once 'People.php';
require_once 'Actors.php';
require_once 'Watching.php';

$actorsArray = array(new Actors('Юля', 23, 9000, 'Ромео и Джульета'), new Actors('Артур', 28, 18000, 'Ромео и Джульета'), new Actors('Майкл', 34, 80500, 'James Bond: 007'));
$watchingArray = array(new Watching('Олександр', 20, 8000), new Watching('Алексей', 26, 4500),new Watching('Игорь', 54, 27000), new Watching('Андрей', 42, 70000));



$act1 = new Actors('Джон', 34, 8000, 'МЕГ');
$act2 = new Actors('Алиса', 18, 18000, 'Алиса в стране чудес');
$act3 = new Actors('Виктор', 22, 180000, 'МЕГ');
$actorsArray = Teatr::addActor($act1, $actorsArray);
Teatr::showAllActors($actorsArray);

Teatr::showAllWatching($watchingArray);

$teatr1 = new Teatr(100);
echo $teatr1->perfomance($actorsArray, $watchingArray);

?>
</body>
</html>