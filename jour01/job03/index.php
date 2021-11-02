<?php
$bool=True;
$float=1.7;
$int= 6;
$string= "Oui";

echo '<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <title>Title</title>
      </head>
      <body>

      <table>
          <thead>
          <tr>
              <td>TYPE</td>
              <td>NOM</td>
              <td>VALEUR</td>
          </tr>
          </thead>
          <tbody>
          <tr>
              <td>BOOLEEN</td>
              <td>$bool</td>
              <td>'.$bool.'</td>
          </tr>
          <tr>
            <td>FLOAT</td>
            <td>$float</td>
            <td>'.$float.'</td>
          </tr>
          <tr>
            <td>INT</td>
            <td>$int</td>
            <td>'.$int.'</td>
          </tr>
          <tr>
            <td>STRING</td>
            <td>$string</td>
            <td>'.$string.'</td>
          </tr>

          </tbody>
      </table>
      <style>
          table,
          td {
              border: 1px solid #333;
          }

          thead,
          tfoot {
              background-color: #333;
              color: #fff;
          }
      </style>
      </body>
      </html>';
?>