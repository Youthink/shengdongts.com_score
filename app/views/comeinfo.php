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
								<a href="#">首页</a>
							</li>

							<li>
								<a href="#">用户信息管理</a>
							</li>
						</ul><!-- .breadcrumb -->
					</div>
					<div class="page-content">
						<!-- PAGE CONTENT BEGINS -->
						<div class="row">
							<div class="col-xs-10">
								<h3 class="header smaller lighter blue">会员信息列表</h3>
								<div class="table-responsive">
									<table id="sample-table-2" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>序号</th>
												<th>姓名</th>
												<th>电话</th>
												<th>学校</th>
												<th>班级</th>
												<th>学习地点</th>
												<th>报名时间</th>
												<th>续费时间</th>
												<th>备注</th>
												<th>预览</th>
												<th>操作</th>
											</tr>
										</thead><?php $i=1;?>
										<tbody> <?php foreach ($info as $info_items): ?>
											<tr>
											<td><?php echo $i++;?></td>
											<td><?php echo $info_items['username']; ?></td>
											<td><?php echo $info_items['phone']; ?></td>
											<td><?php echo $info_items['school']; ?></td>
											<td><?php echo $info_items['grade']; ?></td>
											<td><?php echo $info_items['studyplace']; ?></td>
											<td><?php echo $info_items['addtime']; ?></td>
											<td><?php echo $info_items['moneytime']; ?></td>
											<td><?php echo $info_items['remark']; ?></td>
											<td><a href="<?php echo site_url().'/home/viewInfo/'.$info_items['infoid'];?>">预览</a></td>
											<td><a href="<?php echo site_url().'/home/deleteInfo/'.$info_items['infoid']; ?>" onclick="return confirm('确定删除吗？')"  title="Delete">删除</a>|<a href="<?php echo site_url().'/home/updateInfo/'.$info_items['infoid']; ?>" >修改</a></td>
											</tr><?php endforeach; ?>
										</tbody>
									</table>
								</div>
					        </div>
				        </div>
					</div>
						<!-- /.page-content -->
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
