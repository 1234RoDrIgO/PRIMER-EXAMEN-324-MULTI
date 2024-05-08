<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PREGUNTA 5</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	.boton-eliminar, .boton-editar {
    display: inline-block;
    padding: 10px 20px;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
	}

	.boton-eliminar {
		background-color: #dc3545; /* Rojo llamativo */
	}
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	main.table {
    width: 82vw;
    height: 90vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;
    overflow: hidden;

}

	.table2 {
		width: 95%;
		max-height: calc(89% - .8rem);
		background-color: #fffb;

		margin: .8rem auto;
		border-radius: .6rem;
		overflow: auto;
	}

	.table1 {
		width: 100%;
		height: 10%;
		background-color: #fff4;
		padding: .8rem 1rem;

	}

	table {

		width: 100%;
	}

	table,
	th,
	td {
		border-collapse: collapse;
		padding: 1rem;
	}

	thead th {
		position: sticky;
		top: 0;
		left: 0;
		background-color: #0508060b;

	}

	tbody tr:nth-child(even) {
		background-color: #0508060b;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>1er. Examen Programacion Multimedial, CodeIgniter!</h1>

	<div id="body">
	<p>Pregunta 5. <br>Realice un listado de cuentas en CODEIGNITER y la posibilidad de borrar alguna cuenta.</p>
	<br>
	<main class="table">
		<section class="table1">
			<h1>Clientes</h1>
			<!-- si quieres puedes borrar el titulo "clientes" , pero eso tambien con lleva a borrar en el css el ".table1" jiji-->
		</section>
		<section class="table2">
			<table>
				<thead>
					<tr>
						<th>Nombre Completo</th>
						<th>Carnet</th>
						<th>Correo</th>
						<th>Telefono</th>
						<th>Número de Cuenta</th>
						<th>Tipo de Cuenta</th>
						<th>Monto</th>                
						<th>Cod. Depto.</th>
						<th>Fecha de Creación</th>
						<th>Operaciones</th>
					</tr>
				</thead>
				<tbody>

