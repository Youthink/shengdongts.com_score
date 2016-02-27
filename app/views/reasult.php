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
			h3,#idbutton{
		        text-align: center;
		       }
		       td{  
				word-wrap: break-word;  
				word-break: normal;  
				} 
		</style>
	</head>
		
	<body>
	<div class="main-content">
		<div class="col-md-offset-3 col-md-6">
			<h3 class="blue">查询结果</h3>
			<div class="table-responsive">
				<table  class="table table-striped table-bordered table-hover">
				<?php if(!empty($result)){ ?>
						<tr>
							<td class="success">姓名</td>
							<td><?php echo $result['username']; ?></td>
						</tr>
						<tr>
							<td class="success">等级</td>
							<td><?php echo $result['rank']; ?></td>
						</tr>
						<tr>
							<td class="success">电话</td>
							<td><?php echo $result['phone']; ?></td>
						</tr>
						<tr>
							<td class="success">考级时间</td>
							<td><?php echo $result['addtime']; ?></td>
						</tr>
						<tr>
							<td class="success">视频</td>
							<td><?php echo $result['link']; ?></td>
						</tr>
						<?php }else{
                            echo "<tr><td>没有相关信息!!!</td></tr>";
							echo "<tr><td>请检查填入的信息是否正确.</td></tr>";
							} ?>
				</table>
			</div>
			<div id="idbutton">
				   <a href="<?php echo site_url().'/search/' ?>" class="btn btn-success">返回 继续查询</a>
			</div>
        </div>
	</body>
</html>
