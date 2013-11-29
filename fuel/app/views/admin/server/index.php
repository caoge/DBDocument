<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">服务器列表</span>
			<a href="javascript:;" class="btn btn-primary btn-xs pull-right" id="add_database">添加服务器</a>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
		          <tr>
		            <th>#</th>
		            <th>服务器</th>
		            <th>地址</th>
		            <th>端口</th>
		            <th>添加时间</th>
		            <th>操作</th>
		          </tr>
		        </thead>
		        <tbody>
		        	<?php if($server_list) { ?>
		          <?php foreach ($server_list as $server) { ?>
		          <tr>
		          	<td><?php echo $server['id'] ?></td>
		          	<td><a href="<?php echo Uri::create('admin/server-'.$server['id']); ?>"><?php echo $server['name'] ?></a></td>
		          	<td><?php echo $server['host'] ?></td>
		          	<td><?php echo $server['port'] ?></td>
		          	<td><?php echo $server['add_time'] ?></td>
		          	<td>
		            	<a href="javascript:;" data-toggle="modal" data-target="#myModal" title="编辑"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;&nbsp;
		            	<a href="javascript:;" title="刷新数据库列表"><span class="glyphicon glyphicon-refresh"></span></a>&nbsp;&nbsp;&nbsp;
		            	<a href="javascript:;" title="删除"><span class="glyphicon glyphicon-remove"></span></a>
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