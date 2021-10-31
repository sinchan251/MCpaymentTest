<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>1. Two Number</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nomor">Input Number</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="nomor" name="number[]">
                </td>
            </tr>
            <tr>
                <td><label for="nomor">Input Number</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="nomor" name="number[]">
                </td>
            </tr>
            <tr>
                <td><label for="nomor">Input Number</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="nomor" name="number[]">
                </td>
            </tr>
            <tr>
                <td><label for="nomor">Input Number</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="nomor" name="number[]">
                </td>
            </tr>
            <tr>
                <td><label for="nomor">Input Number</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="nomor" name="number[]">
                </td>
            </tr>
            <tr>
                <td><label for="target">Input Target</label></td>
                <td>:</td>
                <td>
                    <input type="number" id="target" name="target">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="cari">submit</button></td>
                <td>
                </td>
            </tr>
        </table>

        <?php

        if (isset($_POST["cari"])) {

            echo "data nilai yang dimasukkan :<br> [";
            foreach($_POST["number"] as $nm){
                echo " $nm,";
            }
            echo "]<br>target : ";
            print_r($_POST["target"]);
            echo "<br>";


            function carijwb(array $nomor, int $target)
            {
                $jumlaharray = count($nomor);
                for ($i = 0; $i < $jumlaharray ; $i++) {
                    // trace
                    //0; 0 < 4 ;0++ > yesh
                    for ($j =$i+1; $j < $jumlaharray; $j++) {
                        // trace 0 ; 0<4 ;0++ >yes
                        $tambahnilaiarray = $nomor[$i] + $nomor[$j];
                        //trace misal 4 + 6
                        if ($tambahnilaiarray == $target) {                            
                            return "[$i,$j]" ;
                        }
                    }
                }
                return ;
                
            }

            
            echo "Hasilnya adalah ";
           print_r (carijwb($_POST["number"], $_POST["target"]));

            
        }
        ?>


    </form>

</body>

</html>