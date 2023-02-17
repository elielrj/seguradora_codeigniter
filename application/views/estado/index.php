<h1><?php echo $titulo ?></h1>

<a href='/web/seguradora/index.php/estadocontroller/novo'>NOVO</a>

<table border=1>
    <tr>
        <td>Código do Estado</td>
        <td>Nome</td>
        <td>Sigla</td>
        <td>Opções</td>
    </tr>

    <?php

    foreach ($tabela as $estado) {
        echo 
            "<tr>" .
                "<td>" . $estado->idestado .    "</td>" .
                "<td>" . $estado->nome .        "</td>" .
                "<td>" . $estado->sigla .       "</td>" .
                "<td>
                    <a href='/web/seguradora/index.php/estadocontroller/alterar/" . $estado->idestado . "'>Alterar</a>
                </td>" .
            "</tr>";
    }

    ?>


</table>