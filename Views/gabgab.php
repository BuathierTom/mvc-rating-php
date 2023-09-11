<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <?php
            if (isset($title)) echo "<title>$title</title>";
            if (isset($style)) echo "<link rel='stylesheet' type='text/css' href='css/$style'/>";
        ?>
    </head>
    <body>
        <?=$content?>
    </body>
</html>