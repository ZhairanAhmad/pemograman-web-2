<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pekan 5 - Praktikum 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <fieldset class="py-5">
            <legend>Menghitung Rumus Luas dan Keliling Persegi Panjang</legend>
            <form method="post" action="#"> 
                <div class="row mb-3 pt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Panjang</label>
                    <div class="col-sm-10">
                        <input type="number" placeholder="Masukkan panjang" class="form-control" id="panjang" name="panjang">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Lebar</label>
                    <div class="col-sm-10">
                        <input type="number" placeholder="Masukkan lebar" class="form-control" id="lebar" name="lebar">
                    </div>
                </div>
                <div class="form-group row mt-3 mx-3">
                    <div class="offset-2 col-6">
                        <button type="submit" name="submit" class="btn btn-primary"> Submit</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .result {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result h2 {
            margin-bottom: 20px;
        }
        .list-group-item {
            background-color: transparent;
            border: none;
            padding: 5px 0;
        }
        .list-group-item strong {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="result">
    <?php
if (isset($_POST['submit'])) {
	require_once 'function_tugas4.php';

	//Tangkap Data dari Form
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    //Buat Objek
	$ns = new persegiPanjang($lebar, $panjang);
	
	//Tampilkan Data
	echo "<h2>Hasil Inputan :</h2>";
	echo "<p>Panjang: " .$ns->panjang. " cm</p>";
	echo "<p>Lebar: " .$ns->lebar. " cm</p>";
	echo "<p>Luas Persegi Panjang (p x l) = ". $ns->panjang. " x ". $ns->lebar. " = ". $ns->rumusLuas()." cm</p>";
	echo "<p>Keliling Persegi Panjang 2(p + l) = 2($ns->panjang + $ns->lebar) = ". $ns->rumusLuas()." cm</p>";
}   
?>
</div>
</div>
</body>
</html>

