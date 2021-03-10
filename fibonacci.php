<?php

$digitpertama = "";           
$digitkedua = "";      
$hasil = "";          
$deret = "";           
$jumlahderet = "";         

if (isset($_POST['submit'])) { 

    $digitpertama = $_POST["digitpertama"];
    $digitkedua = $_POST["digitkedua"];
    $jumlahderet = $_POST["jumlahderet"];

    $a = $digitpertama;
    $b = $digitkedua;
    $n = $jumlahderet;

    $deret = $a . ", " . $b;
    for ($i = 0; $i < $n - 2; $i++) {

        $hasil = $a + $b;

        $a = $b;
        $b = $hasil;
        $deret = $deret . ", " . $hasil;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Deret Fibonacci Deni</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form method="POST" action="#" class="bg-white form-container p-3" id="forminput">
                    <h2><b>Deret Fibonacci</b></h2>
                    <div class="form-group">
                        <label for="digitpertama">digit pertama </label>
                        <input type="text" class="form-control" value="<?php echo $digitpertama; ?>" id="digitpertama"
                        placeholder="Masukkan Digit Pertama" name="digitpertama" required />
                    </div>
                    <div class="form-group">
                        <label for="digitkedua">digit kedua</label>
                        <input type="text" class="form-control" value="<?php echo $digitkedua; ?>" id="digitkedua"
                        placeholder="Masukkan Digit Kedua" name="digitkedua" required />
                    </div>
                    <div class="form-group">
                        <label for="jumlahderet">Jumlah deret</label>
                        <input type="text" class="form-control" value="<?php echo $jumlahderet; ?>" id="jumlahderet"
                        placeholder="Masukkan Jumlah Deret" name="jumlahderet" required />
                    </div>
                    <br><button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">Hitung</button></br>
                    <div class="form-group">
                        <h4 style="text-align: center;"><b>Hasil</b></h4>
                        <h4 style="background-color:violet; color: white;; text-align: center; border-radius: 4px;"><?php echo $deret; ?></h4>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>