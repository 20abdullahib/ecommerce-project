<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include('include/head.php') ?>
</head>

<body>
    <section class='container mt-[6em]'>
        <?php
        @include($content);
        ?>
    </section>
    <?php include('include/script.php') ?>
</body>

</html>