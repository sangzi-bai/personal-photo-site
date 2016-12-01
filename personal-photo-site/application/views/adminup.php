<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="zh ">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>图片上传中心</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- css -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class = "container ">
        <div class="col-md-4 col-xs-12">
    <ul class="nav nav-pills nav-stacked" role="tablist" id="mytap">
  <li role="presentation" class="active"><a href="#home">首页图片上传</a></li>
  <li role="presentation"><a href="#picshow">展示页图片上传</a></li>
  <li role="presentation"><a href="#picgroup">图组上传</a></li>
</ul>
</div>