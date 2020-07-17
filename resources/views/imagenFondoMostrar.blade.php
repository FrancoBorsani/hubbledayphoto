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

  <link href="css/buttons.css" rel="stylesheet">

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
#original{
 -webkit-filter: grayscale(-90%);
  filter: grayscale(-90%);
  position: fixed; 
  top: 0; 
  left: 0; 
  /* Preserve aspect ratio */
  min-width: 100%;
  min-height: 100%;
  z-index: -2;
}



#escalaGrises{
  position: fixed; 
  top: 0; 
  left: 0; 
  /* Preserve aspect ratio */
  min-width: 100%;
  min-height: 100%;
  z-index: -2;
 -webkit-filter: grayscale(90%);
  filter: grayscale(90%);
}

#contraste{
  position: fixed; 
  top: 0; 
  left: 0; 
  /* Preserve aspect ratio */
  min-width: 100%;
  min-height: 100%;
  z-index: -2;
 -webkit-filter: contrast(200%);
  filter: contrast(200%);
}


#sepiaEffect{
  position: fixed; 
  top: 0; 
  left: 0; 
  /* Preserve aspect ratio */
  min-width: 100%;
  min-height: 100%;
  z-index: -2;
 -webkit-filter: sepia(90%);
 filter: sepia(90%);
}

#saturateEffect{
  position: fixed; 
  top: 0; 
  left: 0; 
  /* Preserve aspect ratio */
  min-width: 100%;
  min-height: 100%;
  z-index: -2;
 -webkit-filter: saturate(300%);
filter: saturate(300%);
}

#brilloEffect{
  position: fixed; 
  top: 0;
  left: 0;
  /* Preserve aspect ratio */
  min-width: 100%;
  min-height: 100%;
  z-index: -2;
 -webkit-filter: brightness(2.2);
filter: brightness(2.2);
}

</style>

</head>

<body>

  <header>
    <div class="container text-center my-auto"> 
<img src='img/<?= $value ?>/<?= $value ?><?= $value2 ?>.jpg' id="imageLoader">

<button style="--content: 'Original';"  onclick="window.location.reload();">
  <div class="left"></div>
    Original
  <div class="right"></div>
</button>

<button style="--content: 'Escala grises';" onclick="escalaGrises()">
  <div class="left"></div>
    Escala grises
  <div class="right"></div>
</button>

<button style="--content: 'Contraste';" onclick="contraste()">
  <div class="left" style=""></div>
    Contraste
  <div class="right"></div>
</button>

<button style="--content: 'Sepia';" onclick="sepiaEffect()">
  <div class="left" style=""></div>
    Sepia
  <div class="right"></div>
</button>

<button style="--content: 'Saturación';" onclick="saturateEffect()">
  <div class="left" style=""></div>
    Saturación
  <div class="right"></div>
</button>

<button style="--content: 'Brillo';" onclick="brilloEffect()">
  <div class="left" style=""></div>
    Brillo
  <div class="right"></div>
</button>


    </div>
    <div class="overlay"></div>


</body>

<script type="text/javascript">
  function original()
{
  document.getElementById('imageLoader').setAttribute("id", "original");
  }

 function escalaGrises()
{
  document.getElementById('imageLoader').setAttribute("id", "escalaGrises");
  }

  function contraste()
{
  document.getElementById('imageLoader').setAttribute("id", "contraste");
  }

   function sepiaEffect()
{
  document.getElementById('imageLoader').setAttribute("id", "sepiaEffect");
  }
     function saturateEffect()
{
  document.getElementById('imageLoader').setAttribute("id", "saturateEffect");
  }

      function brilloEffect()
{
  document.getElementById('imageLoader').setAttribute("id", "brilloEffect");
  }


</script>

</html>
