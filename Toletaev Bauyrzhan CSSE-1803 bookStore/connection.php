<?php
$user = "root";
$pw = "";
$count = 0;
try
{
	 $pdo_conn = new PDO('mysql:host=localhost;dbname=book_store',$user,$pw);
    $g_row1 =  $pdo_conn->query("SELECT * FROM all_book") ;
    foreach($g_row1 as $row)
    {
        $count++;
    }
}
catch(PDOException $e) 
{
	echo "not connection".$e->getMessage();
	die();
}
?>