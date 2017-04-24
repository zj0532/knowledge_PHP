// JavaScript Document
$(function(){
	$('#table_list').datagrid({
	url:'YongHuGameLi/YongHuLieBiao_List.php',
	toolbar:'#tb',
	singleSelect:true,
	columns:[[
		{field:'UsID',title:'序号'},
		{field:'UsName',title:'姓名'},
		{field:'Phone',title:'手机'},
		{field:'Email',title:'邮箱'},
		{field:'JobID',title:'职位'},
		{field:'BusinessID',title:'区域'}
	]]
	})

	$('#cc').combobox({
			url:'YongHuGameLi/YongHuLieBiao_job.php',
			valueField:'JobID',
			textField:'JobName',
			
		});
		
	});
		
	$('#business').combobox({
		url:'YongHuGameLi/YongHuLieBiao_business.php',
		valueField:'BusinessID',
		textField:'BusinessName',
	})
	
function add(){
	$('#dlg').dialog('open').dialog('setTitle','添加新人员');
	$('#fm').form('clear');
	url = 'Choose_Edit/Choose_Save.php';
    $('#cc').combobox('select', 1);

	}
	