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
    @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200,900');

:root {
  /* --text-color: hsla(210, 50%, 85%, 1);*/
     --text-color: #000000;
  --shadow-color: hsla(210, 40%, 52%, .4);
  --btn-color: hsl(210, 80%, 42%);
  --bg-color: #141218;
}

* {
  box-sizing: border-box;
}

button {
  position:relative;
  padding: 5px 10px;  
  border: none;
  background: none;
  cursor: pointer;
  
  font-family: "Source Code Pro";
  font-weight: 900;
  text-transform: uppercase;
  font-size: 15px;  
  color: var(--text-color);
  
  /*background-color: var(--btn-color);*/
  background-color: #FFFFFF;
  box-shadow: var(--shadow-color) 2px 2px 22px;
  border-radius: 4px; 
  z-index: 0;  
  overflow: hidden;   
}


  </style>

</head>

<body id="page-top">

  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">BIENVENIDO</h1>
      <h3 class="mb-5">
        <em>Mejor foto del telescopio espacial Hubble en el dia de tu cumpleaños u otra fecha</em>
      </h3>
    <form action="{{ route('imagenfondo') }}" method="POST" role="form">
       {{  csrf_field() }}
   <select name="mes" id="mes">
       <option value="enero">Enero</option>
       <option value="febrero">Febrero</option>
       <option value="marzo">Marzo</option>
       <option value="abril">Abril</option>
       <option value="mayo">Mayo</option>
       <option value="junio">Junio</option>
       <option value="julio">Julio</option>
       <option value="agosto">Agosto</option>
       <option value="septiembre">Septiembre</option>
       <option value="octubre">Octubre</option>
       <option value="noviembre">Noviembre</option>
       <option value="diciembre">Diciembre</option>
</select>



 <select name="dia" id="dia">
  <option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</br>
</br>
<br>
<button style="--content: 'Enviar';" value="Submit">
  <div class="left"></div>
    Enviar
  <div class="right"></div>
</button>
</form>
 <?= $consulta ?>/
  <!--     <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a> -->
    </div>
    <div class="overlay"></div>




  </header>



</body>

    <script type="text/javascript" src="js/scripts.js"></script>
      

</html>
