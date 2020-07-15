<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hubble Day Photo</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">


<style type="text/css">
     #imageLoader{
  position: fixed; 
  top: 0; 
  left: 0; 
  /* Preserve aspect ratio */
  min-width: 100%;
  min-height: 100%;
  z-index: -2;
}


#loc{
  position: fixed; 
  top: 0; 
  left: 0; 
  /* Preserve aspect ratio */
  min-width: 100%;
  min-height: 100%;
  z-index: -2;
 -webkit-filter: blur(5px); /* Safari 6.0 - 9.0 */
  filter: blur(5px);
}

</style>

</head>

<body>

  <header>
    <div class="container text-center my-auto"> 
<img src='img/<?= $value ?>/<?= $value ?><?= $value2 ?>.jpg' id="imageLoader">
<button onclick="myFunction()">Click me</button>


    </div>
    <div class="overlay"></div>


</body>

<script type="text/javascript">
  function myFunction()
{
  document.getElementById('imageLoader').setAttribute("id", "loc");
  }
</script>


<script src="js/lena.js"></script>
<script src="js/filtros.js"></script>

</html>
