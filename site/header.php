<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1,0 minimum-scale=1.0">
    <meta http-equiv="'X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php  $data = array(
    'main'=>'Главная',
    'about'=>'О нас',
    'contacts'=>'Контакты',
)?>
<?php echo menu( $data

        /*$data = array(
        'main'=>array(
            'caption'=> 'Главная',
        ),
        'about'=>array(
            'caption'=> 'О нас',
        ),
        'contacts'=>array(
            'caption'=> 'Контакты',
        ),
    )*/
   ); ?>
<div class="page">
    <h1><?php echo $data[$p] ?></h1>
<div class="content <?php echo is_sidebar(); ?>">
