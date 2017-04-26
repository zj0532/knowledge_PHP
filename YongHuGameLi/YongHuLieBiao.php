<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>用户列表</title>
  <link rel="stylesheet" type="text/css" href="../knowledge/assets/css/easyui.css">
  <link rel="stylesheet" type="text/css" href="../knowledge/assets/css/icon.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<table id='table_list' class="easyui-datagrid"></table>
<div id='tb'>
	<label>姓名：</label><input type="text"><br> <br>
    <a href="#" class="dialog-button" data-options="iconCls:'icon-edit',plain:true" onClick="add()" >添加</a>
    <a href="#" class="dialog-button" data-options="iconCls:'icon-edit',plain:true" onClick="del()" >删除</a>
    <a href="#" class="dialog-button" data-options="iconCls:'icon-edit',plain:true" >修改</a>
    <a href="#" class="dialog-button" data-options="iconCls:'icon-edit',plain:true" >查询</a>
</div>
    <div id="dlg" class="easyui-dialog" style="padding:10px 20px" closed="true" buttons="#dlg-buttons">
	<form id="fm" method="post">
        <div>
		  <label>姓名：</label>
          <input class="easyui-validatebox" name="name" required="true">
        <div>
        <br>
        <div>
		  <label>密码：</label>
          <input name="uspwd" class="easyui-validatebox" required="true">
        <div>
        <br>
		<div>
			<label>手机：</label>
            <input name="phone">
		</div>
        <br>
        <div >
           <label>邮箱：</label>
        	<input name="email">
		</div>
        <br>
        <div>
        	 <label>职位：</label>
      		<input id='job' name="job" >
		</div>
        <br>
        <div>
			<label>区域：</label>
 			<input id="business" name="business">
		</div>   		
        <div id="dlg-buttons">
			<a href="#" class="easyui-linkbutton"  onclick="save()">保存</a>
			<a href="#" class="easyui-linkbutton"  onclick="javascript:$('#dlg').dialog('close')">
    			取消</a>
        </form>
	   </div>
     
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/amazeui.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="../knowledge/assets/js/jquery.easyui.min.js"></script>
  <script src="../knowledge/assets/js/YongHuLieBiao.js"></script>
</body>
</html>
