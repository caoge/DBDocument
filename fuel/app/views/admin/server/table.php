<div class="col-md-12">
	<ol class="breadcrumb">
	  <li><a href="<?php echo Uri::create('admin/server'); ?>">服务器</a></li>
	  <li><a href="<?php echo Uri::create('admin/server-'.$server_info['id']); ?>"><?php echo $server_info['name'] ?></a></li>
	  <li><a href="<?php echo Uri::create('admin/server-'.$server_info['id'].'-'.$database_info['id']); ?>"><?php echo $database_info['db_name'] ?></a></li>
	  <li class="active"></li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">表</span>
			<a href="javascript:;" class="btn btn-primary btn-xs pull-right" id="" title="刷新"><span class="glyphicon glyphicon-refresh"></span></a>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
		          <tr>
		            <th>#</th>
		            <th>表名</th>
		            <th>原注释</th>
		            <th>注释</th>
		            <th>操作</th>
		          </tr>
		        </thead>
		        <tbody>
		        	<?php if($table_list) { ?>
		          <?php foreach ($table_list as $table) { ?>
		          <tr>
		          	<td><?php echo $table['id'] ?></td>
		          	<td><a href="<?php echo Uri::create('admin/server-'.$server_info['id'].'-'.$database_info['id'].'-'.$table['id']); ?>"><?php echo $table['table_name'] ?></a></td>
		          	<td><?php echo $table['table_comment'] ?></td>
		          	<td><?php echo $table['actual_comment'] ?></td>
		          	<td>
		          		<a href="javascript:;" data-toggle="modal" data-target="#myModal" title="编辑"><span class="glyphicon glyphicon-pencil"></span></a>
		          	</td>
		          </tr>
		          <?php } ?>
		          <?php }else { ?>
		          <tr>
		          	<td colspan="6" style="text-align: center">暂无数据</td>
		          </tr>
		          <!-- <tr>
		            <td colspan="6">
		            	<div class="progress progress-striped active" style="width:80px;">
						  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						  </div>
						</div>
		            </td>
		          </tr> -->
		          <?php } ?>
		        </tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	
});
</script>