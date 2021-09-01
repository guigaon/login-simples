<?php 
session_start();
var_dump($_SESSION);?>

<html>
	<head>
		<title>Sistemas mjailton</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/auxiliar.css">
		<link rel="stylesheet" type="text/css" href="css/grade.css">
		<link rel="stylesheet" type="text/css" href="css/m-style.css">


	</head>
<body class="base-login">
	<div class="caixa-login position-relative">
			<form action="login.php" method="post">						
					<h1>login </h1>			
					<label>
						<input type="text" name="txtusuario" value="" placeholder="Login">
					</label>				
					<label>
						<input type="password" name="txtsenha" value="" placeholder="Senha">
					</label>							
					<input type="submit" value="logar" class="btn">
			</form>
	