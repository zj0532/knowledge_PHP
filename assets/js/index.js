// JavaScript Document
$(function(){
	var $form = $('#form-with-tooltip');
	var $tooltip = $('<div id="vld-tooltip">提示信息!</div>');
	$tooltip.appendTo(document.body);
	
	$form.validator();
	
	var validator = $form.data('amui.validator');
	
	$form.on('focusion focusout','.am-form-error input',function(e){
		if(e.type === 'focusin'){
			var $this = $(this);
			var offset = $this.offset();
			var msg = $this.data('foolishMsg') || validator.getValidationMessage($this.data('validity'));
			
			$tooltip.text(msg).show().css({
				left:offset.left + 10,
				top:offset.top + $(this).outerHeight() + 10
			});
		}else{
			$tooltip.hide();
		}
	});
});

$(document).ready(function () {
       $('#from').click(function () {
        if ($("input[name='user']").val() == "") {
            alert("用户名不能为空");
            return false;
        }
        else if ($("input[name='pass']").val() == "") {
            alert("密码不能为空");

            return false;
        
        }
        else {
            $.ajax({
                type: "post",
                url: "ajax/index.php",
                async: false,
                data: { user: $("input[name='doc-vld-name-2-0']").val(),
                    	pass: $("input[name='doc-vld-pwd-1-0']").val(),
                },
                success: function (data, status) {
                    var types = data;
					console.log(types); 
                    if (types.toString() != "true") {
                       alert("账号密码错误！");
                    }
                    else{
					
                    window.location.href="Login.php";
                    }
                },
                error: function () { alert("用户名密码验证失败") }
                
            });
        }
    });
});