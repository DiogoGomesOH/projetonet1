<?php
    include_once "./_config/vars.php";

    $title = "TURMA 2023";
    $body = "Isto vai ser o meu corpo";
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=SITE_TITLE?></title>
    </head>

    <p id= "paragrafoX">
        asdas dadas dasdasda dasdadasd adadasdad
        asd asd asd asd asd asd asd asd asd asd asd asd asd asd
        asd asd asd asd asd asd asd asd asd asd asd asd asd asd
        asd asd asd asd asd asd asd asd asd asd asd asd asd asd
    </p>

    <?php
        print_r($age);
        print_r($cars);
    ?>

    <div class="divN1">
        <div class="divN1M1">
            <div class="divN1M1_1">
                aa
            </div>
            <div class="divN1M1_2">
                bb
            </div>
        </div>
        <div class="divN1M2">
            cc
        </div>
    </div>


    <body>
        <?=$body?>
       <h1>Chentric for life <3</h1>
       <?=$body?>
       <?php echo $body ; ?>
       <img src="https://pbs.twimg.com/media/EzrtjhmXIAMJNHc.jpg" alt="Sample Photo" />
    </body>
</html>