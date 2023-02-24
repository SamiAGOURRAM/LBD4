<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="Exercice 2.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <div class="container">
    <select class="form-select" aria-label="Default select example" name="choice">
        <option disabled selected>Open this select menu</option>
        <option value="DB">DB</option>
        <option value="web">WEB</option>
      </select>
    </div>
    <input type="submit">
    </form>

<?php if(isset($_GET['choice'])) : ?>
<?php if($_GET['choice'] === 'DB') : ?>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Link</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>mysql</td>
      <td>https://www.mysql.com/</td>
      <td>*****</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>PostgreSQL</td>
      <td>https://www.postgresql.org/</td>
      <td>*****</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>oracle</td>
      <td>https://www.oracle.com/</td>
      <td>****</td>
    </tr>
  </tbody>
</table>
<?php elseif($_GET['choice'] ==='web') : ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">link</th>
      <th scope="col">rating</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>php</td>
      <td>https://www.php.net/</td>
      <td>*****</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>html</td>
      <td>https://www.w3schools.com/html/default.asp</td>
      <td>****</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>JavaScript</td>
      <td>https://www.javascript.com/ </td>
      <td>**</td>
    </tr>
  </tbody>
</table>
<?php endif ; ?>
<?php endif ; ?>
</body>
</html>