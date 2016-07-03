<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			信息系统
		</title>
		<script type="text/javascript">
		function submitcxx()
		{
			 var name =  document.getElementById('name').value;
			 var sex = document.getElementById('sex')[0];
			 var age = document.getElementById('age').value;
			 var salary = document.getElementById('salary').value;
			// windows.location.href = 'display.php?nam = '+name+' && se = '+sex+'&& ag = '+age+'&& salar='+salary+'target="frame3"';
			 document.getElementById("myform").submit();
			
		}
		     
		</script>
		
	</head>
	<body>
		<form action="state.php" method="get" target='frame2' onsubmit = "submitcxx()" name  = 'myform'>
		姓名:
			<input type="text" name="name" id="" value="" />
			<br />
		性别:
			<input type="radio" name="sex" id="" value="男" />
			男 
			<input type="radio" name="sex" id="" value="女" />
			女 
			<br />
			年龄:
			<input type="text" name="age" id="" value="" />
			<br />
			工资:
			<input type="text" name="salary" id="" value="" />
			<br />
			<input type="submit" value="提交信息"/>
		</form>
	</body>
</html>
