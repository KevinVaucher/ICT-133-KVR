<HTML>
<HEAD>
    <STYLE type="text/css">
        h1 {
            font-weight: bold;
            text-decoration: underline;
            text-align: center
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </STYLE>
    <TITLE>Puissance 4</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<h1>Puissance 4</h1>

<TABLE>
    <?php
    for ($ligne = 0; $ligne < 8; $ligne++) {
        echo "<tr>";
        for ($col = 0; $col < 8; $col++) {
            if ($ligne == 7 && $col == 0) {
                echo "<td><img src='bleu.jpg'></td>";
            } else if ($ligne == 7 && $col == 6) {
                echo "<td><img src='rouge.JPG'></td>";
            } else {
                echo "<td></td>";
            }
            echo "</tr>";
        }
    }
    ?>
</TABLE>
</BODY>
</HTML>
