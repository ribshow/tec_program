<?php
    // timezone php

    // na herança inclui-se a classe pai primeiro que as classes filhas
    require_once "conta.class.php";
    require_once "corrente.class.php";
    require_once "poupanca.class.php";
    
    // uma forma
    $conta = new conta("123-4","5678-9",500.00);
    $conta1 = new conta("432-1","9876-5",789.58);

    $corrente = new corrente(1000.00,"123-2","3456-7",500.00);
    echo "{$corrente->getSaldo()}<br>";
    $corrente->retirar(700);
    echo "{$corrente->getSaldo()}<br>";
    $poupanca = new poupanca(25, "2345-5","6789-1", 3000);
    $poupanca->retirar(3025);
    echo "{$poupanca->getSaldo()}<br>";
    //outra forma
    //$conta = new conta(conta:"5678-9",saldo:500.00,agencia:"123-4");


    /*
    echo "<pre>";
    var_dump($poupanca);
    echo "<pre>";

    echo "<pre>";
    var_dump($corrente);
    echo "<pre>";

    echo $conta->getSaldo();
    echo "<br/>";
    $conta->setSaldo(1000);
    echo $conta->getSaldo();
    echo "<br/>";

    echo $conta1->getSaldo();
    echo "<pre>";
    var_dump($conta);
    echo "<pre>";
    */

?>