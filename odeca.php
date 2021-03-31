<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Butik | Odeca</title>
</head>

<body>
    <div class="containerOdeca">
        <div class="row" id="odeca">

        </div>
    </div>

    <div id="accordion">

        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#formaZaDodavanjeOdece" aria-expanded="false" aria-controls="formaZaDodavanjeOdece">
                        Dodaj novu odecu
                    </button>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#formaZaPretragu" aria-expanded="false" aria-controls="formaZaPretragu">
                        Pretrazi odecu
                    </button>
                    <a href="http://localhost/butik/" class="btn btn-link">
                        Pocetna
                    </a>
                    <a href="http://localhost/butik/dizajneri.php" class="btn btn-link">
                        Dizajneri
                    </a>
                </h5>
            </div>
            <div id="formaZaDodavanjeOdece" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <form id="dodavanjeOdece">
                        <div class="row">
                            <div class="col form-group">
                                <label for="dizajnerSelect">Dizajner</label>
                                <select class="form-control" id="dizajnerSelect"></select>
                            </div>
                            <div class="col form-group">
                                <label for="kategorija">Kategorija</label>
                                <select class="form-control" id="kategorijaSelect"></select>
                            </div>

                            <div class="col form-group">
                                <label for="velicina">Velicina</label>
                                <input class="form-control" type="text" id="velicina">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="formaZaPretragu" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="col form-group">
                        <label for="dizajnerSelectPretraga">Izaberite dizajnera</label>
                        <select class="form-control" id="dizajnerSelectPretraga"></select>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="./js/odeca.js"></script>
</body>

</html>