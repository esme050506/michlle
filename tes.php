<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,
	 initial-scale=1,maximun-scale=1,munimun-scale=1">
	<title>MENU</title>
	<link rel="stylesheet" type="text/css" href="19.css">
</head>
<body>
<h1>MENU<br><br>

<div class="caja1">
<a href="index.php"><p class="texto1">regresar a inicio de secion </p></a>
</div>

<div class="dropdown">
  <button>agregar datos ALMACEN</button>
  <div class="dropdown-options">

    <a href="FORM2.PHP">CLIENTES</a>


  </div>
</div>

<div class="dropdown">
  <button>consultar datos ALMACEN</button>
  <div class="dropdown-options">
    <a href="FORM5.PHP">CATEGORIA</a>
    <a href="FORM6.PHP">CLIENTES</a>
    <a href="FORM7.PHP">PRODUCTO</a>



  </div>
</div>
  
<div class="dropdown">
  <button>ELIMINAR datos ALMACEN</button>
  <div class="dropdown-options">
    <a href="FORM8.PHP">CATEGORIA</a>
    <a href="FORM9.PHP">CLIENTES</a>
    <a href="FORM10.PHP">PRODUCTO</a>  </div>
</div>

<div class="dropdown">
  <button> IMAGENES ALMACEN </button>
  <div class="dropdown-options">
  
    <a href="FORM11.PHP">CLIENTES</a>
    <a href="FORM13.PHP">ADMINISTRADOR</a>
    <a href="FORM12.PHP">PRODUCTOS</a>

  </div>
</div>
<div class="dropdown">
  <button>PDF datos ALMACEN</button>
  <div class="dropdown-options">
    <a href="PDF1.PHP">comentario</a>
    <a href="PDF2.PHP">administrador</a>
    <a href="PDF3.PHP">productos</a>
    <a href="PDF4.PHP">clientes</a>
    <a href="PDF5.PHP">factura</a>
    <a href="PDF6.PHP">provedor</a>
    <a href="PDF7.PHP">categoria</a>
    <a href="PDF8.PHP">ventas</a>


  </div>
</div>
<div class="dropdown">
  <button>PDF FACTURAS ALMACEN</button>
  <div class="dropdown-options">
    <a href="FACTURA1.PHP">factura</a>



  </div>
</div>
<style >
 #dropdown{
      translate: scale(1,.5);
    }
    #dropdown2{
      translate:rotate(4deg);
    }
    #dropdown3{
      translate:skewX(-45deg);
    }
    #dropdown4{
      translate:skewY(-45deg);

    }
  </style>
</body>
</html>
