
<?php
$login = $_POST['login'];
if ($login == 'ForBhavya' | $login == 'NitinIsRussian') {
?>
<!DOCTYPE html>
<html>

<head>
 <title>Enter URL</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand font" href="#">Url Changer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Refress</a>
          </li>
        </ul>
        <form class="d-flex">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
      </div>
    </div>
  </nav>


  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <div class="mid position-absolute top-50 start-50 translate-middle border border-info border-3 rounded-3">
  <form method="post" action="index.php">  
  <input id="url" type="text" name='url' placeholder="Enter url" />
  <input type="hidden" name='l' value="<?php echo $login; ?>"/>
    <button class="go btn btn-primary">GO</button>
    <div id="link"></div>

  </div>
</from>
</head>

<body>
  <script src="script.js"></script>
</body>

</html>
<?php
 } elseif ($_POST['l'] == 'ForBhavya') {
  ?>
<!DOCTYPE html>
<html>

<head>
 <title>Enter URL</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand font" href="#">Url Changer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Refress</a>
          </li>
        </ul>
        <form class="d-flex">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
      </div>
    </div>
  </nav>


  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <div class="mid position-absolute top-50 start-50 translate-middle border border-info border-3 rounded-3">
  <form method="post" action="index.php">  
  <input id="url" type="text" name='url' placeholder="Enter url" />
  <input type="hidden" name='password' value="<?php echo $login; ?>"/>
    <buttom class="go btn btn-primary" href="">GO</button>
    <div id="link"></div>
  <?php
  $url = $_POST['url'];
  $l = $_POST['l'];
  ?>
  </div>
</from>
</head>

<body>
  <script src="script.js"></script>
</body>

</html>

  <?php
 }else {
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand font" href="#">Url Changer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Refress</a>
          </li>
        </ul>
        <form class="d-flex">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
      </div>
    </div>
  </nav>


  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>URL changer</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <div class="midlo position-absolute top-50 start-50 translate-middle border border-info border-3 rounded-3">
  <form method="post" action="index.php">
    <input type="text" name="login" placeholder="Enter Password To Login" />
    <button class="go btn btn-primary" type="submit" name="submit" value="submit" class="btn primary" >Submit</button>
  </form>
  </div>
</head>
 </html>
<?php
}
?>