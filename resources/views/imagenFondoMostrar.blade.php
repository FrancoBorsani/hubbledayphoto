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
     #fondo{
    background:url('img/<?= $value ?>/<?= $value ?><?= $value2 ?>.jpg') no-repeat center center;
    min-height:100%;
    background-size:cover;
} 
</style>
</head>

<body>

  <header class="masthead d-flex" id="fondo">
    <div class="container text-center my-auto"> 
  <!--     <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a> -->
<p>
Upload an image from your desktop and select a filter from the select:
</p>
<input type="file" id="imageLoader"/>
<label for="filter-changer">Select a filter to apply</label>
<select id="filter-changer">
  <option value="none">None</option>
  <option value="red">Red</option>
  <option value="gaussian">Gaussian</option>
  <option value="grayscale">Grayscale</option>
  <option value="highpass">highpass</option>
  <option value="invert">invert</option>
  <option value="laplacian">laplacian</option>
  <option value="prewittHorizontal">Prewitt Horizontal</option>
  <option value="prewittVertical">Prewitt Vertical</option>
  <option value="roberts">roberts</option>
  <option value="saturation">saturation</option>
  <option value="sepia">sepia</option>
  <option value="sharpen">sharpen</option>
  <option value="sobelHorizontal">sobel Horizontal</option>
  <option value="sobelVertical">sobel Vertical</option>
  <option value="thresholding">thresholding</option>
</select>

<br>


<img id="original-image" />
<canvas id="filtered-image" />







    </div>
    <div class="overlay"></div>

  </header>

</body>

<script src="js/lena.js"></script>
<script src="js/filtros.js"></script>


</html>
