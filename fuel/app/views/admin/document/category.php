<div class="col-md-3">
	<div class="list-group">
		<a href="<?php echo Uri::create('admin/document'); ?>" class="list-group-item">文档列表</a>
	    <a href="<?php echo Uri::create('admin/document/category'); ?>" class="list-group-item active">文档分类</a>
	</div>
</div>
<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">分类列表</span>
			<a href="javascript:;" class="btn btn-primary btn-xs pull-right" id="add_database">添加分类</a>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
		          <tr>
		            <th>#</th>
		            <th>分类名</th>
		            <th>访问权限</th>
		            <th>文档数</th>
		            <th>操作</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		          	<td colspan="6" style="text-align:center;">暂无数据</td>
		          </tr>
		        </tbody>
			</table>
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