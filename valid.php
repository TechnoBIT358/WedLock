<html>
<head><title>php valid</title></head>
<body>
<?php

$n=$ns=$e=$es=$p=$ps=$g=$gs=$d=$ds='';
$nr=0;
$pr=0;
$er=0;
$gr=0;
$dr=0;


if(isset($_POST['s']))
	{
	
	$n=trim($_POST['n']);
	$nc='/^[a-zA-Z ]*$/';
	if(!preg_match($nc,$n)||strlen($n)==0)
	{$ns= '---*check name';
	}
	else
	{$nr=1;
	}
	
	
	$p=$_POST['p'];
	$pc='/^[0-9]{10,10}$/';
	if(!preg_match($pc,$p))
	{$ps='---*check no';
	}
	else
	{$pr=1;
	}
	
	
	
	$e=$_POST['e'];
	$ec='/^[a-zA-Z0-9._-]*\@[a-zA-Z0-9]*\.[a-zA-Z.]{2,6}$/';
	
	if(!preg_match($ec,$e))
	{$es='--*check email';
	}
	else
	{$er=1;
	}
	
	$g=trim($_POST['g']);
	
	if(strlen($g)==0 )
	{$gs='--*check address';
	}
	else
	{$gr=1;
	}
	$d=trim($_POST['d']);
	$sd=date('Y-m-d');
	
	
	if($sd>$d)
	{
	$ds='---*check date';}
	else{
	$dr=1;}
	
	if($nr==1 && $pr==1 && $er==1 && $gr==1 && $dr==1)
	{echo"<br>ur name: ".$n;
	echo"<br>ur phone no: ".$p;
	
	echo"<br>ur email: ".$e;
	echo"<br>ur dob: ".$d;
	echo"<br>ur address: ".$g;
	}
	
	
	
	
	
	
	
		
	}
	?>

<form action=" " method="POST">
 
name:<input type="text" name="n" placeholder="enter name" value="<?php echo$n;?>">
<span><?php echo$ns;?> </span>
<br><br>


email:<input type="text" name="e" placeholder="enter email" value="<?php echo$e;?>">
<span><?php echo$es;?> </span><br><br>
contact:<input type="text" name="p" placeholder="enter phone" value="<?php echo$p;?>">
<span><?php echo$ps;?> </span><br><br>

date:<input type="date" name="d" value="<?php echo$d;?>">
<span><?php echo$ds;?> </span><br><br> 

address: <br><br>
 <textarea name="g" rows="3"	cols="12" value="<?php echo$g;?>"></textarea>
<span><?php echo$gs;?> </span><br><br>
<input type="submit" name="s">


		
</form>	

</body>
</html>
		
		