<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/style_review.css">
    <title>Document</title>
</head>
<body>
    <main>
        <p class="feedback-head">Оставьте свой отзыв:</p>
        <form method="post">
            <div class="feedback-wrapper">
                <input class="feedback-element" type="text" name="firstname" placeholder="Имя">
                <input class="feedback-element" type="text" name="lastname" placeholder="Фамилия">
                <input class="feedback-element" type="text" name="phone" placeholder="Телефон в формате 375291111111">
                <input class="feedback-element" type="email" name="email" placeholder="email">
                <textarea class="feedback-element" name="comment" rows="10" cols="30" placeholder="Оставьте ваш комментарий"></textarea>
            </div>
            <div class="feedback-button-wrapper">
                <input class="feedback-button" type="submit" name="save_review" value="Оставить отзыв">
            </div>

        </form>
    </main>

</body>
</html>

<?php if (!is_null($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <? endforeach ?>
    </ul>
<?php endif ?>