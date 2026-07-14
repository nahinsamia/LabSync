<?php
include("includes/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>LabSync Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#eef2f7;
    font-family:Arial, Helvetica, sans-serif;
}

.navbar{
    background:#1e3a8a;
}

.navbar-brand{
    font-size:28px;
    font-weight:bold;
}

.nav-link{
    color:white !important;
    margin-left:20px;
}

.nav-link:hover{
    color:#ffd43b !important;
}

.hero{
    background:white;
    margin-top:35px;
    border-radius:18px;
    padding:50px;
    text-align:center;
    box-shadow:0px 5px 18px rgba(0,0,0,.12);
}

.hero h1{

    font-size:40px;

    font-weight:bold;

}

.hero p{

    font-size:18px;

    color:#666;

}

.hero .btn{

    margin-top:20px;

    padding:10px 30px;

}

.card{

    border:none;

    border-radius:18px;

    color:white;

    transition:.3s;

}

.card:hover{

    transform:translateY(-8px);

}

.card h3{

    font-size:35px;

    font-weight:bold;

}

.blue{

    background:#2563eb;

}

.purple{

    background:#7c3aed;

}

.orange{

    background:#ea580c;

}

.red{

    background:#dc2626;

}

.activity{

    background:white;

    margin-top:35px;

    border-radius:18px;

    padding:25px;

    box-shadow:0px 5px 18px rgba(0,0,0,.12);

}

.footer{

    text-align:center;

    margin-top:50px;

    padding:20px;

    color:#666;

}

</style>

</head>

<body>

<!-- Navigation Bar -->

<nav class="navbar navbar-expand-lg navbar-dark">

<div class="container">

<a class="navbar-brand" href="#">LabSync</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link active" href="#">Dashboard</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Equipment</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Categories</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Issue</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Maintenance</a>
</li>

</ul>

</div>

</div>

</nav>



<div class="container">

<div class="hero">

<h1>LabSync Dashboard</h1>

<p>

Smart Laboratory Resource & Equipment Management System

</p>

<p>

Manage laboratory resources, equipment, issue records and maintenance
from one centralized dashboard.

</p>

<a href="pages/equipment.php" class="btn btn-primary btn-lg">

View Equipment

</a>

</div>



<div class="row mt-5">

<div class="col-md-3 mb-4">

<div class="card blue">

<div class="card-body text-center">

<h5>Total Equipment</h5>

<h3>0</h3>

</div>

</div>

</div>



<div class="col-md-3 mb-4">

<div class="card purple">

<div class="card-body text-center">

<h5>Categories</h5>

<h3>0</h3>

</div>

</div>

</div>



<div class="col-md-3 mb-4">

<div class="card orange">

<div class="card-body text-center">

<h5>Issued Equipment</h5>

<h3>0</h3>

</div>

</div>

</div>



<div class="col-md-3 mb-4">

<div class="card red">

<div class="card-body text-center">

<h5>Maintenance</h5>

<h3>0</h3>

</div>

</div>

</div>

</div>
<div class="activity">

<h4>Recent Activities</h4>

<hr>

<p class="text-muted">

No recent activity available.

</p>

</div>

<div class="footer">

<p>

Developed by

<strong>Nahin Sultana Samia</strong> &

<strong>Moumita Dhar</strong>

</p>

<p>

LabSync © 2026

</p>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>