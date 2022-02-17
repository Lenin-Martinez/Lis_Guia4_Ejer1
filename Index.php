<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Estilo.css">
    <title>Desarrollo guia 4</title>
</head>
<body>
    
    <form method="post">
        <div style="float: left;">

            <div class="txtBase">
                Numero base:
                <input type="text" 
                        name="txtBase" 
                        title="Solo se aceptan numeros" 
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        placeholder="Numero base" 
                        style="height: 40px;"><br>
            </div>

            <div  class="txtPotencia">
                Potencia del numero: 
                <input type="text" 
                        name="txtPotencia" 
                        title="Solo se aceptan numeros" 
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
                        placeholder="Potencia del numero" 
                        style="height: 40px;">
            </div>
        </div>


        <input type="submit" 
            name="btnCalcular" 
            value="Calcular"
            class="btnCalcular"><br>
    </form>

                    <?php
                    if((isset($_POST["btnCalcular"])) && (!empty($_POST["txtBase"]))  && (!empty($_POST["txtPotencia"]))){

                        $Base = $_POST["txtBase"];
                        $Potencia = $_POST["txtPotencia"];
                        $Total=$Base;

                        if($Potencia <= 500)
                        {
                            for($i = 1; $i < $Potencia; $i++)
                            {
                                $Total = $Total * $Base;
                            }
                            
                            ?><div class="lblResultado"><?php echo $Base. "^" .$Potencia. "= " .$Total; ?></div> <?php
                        }
                    }
                    else if(empty($_POST["txtBase"]))
                    {
                        ?> <div class="lblResultado">La casilla de numero base esta vacia</div> <?php
                    }
                    else if(empty($_POST["txtPotencia"]))
                    {
                        ?> <div class="lblResultado">La casilla de potencia del numero esta vacia</div> <?php
                    }
                    ?>

</body>
</html>


