<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Web Dev Folarium</title>
</head>

<body>
    <p>IDGAF</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi alias rem, voluptatibus eligendi perferendis laudantium aut quisquam debitis maiores accusantium dicta dolorem minima, facilis modi deserunt aspernatur cum ut autem?</p>

    <ul>
        <li>Hahahaha</li>
        <li>Cuma Test</li>
        <li>Yo</li>

    </ul>

    <script src="testScript.js"></script>
</body>

</html>

<?php
// mencari bilangan prima dari angka 1 - n
// $n = 100;
// for ($i = 1; $i <= $n; $i++) {
//     if ($i == 2) {
//         echo "$i adalah bilangan prima <br>";
//     } else {
//         for ($cek = 1; $cek < $i; $cek++) {
//             if ($cek == 1) {
//                 continue;
//             } else if ($i % $cek == 0) {
//                 break;
//             } else if ($cek == $i - 1) {
//                 echo "$i adalah bilangan prima <br>";
//             }
//         }
//     }
// }

//menentukan apakah n adalah bilangan prima
// $n = 97;
// if ($n == 1) {
//     echo "$n bukan bilangan prima";
// } else {
//     for ($i = 1; $i < $n; $i++) {
//         if ($i == $n - 1 && $n % ($i + 1) == 0) {
//             echo "$n adalah bilangan prima";
//         }
//         else if ($n % $i == 0 && $i != 1) {
//             echo "$n bukan bilangan prima";
//             break;
//         }
//     }
// }

// mencari bilangan ganjil dari angka 1 - n
// $n = 100;
// $i = 1;
// while ($i <= $n) {
//     echo ($i%2 == 0) ? " ":"$i";

//     $i++;
// }

// mencari bilangan genap dari angka 1 - n
// $n = 100;
// $i = 1;
// do {
//     echo $i%2 == 0 ? "$i":" ";
//     $i++;
// } while ($i <= $n);

// pola segitiga 1
// for ($i=0; $i < 5; $i++) { 
//     for ($print=0; $print <= $i; $print++) { 
//         echo "* ";
//     }
//     echo "<br>";
// }

// pola segitiga 2
// for ($i=5; $i > 0; $i--) { 
//     for ($print=0; $print < $i; $print++) { 
//         echo "* ";
//     }
//     echo "<br>";
// }

// pola segitiga 3
// $n = 10; //jumlah banyak nya segitiga
// for ($i=0; $i < $n; $i++) { 
//     for ($space=$n; $space > $i; $space--) { 
//         echo "&nbsp ";
//     }
//     for ($print=0; $print <= $i; $print++) { 
//         echo "* &nbsp";
//     }
//     echo "<br>";
// }

// pola segitiga 4
// $n = 10;
// for ($i=0; $i < $n; $i++) { 
//     for ($space=0; $space <= $i ; $space++) { 
//         echo "&nbsp ";
//     }
//     for ($print=$n; $print > $i; $print--) { 
//         echo "* &nbsp";
//     }

//     echo"<br>";
// }

// 5 angka random kelipatan 5 dari 1-100
// $angka = 5;
// while ($angka > 0) {
//     $angkaRandom = rand(1,100);
//     if ($angkaRandom % 5 == 0) {
//         if ($angkaRandom <= 60) {
//             $text = " Kurang";
//         } else if ($angkaRandom > 60 && $angkaRandom <= 70) {
//             $text = " Cukup";
//         }
//         else if ($angkaRandom > 70 && $angkaRandom <= 80){
//             $text = " Baik";
//         }
//         else if ($angkaRandom > 80){
//             $text = " Luar Biasa";
//         }

//         echo "$angkaRandom $text <br>";
//         $angka--;
        
//     }
    
// }

// deret angka kelipatan 3 dari 1 - n 
// $n = 100;
// $angka="";
// for($i = 0; $i < $n; $i++){
//     if ($i%3 == 0) {
//         $angka .="$i ";
//     }
// }
// echo $angka;

// fungsi cek nama kota 
function cekKota($kota = ""){
    $arr = ["jakarta", "yogyakarta", "bandung", "bogor", "semarang"];
    foreach($arr as $index => $isi){
        if(strtolower($kota) == $isi){
            // echo "true";
            // break;
            return true;
        }
        else if($index == count($arr)-1){
            // echo "false";
            return false;
        }
        
            
        
    }
    
}

$cekKota = cekKota("yogyakarta");
echo $cekKota == true ? "true":"false";

//test ubah data dari github
// coba di pull dari git
echo "sukses";

?>
