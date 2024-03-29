<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/signin.css">
  <title>Henkilön Syöttö</title>
</head>

<body>
   <!-- navbar -->
   <?php include 'navbar/navbar.php'?>
  <div class="container">
    <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <form class="form-signin" action="henkilonLisays.php" method="POST">

        <h1 class="h3 mb-3 font-weight-normal">Lisää henkilö</h1>

        <label for="inputEtunimi" class="sr-only">Etunimi</label>
        <input name="etunumi" type="text" id="inputText" class="form-control" placeholder="Etunimi" required autofocus>

        <label for="inputSukunimi" class="sr-only">Sukunimi</label>
        <input name="sukunimi" type="text" id="inputText" class="form-control" placeholder="Sukunimi" required>
        <label for="inputOsasto" class="sr-only">Osasto</label>
        <input name="osasto" type="text" id="inputText" class="form-control" placeholder="Osasto" required>
        <label for="inputPalkka" class="sr-only">Palkka</label>
        <input name="palkka" type="text" id="inputText" class="form-control" placeholder="Palkka" required>
        <div class="checkbox mb-3">

        </div>
        <button class="btn btn-lg btn-info btn-block" type="submit">Talenna</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
      </form>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>