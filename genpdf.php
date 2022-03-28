<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$html = '<table class="table">
<thead>
    
    <th>Date</th>
    <th>Etage</th>
    <th>Position</th>
    <th>Prix</th>

</thead>
<tbody>
    <?php
    foreach ($resultat as $exo) {
    ?>
        <tr>
            <td>'. 'Aujourd hui' .'</td>
            <td>'. 'Aujourd hui' .'</td>
            <td>'. '2' .'</td>
            <td>'. 'gauche' . '</td>
            <td>'. '20' .'</td>                             
            <td>
        </tr>
</tbody>
</table>';

$mpdf->WriteHTML($html);
$mpdf->Output();

