<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
    function basic(){
      print("Lorem ipsum dolor1<br>");
      print("Lorem ipsum dolor2<br>");
    }
    basic();
     ?>

    <h2>parameeter &amp; argument</h2>
    <?php
    function sum($left, $right){
      print($left+$right);
      print("<br>");
    }
    sum(2,4);
    sum(4,6);
     ?>

    <h2>return</h2>
    <?php
    function sum2($left, $right){
      return $left + $right;
    }
    print(sum2(2,4));
     ?>
  </body>
</html>
