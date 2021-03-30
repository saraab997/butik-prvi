$(document).ready(function () {
  sviDizajneri();
  sveKategorije();
  svaOdeca();
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
    console.log(dizajneri);
    $("#dizajnerSelect").html("");
    for (let index = 0; index < dizajneri.length; index++) {
      const dizajner = dizajneri[index];

      $("#dizajnerSelect").append(`
      <option value="${dizajner.dizajner_id}">${dizajner.ime_prezime}</option>
      `);
      $("#dizajnerSelectPretraga").append(`
      <option value="${dizajner.dizajner_id}">${dizajner.ime_prezime}</option>
      `);
    }
  }
  function svaOdeca() {
    $.ajax({
      type: "GET",
      url: "http://localhost/butik/rest/svaOdeca.php",
      dataType: "json",
      success: function (odeca) {
        formirajOdecu(odeca);
      },
    });
  }
  $("body").on("click", ".brisanje", function () {
    console.log($(this).attr("id"));
    $.ajax({
      type: "POST",
      url: "http://localhost/butik/rest/izbrisiOdecu.php",
      data: {
        odeca_id: $(this).attr("id"),
      },
      dataType: "json",
      success: function (response) {
        alert(response);
        svaOdeca();
      },
      error: function (response) {
        alert(response.responseText);
        svaOdeca();
      },
    });
  });

  $("#dizajnerSelectPretraga").change(function (e) {
    e.preventDefault();
    $.ajax({
      type: "GET",
      url: "http://localhost/butik/rest/odecaDizajnera.php",
      data: {
        dizajner_id: $(this).val(),
      },
      dataType: "json",
      success: function (odeca) {
        formirajOdecu(odeca);
      },
      error: function (res) {
        formirajOdecu(JSON.parse(res.responseText));
      },
    });
  });
  function formirajOdecu(odeca) {
    $("#odeca").html("");
    console.log(odeca);
    for (let index = 0; index < odeca.length; index++) {
      const o = odeca[index];

      $("#odeca").append(`
      <div class="col-4">
      <div class="card" >
      <img src="http://localhost/butik/css/images/${
        o.naziv
      }.jpg" class="card-img-top" alt="${o.naziv}.jpg">
      <div class="card-body">
          <h5 class="card-title">${o.naziv}</h5>
          <h6 class="card-subtitle mb-2 text-muted">${
            o.velicina ? o.velicina : "Nepoznata velicina"
          }</h6>
          <p class="card-text">${o.ime_prezime}</p>
          <button id="${
            o.odeca_id
          }" class="btn btn-danger btn-block brisanje">Izbrisi</button>
      </div>
      </div>
      </div>
      `);
    }
  }
  function sveKategorije() {
    $.ajax({
      type: "GET",
      url: "http://localhost/butik/rest/sveKategorije.php",
      dataType: "json",
      success: function (kategorije) {
        formirajKategorije(kategorije);
      },
    });
  }

  function formirajKategorije(kategorije) {
    $("#kategorijaSelect").html("");
    for (let index = 0; index < kategorije.length; index++) {
      const kategorija = kategorije[index];

      $("#kategorijaSelect").append(`
      <option value="${kategorija.kategorija_id}">${kategorija.naziv}</option>
      `);
    }
  }

  $("#dodavanjeOdece").submit(function (e) {
    let dizajner_id = $("#dizajnerSelect").val();
    let kategorija_id = $("#kategorijaSelect").val();
    let velicina = $("#velicina").val();
    if (velicina == "") {
      alert("Velicina ne sme biti prazna!");
      return;
    }
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "http://localhost/butik/rest/dodajOdecu.php",
      data: {
        dizajner_id: dizajner_id,
        kategorija_id: kategorija_id,
        velicina: velicina,
      },
      dataType: "json",
      success: function (response) {
        alert(response);
        svaOdeca();
      },
      error: function (response) {
        alert(response.responseText);
        svaOdeca();
      },
    });
  });
});
