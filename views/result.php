<div class="opcion">
    <?php
        $widthBar = $percent * 5;
        $style = "barra";

        if($survey->getOptionSelected() == $lenguage['opcion']){
            $style = "seleccionado";
        }

        echo $lenguage['opcion'];
    ?>

    <div class="<?php echo $style ?>" style="width:<?php echo $widthBar.'px;' ?>">
        <?php echo "{$percent}%"  ?>
    </div>
</div>