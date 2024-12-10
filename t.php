<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php
        $n=5;
        for($i=1;$i<=10;$i++){
        echo "<tr><td>$n</td>";
        echo "<td>$i</td>";
        echo "<td>".($n*$i)."</td></tr>";}    
        ?>
    </table>
    <table border="1">
        <?php
        $n= 5;
        for($i= 1;$i<= 10;$i++){
            ?>
            <tr>
                <td><?php echo $n ?></td>
                <td><?php echo $i ?></td>
                <td> <?php echo $n*$i ?></td>
            </tr> 
            <?php
        }
        ?>
    </table>
</body>
</html>