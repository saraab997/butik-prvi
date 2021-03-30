$(document).ready(function () {
  sviDizajneri();
  function sviDizajneri() {
    $.ajax({
      type: "GET",
      url: "http://localhost/butik/rest/sviDizajneri.php",
      dataType: "json",
      success: function (dizajneri) {
        formirajDizajnere(dizajneri);
      },
    });
  }
  function formirajDizajnere(dizajneri) {
    $(".container").html("");
    for (let index = 0; index < dizajneri.length; index++) {
      const dizajner = dizajneri[index];

      $(".container").append(`
      <div class="row dizajner">
            <div class="col-9">
                <h3>${dizajner.ime_prezime} <small>(${dizajner.poznat_kao})</small></h3>
                <p><b>O dizajneru:</b> <br>
                ${dizajner.o_dizajneru}</p>
                 <button id="${dizajner.dizajner_id}&${dizajner.ime_prezime}&${dizajner.poznat_kao}&${dizajner.o_dizajneru}" class="btn btn-link collapsed izmena" data-toggle="collapse" data-target="#formaZaIzmenuDizajnera" aria-expanded="false" aria-controls="formaZaIzmenuDizajnera">
                        Izmeni dizajnera
                      </button>
                      
            </div>
            <div class="col-3">
                <img alt="slikaDizajnera_${dizajner.poznat_kao}.jpg">
            </div> 
        </div>
      `);
    }
  }

  $("body").on("click", ".izmena", function () {
    let dizajner = $(this).attr("id").split("&");
    console.log(dizajner);
    $("#izmenaDizajnera #dizajner_id").val(dizajner[0]);
    $("#izmenaDizajnera #ime_prezime").val(dizajner[1]);
    $("#izmenaDizajnera #poznat_kao").val(dizajner[2]);
    $("#izmenaDizajnera #o_dizajneru").val(dizajner[3]);
  });

  $("#izmenaDizajnera").submit(function (e) {
    let ime_prezime = $("#izmenaDizajnera #ime_prezime").val();
    let poznat_kao = $("#izmenaDizajnera #poznat_kao").val();
    let o_dizajneru = $("#izmenaDizajnera #o_dizajneru").val();
    let dizajner_id = $("#izmenaDizajnera #dizajner_id").val();
    if (ime_prezime == "" || poznat_kao == "" || o_dizajneru == "") {
      alert("Sva polja moraju biti popunjena!");
      return;
    }
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "http://localhost/butik/rest/izmenaDizajnera.php",
      data: {
        dizajner_id: dizajner_id,
        ime_prezime: ime_prezime,
        poznat_kao: poznat_kao,
        o_dizajneru: o_dizajneru,
      },
      dataType: "json",
      success: function (response) {
        alert(response);
        sviDizajneri();
      },
      error: function (response) {
        alert(response.responseText);
        sviDizajneri();
      },
    });
  });

  $("#dodavanjeDizajnera").submit(function (e) {
    let ime_prezime = $("#ime_prezime").val();
    let poznat_kao = $("#poznat_kao").val();
    let o_dizajneru = $("#o_dizajneru").val();
    if (ime_prezime == "" || poznat_kao == "" || o_dizajneru == "") {
      alert("Sva polja moraju biti popunjena!");
      return;
    }
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "http://localhost/butik/rest/dodajDizajnera.php",
      data: {
        ime_prezime: ime_prezime,
        poznat_kao: poznat_kao,
        o_dizajneru: o_dizajneru,
      },
      dataType: "json",
      success: function (response) {
        alert(response);
        sviDizajneri();
      },
      error: function (response) {
        alert(response.responseText);
        sviDizajneri();
      },
    });
  });
});
