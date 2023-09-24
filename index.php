
<?php
echo "hello";
$login = $_GET('login');
if (isset($login)) {
?>
<!DOCTYPE html>
<html>

<head>
 <title>Php shift</title>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand font" href="#">PW Url</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://pwurl.ha1772007.repl.co">Refress</a>
          </li>
        </ul>
        <form class="d-flex">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
      </div>
    </div>
  </nav>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <div class="mid position-absolute top-50 start-50 translate-middle border border-info border-3 rounded-3">
    <input id="url" type="text" placeholder="Enter url" />
    <a class="go btn btn-primary" href="javascript:run()">GO</a>
    <div id="link"></div>
  </div>
</head>

<body>
  <script src="script.js"></script>
</body>

</html>
<?php } else {
  echo "<h1>NO LOGIN USER</h1>";
}
?>