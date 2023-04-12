<?php
$title = 'Ошибка 404. Страница не найдена';
$description = 'К сожалению, мы не смогли найти страницу, которую вы искали. Попробуйте проверить ссылку еще раз или перейдите на главную страницу. Мы приносим извинения за доставленные неудобства и надеемся, что вы найдете то, что искали на других страницах нашего сайта.';
?>

<!DOCTYPE html>
<html>

<head>
    <?php include_once('parts/head.php');?>
</head>

<body>
    <?php include_once('parts/header.php');?>
    <main class="404">
        <h1>Ошибка 404. Страница не найдена</h1>
        <div class="spacer16"></div>
        <p>К сожалению, запрашиваемая страница не найдена. Пожалуйста, проверьте правильность написания URL-адреса.</p>
        <p><b>Вы можете:</b></p>
        <ul>
            <li>Вернуться на предыдущую страницу, кликнув <a href="javascript:history.back()">сюда</a>.</li>
            <li>Обновить страницу, нажав клавишу F5.</li>
            <li>Написать мне на почту <a href="mailto:geroy2001@gmail.com">geroy2001@gmail.com</a>, если проблема не устранена.</li>
        </ul>
    </main>
    <?php include_once('parts/footer.php');?>
</body>

</html>