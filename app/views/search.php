<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>淄博绳动花式跳绳会</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="淄博绳动花式跳绳会,绳动网,绳动,淄博绳动,跳绳会,淄博绳动网,淄博跳绳网" />
		<meta name="keywords" content="淄博绳动花式跳绳会,淄博绳动,绳动花式跳绳会,绳动跳绳会,淄博绳动网,淄博跳绳网" />
		<!-- basic styles -->
		<link href='<?php echo base_url().'public/assets/css/bootstrap.min.css'?>' rel="stylesheet" />
		<!--[if lt IE 9]>
		<script src='<?php echo base_url().'public/assets/js/html5shiv.js'?>'></script>
		<script src='<?php echo base_url().'public/assets/js/respond.min.js'?>'>></script>
		<![endif]-->
		<style>
			h3{
				margin-bottom:30px;
		     text-align: center;
		   }
		   .main{
		   	margin-top:60px;
		   }
		</style>
	</head>
	
	<body>
		<div class="main">
			<div class="col-md-offset-3 col-md-6">
				<h3 class="blue">信息查询</h3>
				<div class="form-horizontal">
				<?php echo validation_errors(); ?>

				<?php echo form_open('home/Search'); ?>

					<div class="form-group">
						<label for="inputname" class="col-sm-2 control-label">姓名</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputname" placeholder="姓名" name="username">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPhone" class="col-sm-2 control-label">电话</label>
						<div class="col-sm-8">
							<input type="phone" class="form-control" id="inputPhone" placeholder="电话" name="phone">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-5">
							<button type="submit" class="btn btn-success">查询您的信息</button>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>