<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>淄博绳动花式跳绳会</title>
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
	</head>

	<body>
				<div class="main-content">
						<div class="row">
							<div class="col-xs-10">
								<h3 class="header smaller lighter blue">排名列表</h3>
								<div class="table-responsive">
									<table id="sample-table-2" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>序号</th>
												<th>姓名</th>
												<th>备注</th>
												<th>学分</th>
												<th class="hidden-480">操作</th>
											</tr>
										</thead><?php $i=1;?>
										<tbody> <?php foreach ($score as $score_items): ?>
											<tr>
											<td><?php echo $i++;?></td>
											<td><?php echo $score_items['username']; ?></td>
											<td><?php echo $score_items['remark']; ?></td>
											<td><?php echo $score_items['score']; ?></td>
											<td>删除|修改</td>
											</tr><?php endforeach; ?>
										</tbody>
									</table>
								</div>
					        </div>
				        </div>
	</body>
</html>
