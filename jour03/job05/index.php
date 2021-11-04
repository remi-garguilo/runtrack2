<?php
$dic= [
    "voyelles" => ['a', 'e', 'i', 'o', 'u', 'y','O'],
    "consonnes" => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'],
    ];
$string="papa et maman";
$cons=0;
$voy=0;
$i=0;
while (isset($string[$i]) == TRUE) {
    $j=0;
    while(isset($dic["voyelles"][$j]) == TRUE) {
        if($string[$i] == $dic["voyelles"][$j]) {
            $voy++;
            }
        $j++;
    }
    while(isset($dic["consonnes"][$j]) == TRUE) {
        if($string[$i] == $dic["consonnes"][$j]) {
            $cons++;
            }
        $j++;
        }
$i++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css" type="text/css">
    <title>Consonnes/Voyelles</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo "$voy"; ?></td>
                <td> <?php echo "$cons"; ?></td>
            </tr>
        </tbody>
        </table>
        <style>
            table
            {
                border-collapse: collapse;
            }
            td
            {
                border: 1px solid black;
                text-align:center;
            }
            th
            {
                border: 1px solid black;
                text-align:center;
            }
                </style>


</body>
</html>