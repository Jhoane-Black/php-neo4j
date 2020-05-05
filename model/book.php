<?php
class book
{
  public $id  = "";
  public $title = "";
  public $editorial = "";
  public $saga = "";
  public $price = "";

  public function book ($id, $title, $editorial, $saga, $price)
  {
    $this->id = $id;
    $this->title = $title;
    $this->editorial = $editorial;
    $this->saga = $saga;
    $this->price = $price;
  }
}
?>
