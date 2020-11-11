
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    
    
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        #button {
 padding: 0;
 }

Este código elimina el padding que se puede crear por defecto en una lista de elementos, en este caso nuestro menú.

Por defecto, estas listas se crean de forma vertical, pero nuestro menú tiene que ser horizontal, así que le diremos que se pongan en línea usando “display: inline.”

#button li {
 display: inline;
 }
 #button li a {
 font-family: Arial;
 font-size: 11px;
 text-decoration: none;
 float: left;
 padding: 10px;
 background-color: #2175bc;
 color: #fff;
 }
 #button li a:hover {
 background-color: #2586d7;
 margin-top: -2;
 padding-bottom: 12px;]
 }
    </style>
</head>
<body>
  
    <ul id=”button”>
 <li><a href=”#”>Inicio</a></li>
 <li><a href=”#”>Sobre nosotros</a></li>
 <li><a href=”#”>Servicios</a></li>
 <li><a href=”#”>Productos</a></li>
 <li><a href=”#”>Contacto</a></li>
 </ul>


</body>
</html>