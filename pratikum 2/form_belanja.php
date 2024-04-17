<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form method="POST" action="form_belanja.php">
        <h2>Belanja Online</h2>
        <hr>

        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="form-group row mt-3 mx-3">
                        <label for="Customer" class="col-2 col-form-label">Customer</label>
                        <div class="col-6">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mt-3 mx-3">
                        <label class="col-2">Pilih Produk</label>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_0" type="radio" required="required" class="custom-control-input" value="TV">
                                <label for="radio_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_1" type="radio" required="required" class="custom-control-input" value="KULKAS">
                                <label for="radio_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_2" type="radio" required="required" class="custom-control-input" value="MESIN CUCI">
                                <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3 mx-3">
                        <label for="Jumlah" class="col-2 col-form-label">Jumlah</label>
                        <div class="col-6">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mt-3 mx-3">
                        <div class="offset-2 col-6">
                            <input type="submit" name="proses" class="btn btn-success">
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="bg-primary text-light">
                                <td>Daftar Harga</td>
                            </tr>
                            <tr>
                                <td>TV : 4.200.000</td>
                            </tr>
                            <tr>
                                <td>Kulkas : 3.100.000</td>
                            </tr>
                            <tr>
                                <td>Mesin Cuci : 3.800.000</td>
                            </tr>
                            <tr class="bg-primary text-light">
                                <td>Harga Dapat Berubah Setiap Saat</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>

    <hr>
    <?php
    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
    $customer = isset($_POST['customer']) ? $_POST['customer'] : '';
    $produk = isset($_POST['produk']) ? $_POST['produk'] : '';
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
    $tv = 4200000;
    $kulkas = 3100000;
    $mesin_cuci = 3800000;
    $total = 0;

    echo 'proses : ' . $proses;
    echo '<br/>Nama Customer : ' . $customer;
    echo '<br/>Produk Pilihan : ' . $produk;
    echo '<br/>Jumlah Beli : ' . $jumlah;
    if ($produk == 'TV') {
        $total = $tv * $jumlah;
    } elseif ($produk == 'KULKAS') {
        $total = $kulkas * $jumlah;
    } elseif ($produk == 'MESIN CUCI') {
        $total = $mesin_cuci * $jumlah;
    } else {
        echo '<br/>Produk tidak valid';
    }
    echo '<br/>Total Harga : Rp ' . $total;
    ?>
</body>

</html>