<?php 

$nama = "hakim ziyech";
/*
echo $nama;
echo "<br>";
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
*/

/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n. " ".$nama."<br>"; 
}
*/

/*
$no = 10;
$i = 0;
while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

/*
$data = array('ferari', 'Bmw', 'Lamborghini', 'Tesla', 'Inova', 'Xenia');
//echo $data[5];
/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN
/*
if ($nama == "Zein Malik") {
    echo $nama." adalah artis luar negri ";
} else if($nama == "Zein") {
    echo $nama." adalah orang arab ";
}else {
    echo $nama." man anta?";
}
*/
/*
switch($nama) {
    case "Zein";
        $pesan = $nama." adalah orang Arab";
    break;
    case "Ferdi";
        $pesan = $nama." bukan orang Arab";
    break;
    default:
        $pesan = $nama." Man anta?";
}
echo $pesan;
*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(!empty($_POST['submit'])) {

        switch($_POST['nama']) {
            case "zein";
                $pesan = $_POST['nama']." adalah artis luar negri ";
            break;
            case "Ferdi";
                $pesan = $_POST['nama']." bukan orang Arab";
            break;
            default:
                $pesan = $_POST['nama']." man anta?";
        }

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }

        } else {
            echo "Anda belum input nama dan jumlah";
    }
    
    ?>
</body>
</html>