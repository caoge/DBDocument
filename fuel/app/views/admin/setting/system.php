<div class="col-md-3">
	<div class="list-group">
		<a href="<?php echo Uri::create('admin/setting'); ?>" class="list-group-item">个人设置</a>
	    <a href="<?php echo Uri::create('admin/setting/system'); ?>" class="list-group-item active">系统设置</a>
	</div>
</div>
<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">系统设置</span>
		</div>
		<div class="panel-body">
			<div class="input-group">
			  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			  <input type="text" class="form-control" placeholder="用户名">
			</div>
			<br>
			<div class="input-group">
			  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
			  <input type="text" class="form-control" placeholder="邮箱">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	// $('#add_database').click(function(){
	// 	$('#myModal').modal('show');
	// });
});
</script>