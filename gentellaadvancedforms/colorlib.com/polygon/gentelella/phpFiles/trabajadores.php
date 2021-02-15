<?php
        require("sessionVerify.php");

        $opts = array(
            'http' => array(
                'method' => "GET",
                'header' => "X-JWT-Token: " . $_SESSION['TOKEN']
            )
        );

        $context = stream_context_create($opts);
        $x = file_get_contents("http://sistema.mym.com.bo:4000/trabajador/empresa/" . $_GET['EMPRESA'], false, $context);
        $results = json_decode($x, true);
        /*foreach ($someArray as $key => $value) {
            echo "<tr>";
            echo "<td class=\"ci\">" . $value["ci"] . "</td>";
            echo "<td class=\"nombre_completo\">" . $value["nombre"] . "</td>";
            echo "<td class=\"correo\">" . $value["correo_electronico"] . "</td>";
            echo "<td class=\"telefono\">" . $value["telefono"] . "</td>";
            echo "<td class=\"edad\" style=\"display:none;\">" . $value["edad"] . "</td>";
            echo "<td class=\"sexo\" style=\"display:none;\">" . $value["sexo"] . "</td>";
            echo "<td class=\"expedido\" style=\"display:none;\">" . $value["expedido"] . "</td>";
            echo "<td>" . "<button type=\"button\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></button><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\"></i></button>" . "</td>";
            echo "</tr>";
        }*/
        echo json_encode($results);