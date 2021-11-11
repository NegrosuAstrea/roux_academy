
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/roux_academy/css/style.css"> 
  <title>Roux Conference: Asistants</title>
</head>
<body id="page_login">
    <div class="wrapper">

        <?php
            require 'layout/header.php';
        ?>
        <section id="main_dos">
            <article>
            <div class="table_asistance">

                <table width = "100%" style="margin-left: auto;  margin-right: auto;  border: 1px solid black;">
                    <thead>
                        <tr>
                            <th colspan="5">ASISTANTS</th>
                        </tr>
                    </thead>    
                    <tbody>
                        <tr style="border: 1px solid black">
                            <th width="10%">ID</th>
                            <th width="30%">Nombre</th>
                            <th width="20%">Company</th>
                            <th width="20%">Email</th>
                            <th width="20%">Comments</th>
                        </tr>
                        <?php
                            require 'bd_connection.php';
                            $query = "SELECT * FROM asistants";
                            $result = $conn->query($query);
                            /* numeric array */
                            while ($row = $result->fetch_array(MYSQLI_NUM)) {
                                
                                echo "<tr style=\"border: \1px solid black;\">";
                                echo "<td>" . $row[0] . "</td>";
                                echo "<td>" . $row[1] . "</td>";
                                echo "<td>" . $row[2] . "</td>";
                                echo "<td>" . $row[3] . "</td>";
                                echo "<td>" . $row[4] . "</td>";
                                echo "</tr>";
                                echo "</tbody>";
                            }
    
                        ?>
                    </table>
            </div>    
            </article>
        </section>
        <?php
            require 'layout/footer.php';
        ?>

    </div>
</body>
</html>