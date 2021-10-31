<?php
require "fungsi.php";
$dataTr = ambildata("SELECT UBH.Tgl_Transaksi , UBH.Status, UBH.Nominal, UBH.Nominal
    from user_balance_history UBH , user
    where user.ID = UBH.ID_user AND user.id = 1 AND UBH.ID_user = 1;");

$dataincome = totaldatain();
$dataoutcome = totaldataout();    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Budget</title>
</head>

<body>
    
    <div class="main-content">
        <div class="header">
            <div class="header-title-wrapper">
                <div class="header-title">
                    <h1>E-Wallet
                    </h1>
                    <p>Menampilkan rincian keuangan anda <span class="las la-wallet"></span> </p>
                </div>
            </div>
            <div class="header-action">
                <button class="btn btn-main btn-block">
                    <span class="las la-user">
                        <a href="Transaksi.php">Transaksi</a>
                    </span>
                </button>
            </div>
        </div>
        <main>
            <div class="datas">
                <div class="data">
                    <div class="data-icon">
                        <span class="las la-eye"></span>
                    </div>
                    <div class="data-info">
                        <h4> Total Income</h4>
                        <h1>Rp. <?php foreach ($dataincome as $tin) : ?>
                                <tr>
                                    <td><?= $tin[0] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </h1>
                    </div>

                </div>
                <div class="data">
                    <div class="data-icon">
                        <span class="las la-eye"></span>
                    </div>
                    <div class="data-info">
                        <h4> Total Outcome</h4>
                        <h1><?php foreach ($dataoutcome as $tout) : ?>
                                <tr>
                                    <td>Rp. <?= $tout[0] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </h1>
                    </div>

                </div>
                <div class="data">
                    <div class="data-icon">
                        <span class="las la-eye"></span>
                    </div>
                    <div class="data-info">
                        <h4> Balance Now</h4>
                        <h1>1.5M(dari database)</h1>
                    </div>

                </div>
            </div>

        </main>

        <table>
            <tr>
                <th>Tanggal Transaksi </th>
                <th>Status </th>
                <th>Nominal </th>                

            </tr>
            <?php foreach ($dataTr as $tr) : ?>
                <tr>
                    <td><?= $tr["Tgl_Transaksi"] ?></td>
                    <td><?= $tr["Status"]; ?></td>
                    <td>Rp. <?= $tr["Nominal"]; ?></td>                    
                </tr>
            <?php endforeach ?>


        </table>
    </div>
</body>

</html>