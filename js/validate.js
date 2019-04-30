$(document).ready(function() {
			<!-- Real-time Validation -->
			$('#fname').on('input', function() {
				var input=$(this);
				var str=/^[a-zA-Z]+$/;
				var is_name=input.val();
				if(is_name.match(str)){input.removeClass("invalid").addClass("valid");}
				else{input.removeClass("valid").addClass("invalid");}
			});
			$('#mname').on('input', function() {
				var input=$(this);
				var str=/^[a-zA-Z]+$/;
				var is_name=input.val();
				if(is_name)
				{
					if(is_name.match(str)){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				}
				else{input.removeClass("invalid").addClass("valid");}
			});
			$('#lname').on('input', function() {
				var input=$(this);
				var str=/^[a-zA-Z]+$/;
				var is_name=input.val();
				if(is_name.match(str)){input.removeClass("invalid").addClass("valid");}
				else{input.removeClass("valid").addClass("invalid");}
			});
			$('#username').on('input', function() {
					var input=$(this);
					var str=/^[a-zA-Z0-9_]+$/;
					var is_name=input.val();
					if(is_name.match(str)){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
			$('#user').on('input', function() {
				var input=$(this);
				var str=/^[a-zA-Z0-9_]+$/;
				var is_name=input.val();
				if(is_name.match(str)){input.removeClass("invalid").addClass("valid");}
				else{input.removeClass("valid").addClass("invalid");}
			});
			<!--Email must be an email -->
			$('#email').on('input', function() {
				var input=$(this);
				var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
				var is_email=re.test(input.val());
				if(is_email){input.removeClass("invalid").addClass("valid");}
				else{input.removeClass("valid").addClass("invalid");}
			});
			$('#pass').on('input', function() {
				var input=$(this);
				var is_pass=input.val();
				if(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/.test(is_pass)){
					input.removeClass("invalid").addClass("valid");
				}
				
				else{input.removeClass("valid").addClass("invalid");}
			});
			$('#cpass').on('input', function() {
				var input=$(this);
				var input1=$('#pass');
				var is_pass=input1.val();
				var is_cpass=input.val();
				if(is_cpass==is_pass){input.removeClass("invalid").addClass("valid");}
				else{input.removeClass("valid").addClass("invalid");}
			});
			$('#dob').on('input', function() {
				var input =$(this);
				var date1=input.val();
			    if(date1) {
			    	input.removeclass("invalid").addclass("valid");
			    }
			    else{
			    	input.removeclass("valid").addclass("invalid");
			    }

			});
				
			$('#phone').on('input', function() {
				var input=$(this);
				var is_phone=input.val();
				if(/^(?=.*\d)[0-9]{10}$/.test(is_phone)){
						input.removeClass("invalid").addClass("valid");
				
				}
				else{input.removeClass("valid").addClass("invalid");}
			});
				
				$('#password').on('input', function() {
					var input=$(this);
					var is_pass=input.val();
					if(is_pass.length>=6){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				
				
		
		
			<!-- After Form Submitted Validation-->
			$("#submit_login button").click(function(event){
				var form_data=$("#loginform").serializeArray();
				var error_free=true;
				for (var input in form_data){
					var element=$("#"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
					else{error_element.removeClass("error_show").addClass("error");}
				}
				if (!error_free){
					event.preventDefault(); 
				}
				else{
					alert('No errors: Form will be submitted');
					
				}
			});
			<!-- After Form Submitted Validation-->
			$("#submit_register button").click(function(event){
				var form_data=$("#registerform").serializeArray();
				var error_free=true;
				for (var input in form_data){	
					var element=$("#"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
					else{error_element.removeClass("error_show").addClass("error");}
				}
				if (!error_free){
					event.preventDefault(); 
				}
				else{
					alert('No errors: Form will be submitted');
					
				}
			});
			
			
			
		});