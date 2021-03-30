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

    <div class="container">

    </div>

    <div id="accordion">

        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#formaZaDodavanjeDizajnera" aria-expanded="false" aria-controls="formaZaDodavanjeDizajnera">
                        Dodaj novog dizajnera
                    </button>
                    <a href="http://localhost/butik/" class="btn btn-link">
                        Na pocetnu
                    </a>
                    <a href="http://localhost/butik/odeca.php" class="btn btn-link">
                        Na odecu
                    </a>
                </h5>
            </div>
            <div id="formaZaDodavanjeDizajnera" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <form id="dodavanjeDizajnera">
                        <div class="row">
                            <div class="col form-group">
                                <label for="ime_prezime">Ime i prezime</label>
                                <input type="text" class="form-control" id="ime_prezime">

                                <label for="poznat_kao">Poznatiji kao</label>
                                <input type="text" class="form-control" id="poznat_kao">
                            </div>
                            <div class="col form-group">
                                <label for="o_dizajneru">O dizajneru</label>
                                <textarea type="text" class="form-control" id="o_dizajneru"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="formaZaIzmenuDizajnera" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <form id="izmenaDizajnera">
                        <div class="row">
                            <div class="col form-group">
                                <label for="ime_prezime">Ime i prezime</label>
                                <input type="text" class="form-control" id="ime_prezime">

                                <label for="poznat_kao">Poznatiji kao</label>
                                <input type="text" class="form-control" id="poznat_kao">
                                <input type="text" style="display:none" class="form-control" id="dizajner_id">
                            </div>
                            <div class="col form-group">
                                <label for="o_dizajneru">O dizajneru</label>
                                <textarea type="text" class="form-control" id="o_dizajneru"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="./js/dizajneri.js"></script>
</body>

</html>