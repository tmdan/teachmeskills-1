<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/style.css">
    <title>Document</title>
</head>
<body>
<main>
    <p> Отзывы</p>
    <?php foreach ($feedbacksList as $one_user): ?>
        <div class="feedback-wrapper">
            <div class="feedback-name-wrapper">
                <p class="feedback-name"><?= $one_user['firstname'] ?> <?= $one_user['lastname'] ?></p>
                <p><?= $one_user['email'] ?></p>
            </div>
            <div class="feedback-text">
                <?= $one_user['comment'] ?>
            </div>

        </div>
    <? endforeach ?>
</main>
</body>
</html>


