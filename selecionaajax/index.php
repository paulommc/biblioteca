<!DOCTYPE html>
<html lang="ept-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>AJAX</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            font-size: 24px;
            width: 100%;
            border: 1px solid #bbb;
            border-left: 1px solid #fff;
            border-right: 1px solid #fff;
            border-collapse: collapse;
        }

        table tr:first-of-type {
            height: 45px;
        }

        table tr:first-of-type:hover {
            box-shadow: none;
        }

        table tr:hover {
            box-shadow: 0 0 9px 2px #9ecaed;
        }

        table tr td,
        table tr th {
            border-bottom: 1px solid #bbb;
        }

        table tr td {
            height: 40px;
        }

        table tr td input {
            height: 20px;
            width: 20px;
            margin-right: 20px;
        }
        table tr td input::after{
            display: none;
            content: "  ";
            border: 1px solid #dadce099;
            border-radius: 50%;
            position: relative;
            left: -40px;
            margin: 30px;
            font-size: 2px;
            transition: 1s ease-in-out; /* Animação de crescimento */

           
        }
        table tr td input:hover::after{
            display:unset;
            content: "  ";
            border: 20px solid #dadce099;
            border-radius: 50%;
            position: relative;
            left: -40px;
            margin: 30px;
            font-size: 2px;
            transition: 1s ease-in-out; /* Animação de crescimento */
        }


        .fundo {
            background-color: rgba(0, 102, 255, 0.2);
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <td><input id='cbtodos' type="checkbox" onchange="marcatodos()"> </td>
            <th>Nome</th>
            <th>Email</th>
            <th>Função</th>

        </tr>
        <?php
        include('conectadb.php');
        $sql = "SELECT * FROM tb_usuarios";
        $result = mysqli_query($link, $sql);
        while ($tbl = mysqli_fetch_array($result)) {
        ?>
            <tr id='tr<?= $tbl[0] ?>' <?= $tbl[4] == 1 ? 'class="fundo"' : '' ?>>
                <td><input type="checkbox" id='<?= $tbl[0] ?>' <?= $tbl[4] == 1 ? 'checked' : '' ?> onchange="atualiza(<?= $tbl[0] ?>)"></td>
                <td><?= $tbl[1] ?></td>
                <td><?= $tbl[2] ?></td>
                <td><?= $tbl[3] ?></td>
            </tr>
        <?php
        }

        ?>
    </table>
    <br><br>
    <a href="apagar.php"><button>Apagar</button></a>
    <a href="reset.php"><button>Reset</button></a>
</body>

</html>
<script>
    function atualiza(id) {
        if (document.getElementById(id).checked) {
            $.ajax({
                url: 'altera.php',
                type: 'POST',
                data: {
                    id: id,
                    op: 1
                }
            });
            document.getElementById('tr' + id).classList.add('fundo');
        } else {
            $.ajax({
                url: 'altera.php',
                type: 'POST',
                data: {
                    id: id,
                    op: 0
                }
            });
            document.getElementById('tr' + id).classList.remove('fundo');
        }
    }

    function marcatodos() {
        if (document.getElementById('cbtodos').checked) {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach((checkbox) => {
                checkbox.checked = true;
                if (!isNaN(checkbox.id)) {
                    atualiza(checkbox.id)
                }
            });
        } else {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach((checkbox) => {
                checkbox.checked = false;
                if (!isNaN(checkbox.id)) {
                    atualiza(checkbox.id)
                }
            });
        }
    }
</script>