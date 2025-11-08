<?php

/********************************************************************/

/***************MYSQL INJECTION CONNECTION CODE START****************/

/********************************************************************/

$servername = "localhost";

 $username = "rubitj9t_shamsnaturalweb";

 $password = "QwedsA@@123";

$conn = new mysqli($servername, $username, $password);

/********************************************************************/

/***************MYSQL INJECTION CONNECTION CODE ENDS*****************/

/********************************************************************/





class dboperation   {

var $con;var $db;var $result; var $tcount2; var $update1;var $countresult;var $name;var $leavetype;var $gender; var $tcount; var $countsql; var $leave_result; var $sqllaevetype; var $select_sql; var $select_result; var $deleteresult;var $update_result;

  

/*---------------------------------------------------Starts database connection--------------------------------------------------*/

function connect(){ 

 $servername = "localhost";

 $username = "rubitj9t_shamsnaturalweb";

 $password = "QwedsA@@123";

 

 try {

  $this->con = new PDO("mysql:host=$servername;dbname=rubitj9t_shamsnaturals_website", $username, $password);

  $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }

 

 catch(PDOException $e) {

  echo "Connection failed: " . $e->getMessage();

 }

}

/*-------------------------------------------------Ends database connection------------------------------------------------------*/



/*----------------------------------------Starts Common function for executing Queries-------------------------------------------*/

function execute($sql) {

 $this->result=$this->con->query($sql);

 return $this->result;

}

/*-----------------------------------------Ends Common  function for executing Queries-------------------------------------------*/



/*-------------------------------------------------------------------------------------------------------------------------------*/  

/*-----------------------------------------------------STARTS  INSERT QUERIES----------------------------------------------------*/  

/*-------------------------------------------------------------------------------------------------------------------------------*/  

function insert($tablename,$fields,$values)  {

 $sql = "insert into $tablename ($fields) values ($values)";echo $sql;

 $this->result=$this->con->exec($sql);

 return $this->result;   

}  

/*-------------------------------------------------------------------------------------------------------------------------------*/  

/*-------------------------------------------------------ENDS  INSERT QUERIES----------------------------------------------------*/  

/*-------------------------------------------------------------------------------------------------------------------------------*/



  

/*-------------------------------------------------------------------------------------------------------------------------------*/  

/*----------------------------------------------STARTS GENERAL SELECT QUERIES----------------------------------------------------*/  

/*-------------------------------------------------------------------------------------------------------------------------------*/  

function select_table_orderby($tablename,$orderby) {

 $sql = "select * from $tablename $orderby";//echo $sql;

 $this->result=$this->execute($sql); 

 return $this->result;

}

  

function select_table($tablename) {

 $sql = "select * from $tablename";/*echo $sql;*/

 $this->result=$this->execute($sql);

 return $this->result;  

} 

  

function select_all($tablenames,$distinctcondition,$wherecondition,$orderby) {

 $sql = "select $distinctcondition  from $tablenames  where $wherecondition $orderby";//echo $sql;

 $this->result=$this->execute($sql);

 return $this->result;   

}  

  

function select_all_union($tablenames, $wherecondition,$orderby) {

 $sql = "$tablenames $wherecondition $orderby";//echo $sql;

 $this->result=$this->execute($sql);

 return $this->result;     

}

  

function select_all_values($tablenames,$wherecondition,$orderby) {

 $sql = "select * from $tablenames  where $wherecondition $orderby";//echo $sql;

 $this->result=$this->execute($sql);

 return $this->result;  

} 

  

/*---------------------------------------------------------------------------------------------------------------------------*/  

/*----------------------------------------------ENDS GENERAL SELECT QUERIES--------------------------------------------------*/  

/*---------------------------------------------------------------------------------------------------------------------------*/





/*---------------------------------------------------------------------------------------------------------------------------*/  

/*----------------------------------------------STARTS GENERAL UPDATE QUERIES------------------------------------------------*/  

/*---------------------------------------------------------------------------------------------------------------------------*/



function updategeneral($tablename,$fields,$condition) {

 $sql = "update $tablename set $fields where $condition";//echo $sql;

 $this->result=$this->con->exec($sql);

 return $this->result;

}



/*---------------------------------------------------------------------------------------------------------------------------*/  

/*----------------------------------------------ENDS GENERAL UPDATE QUERIES--------------------------------------------------*/  

/*---------------------------------------------------------------------------------------------------------------------------*/





/*---------------------------------------------------------------------------------------------------------------------------*/  

/*----------------------------------------------STARTS TOTAL RECORDS QUERIES-------------------------------------------------*/  

/*---------------------------------------------------------------------------------------------------------------------------*/



function totalrecords_search($querycondition) { 

 $sql = "$querycondition";

 $res = $this->con->prepare($sql);

 $this->result=$res->execute();

 $this->countresult = $res->fetchColumn();//echo $sql;

 return $this->countresult;

}  



function totalrecords_common($tablenames, $wherecondition, $orderby) { 

 $sql = "$tablenames $wherecondition $orderby";

 $res = $this->con->prepare($sql);

 $this->result=$res->execute();

 $this->countresult = $res->fetchColumn();

 return $this->countresult;

}  



function totalrecords_condition($tablename, $distinctcondition, $wherecondition) {

 $sql = "select count($distinctcondition) from $tablename where $wherecondition";

 $this->countresult=$this->execute($sql);//echo $sql;

 return $this->countresult;    

}



function totalrecords_condition_nowhere($tablename, $distinctcondition) {

 $sql = "select count($distinctcondition) from $tablename";

 $this->countresult=$this->execute($sql); //echo $sql;

 return $this->countresult;  

}



/*----------------------------------------------------------------------------------------------------------------------------*/  

/*----------------------------------------------ENDS TOTAL RECORDS QUERIES----------------------------------------------------*/  

/*----------------------------------------------------------------------------------------------------------------------------*/ 

 



/*----------------------------------------------------------------------------------------------------------------------------*/  

/*----------------------------------------------------STARTS DELETE QUERIES---------------------------------------------------*/  

/*----------------------------------------------------------------------------------------------------------------------------*/ 

 

function deletetable($tablename) {

 $sql = "delete from $tablename ";

 $this->deleteresult=$this->con->exec($sql);

 return $this->deleteresult;

 

}



function delete_condition($tablename, $wherecondition) {

 $sql = "delete from $tablename where $wherecondition";//echo $sql;

 $this->deleteresult=$this->con->exec($sql);

 return $this->deleteresult;

}

/*----------------------------------------------------------------------------------------------------------------------------*/  

/*------------------------------------------------------ENDS DELETE QUERIES---------------------------------------------------*/  

/*----------------------------------------------------------------------------------------------------------------------------*/ 



}

?>