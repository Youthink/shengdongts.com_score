<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>后台管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href='<?php echo base_url().'public/assets/css/bootstrap.min.css'?>' rel="stylesheet" />
		<link rel="stylesheet" href='<?php echo base_url().'public/assets/css/font-awesome.min.css'?>' />
		<link rel="stylesheet" href='<?php echo base_url().'public/assets/css/ace.min.css'?>' />
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href='<?php echo base_url().'public/assets/css/ace-ie.min.css'?>' />
		<![endif]-->
		<!--[if lt IE 9]>
		<script src='<?php echo base_url().'public/assets/js/html5shiv.js'?>'></script>
		<script src='<?php echo base_url().'public/assets/js/respond.min.js'?>'>></script>
		<![endif]-->
		<style>
         @media only screen and (max-width: 990px){
           .page-content {
            padding-left: 20%;
         }}
		</style>
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							后台管理
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<a class="btn btn-warning" href="http://shengdongts.com">
								<i class="icon-reply"></i>返回前台
							</a>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<a href="#">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>
<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text">学分排名</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href='<?php echo base_url();?>'>
										<i class="icon-double-angle-right"></i>
							            排名管理
									</a>
								</li>

								<li>
									<a href='<?php echo  site_url().'/home/admin/addscore'?>'>
										<i class="icon-double-angle-right"></i>
										添加学分信息
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text">等级排名</span>
								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href='<?php echo  site_url().'/home/showpage/comerank'?>'>
										<i class="icon-double-angle-right"></i>
										等级管理
									</a>
								</li>

								<li>
									<a href='<?php echo  site_url().'/home/showpage/addrank'?>'>
										<i class="icon-double-angle-right"></i>
										增加等级排名
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text">会员档案</span>
								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href='<?php echo  site_url().'/home/show/comeinfo'?>'>
										<i class="icon-double-angle-right"></i>
									    会员信息管理
									</a>
								</li>

								<li>
									<a href='<?php echo  site_url().'/home/show/addinfo'?>'>
										<i class="icon-double-angle-right"></i>
										添加会员信息
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.nav-list -->
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo base_url();?>">首页</a>
							</li>

							<li>
								<a href="#">添加会员信息</a>
							</li>
						</ul><!-- .breadcrumb -->
					</div>
					<div class="page-content">
						<div class="row">
							<div class="col-md-12">
								<!-- PAGE CONTENT BEGINS -->
                               <h3 class="header smaller lighter blue">添加会员信息</h3>
								<div class="form-horizontal">
									<?php echo validation_errors(); ?>

									<?php echo form_open('home/dealInfo'); ?>
									<div class="form-group">
										<label class="col-sm-3  control-label no-padding-right" for="form-field-1">姓名</label>
										<div class="col-sm-9">
											<span class="input-icon">
											    <input type="text" id="form-field-1" name="username" value="<?php echo $info['username'];?>" />
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">学校</label>
										<div class="col-sm-9">
											<span class="input-icon">
											    <input type="text" id="form-field-2" name="school" value="<?php echo $info['school'];?>" />
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3">班级</label>
										<div class="col-sm-9">
											<span class="input-icon">
											    <input type="text" id="form-field-3" name="grade" value="<?php echo $info['grade'];?>" />
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">学习地点</label>
										<div class="col-sm-9">
											<span class="input-icon">
											    <input type="text" id="form-field-4" name="studyplace" value="<?php echo $info['studyplace'];?>" />
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">电话</label>
										<div class="col-sm-9">
											<span class="input-icon">
											    <input type="number" id="form-field-1" name="phone" value="<?php echo $info['phone'];?>"/>
											</span>
										</div>
									</div>
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">报名时间</label>
										<div class="col-sm-9">
											<span class="input-icon">
											    <input type="date" id="form-field-6" name="addtime" value="<?php echo $info['addtime'];?>" />
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-7">续费时间</label>
										<div class="col-sm-9">
											<span class="input-icon">
											    <input type="date" id="form-field-7" name="moneytime" value="<?php echo $info['moneytime'];?>" />
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-8">备注</label>
										<div class="col-sm-9">
											<span class="input-icon">
											    <input type="text" id="form-field-8" name="remark" value="<?php echo $info['remark'];?>" />
											</span>
										</div>
									</div>
									 <input type="hidden" name="infoid" value="<?php echo $info['infoid'];?>" />
									<div class="col-sm-offset-3 col-sm-9">
										<button class="btn btn-info"  type="submit">
											<i class="icon-ok bigger-110"></i>
											添加
										</button>
									</div>
								</div>
				              </div>
						</div><!-- /.row -->
					</div>
				</div>	<!-- /.page-content -->
				<!-- /.main-container-inner -->
				<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
					<i class="icon-double-angle-up icon-only bigger-110"></i>
				</a>
				</div><!-- /.main-container --> <!-- basic scripts --> 
				<!--[if !IE]> -->
				<script type="text/javascript">
				 window.jQuery || document.write(
				 "<script src='<?php echo base_url().'public/assets/js/jquery-2.0.3.min.js'?>'>"+"<"+"/script>"
				 ); 
				 </script>
				<!-- <![endif]--> 
				<!--[if IE]>
				<script type="text/javascript"> 
					window.jQuery || document.write(
					"<script src='<?php echo base_url().'public/assets/js/jquery-1.10.2.min.js'?>'>"+"<"+"/script>"
					); 
				</script>
				<![endif]-->
				<script src='<?php echo base_url().'public/assets/js/bootstrap.min.js'?>'></script> 
				<script src='<?php echo base_url().'public/assets/js/ace-elements.min.js'?>'></script>
				<script src='<?php echo base_url().'public/assets/js/ace.min.js'?>'></script>
				<!-- inline scripts related to this page -->
	</body>
</html>

