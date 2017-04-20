// JavaScript Document
$('#table_list').datagrid({
	url:'YongHuGameLi/YongHuLieBiao_List.php',
	columns:[[
		{field:'UsID',title:'序号'},
		{field:'UsName',title:'姓名'},
		{field:'Phone',title:'手机'},
		{field:'Email',title:'邮箱'},
		{field:'JobID',title:'职位'},
		{field:'BusinessID',title:'区域'},
	]]
	})