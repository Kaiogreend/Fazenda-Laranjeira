<?php
include ("bootstrap.php");

?>

<main>

<Html>

</head>
    <body>
        <?php
        include("config.php");
        switch (@$_REQUEST["page"]) {
            case "novo":
                include("cadatro.php");                break;
            break;
            case "listar":
                include("lista.php");
            break;
            case "salva":
                include("salvar.php");
                break;
            default:
               print"Bem vindo";
               
        }
        ?>
        <a href="form.html">
        <button href="f"> salvar</button>
    </a>
    </body>
</Html>

        
</main>

