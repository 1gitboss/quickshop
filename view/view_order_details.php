<?php
include ("sidebar.php");
//require('../settings/db_cred.php');
include 'order_details_fxn .php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients on Loan Scheme - Asmaan MicroFinance</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
.custom-bg-gold {
  background-color: gold;
}
    <link rel="stylesheet" href="#">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
	body{
	    font: Times New Roman;
	}
	
	table {
            width: 100%;
            margin-top: 20px;
            margin-left: auto; 
            margin-right: auto; 
        }

        th {
            padding: 5px; 
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th:first-child {
            width: 25; 
        }

        th:nth-child(2) {
            width: 25%; 
        }

        th:last-child {
            width:25%; 
        }	

    </style>

</head>
<body>
    <div class="panel panel-default">
    <div class="container p-5 my-5 bg-dark text-white">
        <div class="row justify-content-between">
            <div class="col-auto">
                <a class="btn btn-success" href="view_products.php" style="color:White">Back</a>
            </div>
        </div>
    </div>
    </div>
    <div class="container p-2 my-2 border">
    <table style="font-family:Times New Roman, san-serif;">
        <thead>
            
        </thead>
        <tbody>
	    <?php display_all_order_details(); ?>
        </tbody>
    </table>
    </div>


</body>

</html>
