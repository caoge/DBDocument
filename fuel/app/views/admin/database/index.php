<div class="col-md-3">
	<div class="list-group">
		<a href="<?php echo Uri::create('admin/database/index'); ?>" class="list-group-item active"><span class="glyphicon glyphicon-book"></span> 数据库</a>
		<a href="<?php echo Uri::create('admin/database/table'); ?>" class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> 表</a>
		<a href="<?php echo Uri::create('admin/database/field'); ?>" class="list-group-item"><span class="glyphicon glyphicon-tag"></span> 字段</a>
	</div>
</div>
<div class="col-md-9">	
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">列表</span>
			<a href="javascript:;" class="btn btn-primary btn-xs pull-right" id="add_database">添加数据库</a>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
		          <tr>
		            <th>#</th>
		            <th>名称</th>
		            <th>数据库名</th>
		            <th>地址</th>
		            <th>端口</th>
		            <th>操作</th>
		          </tr>
		        </thead>
		        <tbody>
		        	<?php if($database_list) { ?>
		          <?php foreach ($database_list as $db) { ?>
		          <tr>
		          	<td><?php echo $db['id'] ?></td>
		          	<td><?php echo $db['name'] ?></td>
		          	<td><?php echo $db['db_name'] ?></td>
		          	<td><?php echo $db['db_host'] ?></td>
		          	<td><?php echo $db['db_port'] ?></td>
		          	<td>
		            	<a href="javascript:;" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></a>
		            	<a href="javascript:;"><span class="glyphicon glyphicon-remove"></span></a>
		            </td>
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