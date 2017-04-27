// JavaScript Document
$(function(){
	$('#table_list').datagrid({
	url:'YongHuGameLi/YongHuLieBiao_List.php',
	toolbar:'#tb',
	singleSelect:true,
	pagination:true,
	columns:[[
		{field:'usid',title:'序号'},
		{field:'usname',title:'姓名'},
		{field:'phone',title:'手机'},
		{field:'email',title:'邮箱'},
		{field:'JobName',title:'职位'},
		{field:'BusinessName',title:'区域'}
	]]
	})

	$('#job').combobox({
			url:'YongHuGameLi/YongHuLieBiao_job.php',
			valueField:'JobID',
			textField:'JobName',
			width:'200',
		});
		
	});
		
	$('#business').combobox({
		url:'YongHuGameLi/YongHuLieBiao_business.php',
		valueField:'BusinessID',
		textField:'BusinessName',
		width:'200',
	})
	
function add(){
	$('#dlg').dialog('open').dialog('setTitle','添加新人员');
	$('#fm').form('clear');
	url = 'YongHuGameLi/YongHuLieBiao_Save.php';
    $('#job').combobox('select',4);
	$('#business').combobox('select', 5);
	}

function save(){
	
	$('#fm').form('submit',{
		url:url,
		onSubmit: function(){
			return $(this).form('validate');
			
		},
		success: function(result){
			var result = eval('('+result+')');
			if (result.errorMsg){
				$.messager.show({
					title: 'Error',
					msg: result.errorMsg
				});
			} else {
				$('#dlg').dialog('close');		// close the dialog
				$('#table_list').datagrid('reload');	// reload the user data
			}
		}
	});
}

function del(){
	var row = $('#table_list').datagrid('getSelected');
	if (row){
		console.log(row);
		$.messager.confirm('删除','确定删除此题吗？',function(r){
			if (r){
				$.post('YongHuGameLi/YongHuLieBiao_del.php',{usid:row['usid']},function(result){
					if (result.success){
						$('#table_list').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
	}
	
function edit(){
			var row = $('#table_list').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','修改');
				$('#fm').form('load',row);
				console.log(row);
				url = 'YongHuGameLi/YongHuLieBiao_edit.php?UsID='+row.usid+'';
				
			}
		}