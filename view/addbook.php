<?php
include ('../controller/connection.php');
include ('../model/book.php');

if (isset ($_POST["title"])){

  $id = $_POST["id"];
  $title = $_POST["title"];
  $editorial = $_POST["editorial"];
  $saga = $_POST["saga"];
  $price = $_POST["price"];

  $query = 'create (n:book {id:'".$id."', title:'".$title."', editorial:'".$editorial."', saga:'".$saga."', price:'".$price."'})';
  $result = $connection->sendCypherQuery($query)->getResult();
}

if (isset ($_POST["eliminar"])){

  $del = $_POST["eliminar"];

  $query = "MATCH path = (e: book)
            WHERE e.title = {theName}
            DELETE path";
            
  $params = ['theName' => .$del.];
  $result = $connection->sendCypherQuery($query, $params);
}
?>

<div class="" style="margin: 100px; padding: 100px; background: black;  align-items: center">
  <h1 style="color: white">Añadir book</h1>
  <form class="" action="addbook.php" method="post" style="width:30%; display: inline">
    <input type="text" name="id" style="display: block; margin: 30px">
    <input type="text" name="title" style="display: block; margin: 30px">
    <input type="text" name="editorial" style="display: block; margin: 30px">
    <input type="text" name="saga" style="display: block; margin: 30px">
    <input type="text" name="price" style="display: block; margin: 30px">
    <input type="submit" name="Enviar" value="Enviar " style="display: block; margin: 30px">
  </form>
  <h1 style="color: white">Eliminar Libro</h1>
  <form class="" action="addbook.php" method="post" style="display: inline; width:30%">
    <input type="text" name="eiminar" style="display: block; margin: 30px">
    <input type="submit" name="Eliminar" value="Eliminar" style="display: block; margin: 30px">
  </form>
</div>
