<?php

    $servername = "localhost";
    $username   = "root";
    $pass       = "";
    $db         = "e-wallet";

    $koneksi = mysqli_connect($servername,$username,$pass,$db);

//cek koneksi
if(!$koneksi){
    die("Koneksi gagal");
}

function ambildata($query)
{
   global $koneksi;
   $result = mysqli_query($koneksi, $query);
   $data = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
   };
   return $data;   
}

function totaldatain()
{
    $in = ("SELECT SUM(IF( status = 'income', nominal, 0)) AS total_income 
    FROM user_balance_history UBH , user
    WHERE user.ID = UBH.ID_user AND user.id = 1 AND UBH.ID_user = 1;");
   global $koneksi;
   $result = mysqli_query($koneksi, $in);
   $data = [];
   while ($row = mysqli_fetch_row($result)) {
      $data[] = $row;
   };
   return $data;   
}


function totaldataout()
{
 $queryoutcom = ("SELECT SUM(IF( Status = 'outcome', nominal, 0)) AS total_outcome      
FROM user_balance_history UBH , user
WHERE user.ID = UBH.ID_user AND user.id = 1 AND UBH.ID_user = 1;");
   global $koneksi;
   $result = mysqli_query($koneksi, $queryoutcom);
   $data = [];
   while ($row = mysqli_fetch_row($result)) {
      $data[] = $row;
   };
   return $data;   
}


function transaksi($datatran)
{
   global $koneksi;   
   $status = htmlspecialchars($datatran["Status"]);
   $nominal = htmlspecialchars($datatran["Nominal"]);
   $tgl = htmlspecialchars($datatran["Tgl_Transaksi"]);   

   $querytambah = "INSERT INTO user_balance_history 
                    VALUES
                    (NULL,1,'$status','$nominal','$tgl')
                    ";
   mysqli_query($koneksi, $querytambah);

   return mysqli_affected_rows($koneksi);
}

?>