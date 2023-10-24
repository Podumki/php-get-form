
<?php
// $file = 'data.csv';
// $current = file_get_contents($file);
// $current .= ($_POST['hostname']. $_POST['domain']. $_POST['ipadress']. $_POST['macadress']. $_POST['username']. $_POST['password']. $_POST['description'] );
// file_put_contents($file, $current);

$datalist = array (
    // array('Hostname', 'Domain', 'IP-Adress', 'MAC-Adress', 'Username', 'Password', 'Description'),
    array($_POST['hostname'], $_POST['domain'], $_POST['ipadress'], $_POST['macadress'], $_POST['username'], $_POST['password'], $_POST['description'] ),
);

$fileData = [];
$row = 1;
if(($fpr = fopen('data.csv', 'r')) !== false) {
    while (($data = fgetcsv($fpr, null, ';')) ==! false ) {
        array_push($fileData, $data);
        }
    }
fclose($fpr);

$fpw = fopen("data.csv","w");
if (count($fileData) !== 0) {
    foreach($fileData as $currentData) {
        fputcsv($fpw, $currentData, ';');
    }
} else {
    $header = array('Hostname', 'Domain', 'IP-Adress', 'MAC-Adress', 'Username', 'Password', 'Description');
    fputcsv($fpw,  $header, ';');
}
foreach ($datalist as $fields) {
    fputcsv($fpw, $fields, ';');
}
fclose($fpw);


$data = 'hostname='.$_POST['hostname'].'&domain='.$_POST['domain'].'&ipadress='.$_POST['ipadress'].'&macadress='.$_POST['macadress'].'&username='.$_POST['username'].'&password='.$_POST['password'].'&description='.$_POST['description'];

header("Location: http://localhost/senddata.php?".$data);
//? - beginning of GET vars
//& - разделение

?>