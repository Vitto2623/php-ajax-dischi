<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <style>
        
    </style>
</head>
<body>
    
    <?php  include __DIR__ . '/server/data.php' ?>

    <div>
        <?php  foreach($albums as $album){?>
            <img src="<?php echo $album['img'] ?>" alt="">
            <h2><?php echo $album['title'] ?></h2>
            <h3><?php echo $album['author'] ?></h3>
        <?php } ?>
    </div>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>