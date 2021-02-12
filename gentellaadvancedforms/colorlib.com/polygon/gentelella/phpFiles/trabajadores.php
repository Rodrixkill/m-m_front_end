<?php
        require("sessionVerify.php");

        $opts = array(
            'http' => array(
                'method' => "GET",
                'header' => "X-JWT-Token: " . $_SESSION['TOKEN']
            )
        );

        $context = stream_context_create($opts);
        $x = file_get_contents("http://sistema.mym.com.bo:4000/trabajador/empresa/" . $_POST['EMPRESA'], false, $context);
        $someArray = json_decode($x, true);
        foreach ($someArray as $key => $value) {
            echo "<tr>";
            echo "<td>" . $value["ci"] . "</td>";
            echo "<td>" . $value["nombre"] . " " . $value["primer_apellido"] . " " . $value["segundo_apellido"] . "</td>";
            echo "<td>" . $value["correo_electronico"] . "</td>";
            echo "<td>" . $value["telefono"] . "</td>";
            echo "<td>" . "<button type=\"button\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></button><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\"></i></button>" . "</td>";
            echo "</tr>";
        }
        ?>