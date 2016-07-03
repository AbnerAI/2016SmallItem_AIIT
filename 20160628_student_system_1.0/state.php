<?php
  $counter=1; 
  global $name;
  global $sex;
  global $age;
  global $salary;
if (isset ( $_GET ['name'] )) {
	$name = $_GET ['name'];
	$sex = $_GET ['sex'];
	$age = $_GET ['age'];
	$salary = $_GET ['salary'];
	
	    if(file_exists("rec.txt"))
        {
          $fp=fopen("rec.txt","r");
          $counter=fgets($fp,1024);
          $counter++;
          fclose($fp);
        }
        $fp=fopen("rec.txt","w");
        fputs($fp,$counter);
        fclose($fp);
	
}
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
最新录入员工信息
<br/>
<br/>
姓名：<?php echo $name; ?>
<br/>
性别：<?php echo $sex;?>
<br/>
年龄：<?php echo $age;?>
<br/>
工资：<?php echo $salary ;?>

<br/>
<br/>
当前员工人数 <?php echo $counter;?>
</body>
</html>
