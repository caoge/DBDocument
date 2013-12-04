// 通用方法
var DBDcommon = {
	
}
// 弹出框
var DBDdialog = {
	defaults: {
		title: '标题',
		okVal: '确定',
		cancelVal: '关闭',
		ok: null,
		content: ''
	},
	options: {},
	show: function(options){
		this.options = $.extend({}, this.defaults, options);
		console.log(this.options);
	}
}