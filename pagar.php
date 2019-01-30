<?php 

 if(!isset($_POST['submit'])) {
   exit("hubo un error");
 }
 
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;


require 'includes/paypal.php';

if(isset($_POST['submit'])){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['Apellido'];
  $email = $_POST['email'];
  $regalo = $_POST['regalo'];
  $total = $_POST['total_pagar'];
  $fecha = date('Y-m-d H:i:s');
  //productos
  $boletos = $_POST['boletos'];
  $camisas = $_POST['pedido_camisas'];
  $etiquetas = $_POST['pedido_etiquetas'];
  include_once 'includes/funciones/funciones.php';
  $pedido = productos_json($boletos, $camisas, $etiquetas);
  //eventos
  $eventos = $_POST['registro'];
  $registro_eventos = eventos_json($eventos);   
  try{
      require_once('includes/funciones/bd_conexion.php');
      $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?) ");
      $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro_eventos, $regalo, $total);
      $stmt->execute();
      $stmt->close();
      $conn->close();
      header('Location: validar_registro.php?exitoso=1');
  } catch (Exception $e) {
      $error = $e->getMessage();
  }
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';
  exit;
}



$compra = new Payer();
$compra->setPaymentMethod('paypal');

/*

$articulo = new Item();
$articulo->setName($producto)
      ->setCurrency('MXN')
      ->setQuantity(1)
      ->setPrice($precio);
      
      
$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));
  
$detalles = new Details();
$detalles->setShipping($envio)
          ->setSubtotal($precio); 
          
          
$cantidad = new Amount();
$cantidad->setCurrency('MXN')
          ->setTotal($total)
          ->setDetails($detalles);
          
$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
               ->setItemList($listaArticulos)
               ->setDescription('Pago ')
               ->setInvoiceNumber(uniqid());
               

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/pago_finalizado.php?exito=true")
              ->setCancelUrl(URL_SITIO . "/pago_finalizado.php?exito=false");
              
              
$pago = new Payment();
$pago->setIntent("sale")
     ->setPayer($compra)
     ->setRedirectUrls($redireccionar)
     ->setTransactions(array($transaccion));
     
     try {
       $pago->create($apiContext);
     } catch (PayPal\Exception\PayPalConnectionException $pce) {
       // Don't spit out errors or use "exit" like this in production code
       echo '<pre>';print_r(json_decode($pce->getData()));exit;
   }

$aprobado = $pago->getApprovalLink();


header("Location: {$aprobado}");