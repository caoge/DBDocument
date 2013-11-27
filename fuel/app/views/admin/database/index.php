<div class="col-md-12">
	<ol class="breadcrumb">
	  <li><a href="<?php echo Uri::create('admin/server'); ?>">服务器</a></li>
	  <li><a href="<?php echo Uri::create('admin/database/index/'.$server_info['id']); ?>"><?php echo $server_info['name'] ?></a></li>
	  <li class="active"></li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">数据库</span>
			<a href="javascript:;" class="btn btn-primary btn-xs pull-right" id="" title="刷新"><span class="glyphicon glyphicon-refresh"></span></a>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
		          <tr>
		            <th>#</th>
		            <th>数据库</th>
		            <th>字符集</th>
		          </tr>
		        </thead>
		        <tbody>
		        	<?php if($db_list) { ?>
		          <?php foreach ($db_list as $db) { ?>
		          <tr>
		          	<td><?php echo $db['id'] ?></td>
		          	<td><a href="<?php echo Uri::create('admin/database/table/'.$db['id']); ?>"><?php echo $db['db_name'] ?></a></td>
		          	<td><?php echo $db['charset'] ?></td>
		          </tr>
		          <?php } ?>
		          <?php }else { ?>
		          <tr>
		          	<td colspan="6">暂无数据</td>
		          </tr>
		          <tr>
		            <td colspan="6">
		            	<div class="progress progress-striped active" style="width:80px;">
						  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						  </div>
						</div>
		            </td>
		          </tr>
		          <?php } ?>
		        </tbody>
			</table>
			<!-- 
			<ul class="pagination pagination-sm">
		        <li class="disabled"><a href="#">«</a></li>
		        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">2</a></li>
		        <li><a href="#">3</a></li>
		        <li><a href="#">4</a></li>
		        <li><a href="#">5</a></li>
		        <li><a href="#">»</a></li>
		     </ul> -->
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	$('#add_database').click(function(){
		$('#myModal').modal('show');
	});
});
</script>