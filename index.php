<?php
include_once './includes/survey.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <form action="#" method="POST">
        <?php
        $survey = new Survey();
        $showResults = false;

        if (isset($_POST['lenguaje'])) {
            $showResults = true;
            $survey->setOptionSelected($_POST['lenguaje']);
            $survey->vote();
        }

        ?>
        <h2>¿Cual es tu lenguaje de programacion favorito?</h2>
        <?php
        if ($showResults) {
            $lenguages = $survey->showResults();

            echo "<h2> {$survey->getTotalVotes()} votos totales </h2>";

            foreach ($lenguages as $lenguage) {
                $percent =  $survey->getPercentageVotes($lenguage['votos']);

                include 'views/result.php';
            }
        } else {
            include_once 'views/votacion.php';
        }
        ?>
    </form>

    <?php
    ?>
</body>

</html>