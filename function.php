<?php
  function getrandomNumber($charlenght){
    $charsNumber = "0123456789";
    $charsLowerCase = "abcdefghijklmnopqrstuwyz";
    $charsUppuerCase = "ABCDEFGHIJKLMNOPRSTUWYZ";
    $symbols = "!#£$&*@;:-+<>=/|_^[]{}";
    $charsTot = $charsLowerCase . $charsNumber . $charsUppuerCase . $symbols;

    $finalPsw = "";

    for ($i = 0; $i < $charlenght; $i++) {
      $charsIndex = rand(0, strlen($charsTot)-1);
      $finalPsw = $charsTot[$charsIndex];
    }
    return $finalPsw;
  }
?>