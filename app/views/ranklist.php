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
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href='<?php echo base_url().'public/assets/css/ace-ie.min.css'?>' />
		<![endif]-->
		<!--[if lt IE 9]>
		<script src='<?php echo base_url().'public/assets/js/html5shiv.js'?>'></script>
		<script src='<?php echo base_url().'public/assets/js/respond.min.js'?>'>></script>
		<![endif]-->
		<style>
			h3{
		        text-align: center;
		       }
		</style>
	</head>
		
	<body>
	<div class="main-content">
		<div class="col-md-offset-3 col-md-6">
			<h3 class="blue">等级排名</h3>
			<div class="table-responsive">
				<table  class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>排名</th>
							<th>头像</th>
							<th>姓名</th>
							<th>等级</th>
							<th>考试时间</th>
							<th>一分钟单摇</th>
							<th>连续双摇</th>
							<th>连续三摇</th>
							<th>视频链接</th>
						</tr>
					</thead><?php $i=1;?>
					<tbody> <?php foreach ($rank as $rank_items): ?>
						<tr>
						<td class="warning"><?php echo $i++;?></td>
						<td class="success"><img src="<?php echo $rank_items['facelink']; ?>" width="60px"></td>
						<td class="danger"><?php echo $rank_items['username']; ?></td>
						<td class="success"><?php echo $rank_items['rank']; ?></td>
						<td class="success"><?php echo $rank_items['testtime']; ?></td>
						<td class="success"><?php echo $rank_items['onejump']; ?></td>
						<td class="success"><?php echo $rank_items['twojump']; ?></td>
						<td class="success"><?php echo $rank_items['threejump']; ?></td>
						<td class="success"><a href="<?php echo $rank_items['link']; ?>" target="_blank"><?php echo $rank_items['link']; ?></a></td>
						</tr><?php endforeach; ?>
					</tbody>
				</table>
			</div>
        </div>
	</body>
</html>
