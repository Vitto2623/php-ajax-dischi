<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <?php  include __DIR__ . '/server/data.php' ;
            include __DIR__ . '/partials/header.php';
    ?>

    
    <main id="app">
        <div class="container">
            <div class="album" v-for="album in albums">
                <img :src="album.img" :alt="album.title">
                <h2>{{album.title}}</h2>
                <h3>{{album.author}}</h3>
            </div>
        </div>
    </main>








    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>