<!doctype html>
<html lang="en">

<head>
    <title>Data DKI Jakarta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4">Data Pemantauan COVID-19</h1>
        <p class="lead">Dalam daerah DKI Jakarta, Jawa Barat, Banten, Jawa Tengah</p>
        <hr class="my-4">
        <p>Cek data pemantauan COVID-19 sekarang. #STAYATHOME</p>
        <div class="container">
            <form method="POST" action="action.php">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Positif</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="positif">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Dirawat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="dirawat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Sembuh</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="sembuh">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Meninggal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="meninggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Operator</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="operator">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIM Mahasiswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="nim">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">no.</th>
                        <th scope="col">Jumlah Positif</th>
                        <th scope="col">Jumlah Dirawat</th>
                        <th scope="col">Jumlah Sembuh</th>
                        <th scope="col">Jumlah Meninggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>


            </table>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>