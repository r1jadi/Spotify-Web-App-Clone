<?php

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/displayStyle.css" />
    <title>Shfaq te dhenat</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'SegoeUIlight', Tahoma, Geneva, Verdana, sans-serif;
        }

        #a1 {
            display: flex;
            flex-direction: column;
            width: 60%;
            margin: 0auto;
            background-color: rgb(215, 216, 228);
        }

        hr {
            width: 99%;
            height: 3px;
            background: cornflowerblue;
            margin: 0auto;
        }

        header,
        table {
            display: flex;
            flex-direction: column;
            width: 100%;
            min-height: 100px;
            margin: aauto;
            justify-content: center;
            align-items: center;
        }

        p {
            text-align: center;
            font-size: 14pt;
            font-weight: bolder;
            padding: 5px 0px;
        }
    </style>
</head>

<body>
    <div id="a1">
        <header>
            <h3>Julutemshtypeper teregjistruarte dhenat neSistem</h3>
            <a href="insert.php">
                <Button id='r'>Regjistrohu</Button></a>
        </header>
        <table>
            <hr>
            <p>Listaetedhenave:</p>
            <tr>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Departamenti</th>
                <th>Adresa</th>
                <th>

            <tr>
                <?php
                foreach ($all as $key => $value) {
                ?>
                    <td><?php echo $value['emri'] ?></td>
                    <td><?php echo $value['mbiemri'] ?></td>
                    <td><?= $value['departamenti'] ?></td>
                    <td><?= $value['adresa'] ?></td>
                    <td id='de'><a href="delete.php?id=<?php echo $value['id'] ?>"><button id="d">DELETE</button></a>
                        <a href="edit.php?id=<?php echo $value['id'] ?>"><button id='e'>EDIT</button>
                    </td></a>
            </tr>
        <?php
                }
        ?>
        </table>
    </div>
</body>

</html>