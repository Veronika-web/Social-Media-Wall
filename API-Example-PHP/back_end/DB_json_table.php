<?php 
/************************
connection for database 
*************************/
$hostname="localhost:3306";
$username="root";
$password="";
$database_name="php_DB";
$table_name="JSON_DATA";
$connect=mysqli_connect($hostname,$username,$password,$database_name);
if(!$connect){
    die('could not connect:'.mysqli_error());
}
else{
    echo"connected succesfully";
}
/*********************************
creating table to store API json
************************************/
$table="CREATE table $table_name(postid VARCHAR(255) ,sourcelink TEXT(4096),text TEXT(4096),imagelink TEXT(4096),videolink TEXT(4096),source TEXT(4096),sourceid VARCHAR(255),authorname TEXT(4096),author_display_name TEXT(4096),authorimage TEXT(4096),creationtime VARCHAR(255),primary key(postid))";
if(mysqli_query($connect,$table)){
    echo "table created succesfully";
}else{
    echo "could not create table:".mysqli_error($connect);
}
mysqli_close($connect);

?>