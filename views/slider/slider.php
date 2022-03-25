<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->
    <!-- fotorama.css & fotorama.js. -->
 <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
 <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

 <title>Document</title>
</head>
<body>
<main>
 <div class="fotorama" data-nav="thumbs" data-width="600px" data-maxheight="600px" >

         <?php foreach ($slidersList as $value): ?>
             <img src="<?= $value['url']?>">
         <? endforeach ?>

 </div>

    <div style="margin-top: 10px">
        <form  method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <!--<button type="submit" name="submit"> Загрузить</button>-->
            <input type="submit" name="submit" value="Загрузить">
        </form>
     </div>


</main>

</body>
</html>