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
			<h3 class="blue">排名列表</h3>
			<div class="table-responsive">
				<table  class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>序号</th>
							<th>头像</th>
							<th>姓名</th>
							<th>学分</th>
						</tr>
					</thead><?php $i=1;?>
					<tbody> <?php foreach ($score as $score_items): ?>
						<tr>
						<td class="warning"><?php echo $i++;?></td>
						<td class="success"><img src="<?php echo $score_items['facelink']; ?>" width="60px"></td>
						<td class="danger"><?php echo $score_items['username']; ?></td>
						<td class="success"><?php echo $score_items['score']; ?></td>
						</tr><?php endforeach; ?>
					</tbody>
				</table>
			</div>
        </div>
	</body>
</html>
