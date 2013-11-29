<div class="col-md-3">
	<div class="list-group">
		<a href="<?php echo Uri::create('admin/document'); ?>" class="list-group-item active">文档列表</a>
	    <a href="<?php echo Uri::create('admin/document/category'); ?>" class="list-group-item">文档分类</a>
	</div>
</div>
<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="panel-title">文档列表</span>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
		          <tr>
		            <th>#</th>
		            <th>文档名</th>
		            <th>分类</th>
		            <th>文档类型</th>
		            <th>所属数据库</th>
		            <th>操作</th>
		          </tr>
		        </thead>
		        <tbody>
		        	<?php if($list) { ?>
		          <?php foreach ($list as $doc) { ?>
		          <tr>
		          	<td><?php echo $doc['id'] ?></td>
		          	<td><a href=""><?php echo $doc['name'] ?></a></td>
		          	<td></td>
		          	<td><?php echo $doc['file_type'] ?></td>
		          	<td></td>
		          	<td>
		            	<!-- <a href="javascript:;" data-toggle="modal" data-target="#myModal" title="编辑"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;&nbsp; -->
		            	<a href="javascript:;" title="删除"><span class="glyphicon glyphicon-remove"></span></a>
		            </td>
		          </tr>
		          <?php } ?>
		          <?php }else { ?>
		           <tr>
		          	 <td colspan="6" style="text-align:center;">暂无数据</td>
		           </tr>
		           <?php } ?>
		        </tbody>
			</table>
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