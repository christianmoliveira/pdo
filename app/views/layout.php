<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>
  <h2 class="text-center">User CRUD</h2>

  <div class="container">
    <div class="btn-group" role="group">
      <a class="btn btn-default" href="/" role="button">Início</a>
      <a class="btn btn-default" href="/user_create" role="button">Cadastrar</a>
    </div>

    <?php require $layout->load(); ?>
  </div>

</body>

</html>