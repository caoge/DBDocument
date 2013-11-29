<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">日志列表</span>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
		          <tr>
		            <th>#</th>
		            <th>模块</th>
		            <th>方法</th>
		            <th>内容</th>
		            <th>操作人</th>
		            <th>时间</th>
		          </tr>
		        </thead>
		        <tbody>
		        	<?php if($list) { ?>
		          <?php foreach ($list as $log) { ?>
		          <tr>
		          	<td><?php echo $log['id'] ?></td>
		          	<td><?php echo $log['module'] ?></td>
		          	<td><?php echo $log['action'] ?></td>
		          	<td><?php echo $log['content'] ?></td>
		          	<td><?php echo $log['user_name'] ?></td>
		          	<td><?php echo $log['create_time'] ?></td>
		          </tr>
		          <?php } ?>
		          <?php }else { ?>
		          <tr>
		          	<td colspan="6">暂无数据</td>
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