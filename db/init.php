<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>create database</h2>

	<?php 

		$dbms="mysql";
		$dbName ='db_database20';
		$user='root';
		$pwd='mymac8';
		$host='127.0.0.1:3306';
		$dsn="$dbms:host=$host;dbname=$dbName";

		try{

			$pdo = new PDO($dsn,$user,$pwd);
			echo "pdo connect success<br/>";

    		$sql_admin = "create table if not exists tb_admin(" 
    				. "id smallint(4) unsigned NOT NULL AUTO_INCREMENT, "
    				. "name varchar(50) NOT NULL, "
    				. "pwd varchar(50) NOT NULL, "
    				. "primary key(id)"
    				. ")ENGINE=InnoDB DEFAULT CHARSET=utf8";

    		$sql_class = "create table if not exists tb_class(" 
    				. "id smallint(4) unsigned NOT NULL AUTO_INCREMENT, "
    				. "name varchar(50) NOT NULL, "
    				. "supid int(50) NOT NULL, "
    				. "primary key(id)"
    				. ")ENGINE=InnoDB DEFAULT CHARSET=utf8";

    		$sql_common = "create table if not exists tb_commo(" 
    				. "id smallint(4) unsigned NOT NULL AUTO_INCREMENT, "
    				. "name varchar(50) NOT NULL, "
    				. "pics varchar(200) NOT NULL default 'pics/null.jpg', "
    				. "info mediumtext NOT NULL, "
    				. "addtime date NOT NULL, "
    				. "area varchar(50) NOT NULL, "
    				. "model varchar(50) NOT NULL, "
    				. "class varchar(50) NOT NULL, "
    				. "brand varchar(50) NOT NULL, "
    				. "stocks int(4) NOT NULL default 1, "
    				. "sell int(4) NOT NULL default 0, "
    				. "m_price float NOT NULL, "
                    . "v_price float NOT NULL, "
    				. "fold float NOT NULL default 9, "
    				. "isnew int(1) NOT NULL default 1, "
    				. "isnom int(1) NOT NULL default 0, "
    				. "primary key(id)"
    				. ")ENGINE=InnoDB DEFAULT CHARSET=utf8";

    		$sql_form = "create table if not exists tb_form(" 
    				. "id smallint(4) unsigned NOT NULL AUTO_INCREMENT, "
    				. "formid varchar(125) NOT NULL, "
    				. "commo_id varchar(100) NOT NULL ,"
    				. "commo_name varchar(50) NOT NULL ,"
    				. "commo_num varchar(100) NOT NULL ,"
    				. "agoprice varchar(50) NOT NULL ,"
    				. "fold varchar(50) NOT NULL ,"
    				. "total varchar(50) NOT NULL ,"
    				. "vendee varchar(50) NOT NULL ,"
    				. "taker varchar(50) NOT NULL ,"
    				. "address varchar(200) NOT NULL ,"
    				. "tel varchar(20) NOT NULL ,"
    				. "code varchar(10) NOT NULL ,"
    				. "pay_method varchar(20) NOT NULL ,"
    				. "del_method varchar(20) NOT NULL ,"
    				. "formtime timestamp NOT NULL ,"
    				. "state int(1) NOT NULL ,"
    				. "primary key(id)"
    				. ")ENGINE=InnoDB DEFAULT CHARSET=utf8";


    		$sql_public = "create table if not exists tb_public(" 
    				. "id smallint(4) unsigned NOT NULL AUTO_INCREMENT, "
    				. "title varchar(50) NOT NULL, "
    				. "content mediumtext NOT NULL, "
    				. "addtime date NOT NULL, "
    				. "primary key(id)"
    				. ")ENGINE=InnoDB DEFAULT CHARSET=utf8";

    		$sql_user = "create table if not exists tb_user(" 
    				. "id smallint(4) unsigned NOT NULL AUTO_INCREMENT, "
    				. "name varchar(50) NOT NULL, "
    				. "password varchar(50) NOT NULL ,"
    				. "question varchar(50) NOT NULL ,"
    				. "answer varchar(50) NOT NULL ,"
    				. "consume float NOT NULL ,"
    				. "realname varchar(50) NOT NULL ,"
    				. "card varchar(20) NOT NULL ,"
    				. "tel varchar(20) NOT NULL ,"
    				. "phone varchar(20) NOT NULL ,"
    				. "Email varchar(20) NOT NULL ,"
    				. "QQ varchar(20) NOT NULL ,"
    				. "code varchar(10) NOT NULL ,"
    				. "address varchar(200) NOT NULL ,"
    				. "addtime date NOT NULL ,"
    				. "isfreeze int(1) NOT NULL ,"
    				. "shopping varchar(200) NOT NULL ,"
    				. "primary key(id)"
    				. ")ENGINE=InnoDB DEFAULT CHARSET=utf8";

			$sql_arr = array($sql_admin, $sql_class, $sql_common, $sql_form, $sql_public, $sql_user);

			foreach ($sql_arr as $sql) {
				echo "sql: " . $sql . "<br/>";

				$result = $pdo->prepare($sql);
				if($result->execute()){
					echo "create sql database success<br/>";
				}else{
					echo "create sql database failed<br/>";
				}

				echo "-----------------<br/>";
			}

		}catch(Exception $e){
			echo "error: " . $e.getMeesage();
		}


		// $dbhost = "127.0.0.1:3306";
  //   	$dbuser = "root";
  //   	$dbpsd = "mymac8";
  //   	$conn = mysql_connect($dbhost, $dbuser, $dbpsd);
  //   	if(!$conn){
  //   		die('count not connect ' . mysql_error());
  //   	}
  //   	echo "connect success<br/>";

  //   	mysql_select_db('db_database20');
  //   	echo "use database success" . "<br/>";

  //   	$sql = "create table think_user(" 
  //   		. "id int not null auto_increment, "
  //   		. "user varchar(100) not null, "
  //   		. "pass varchar(100) not null, "
  //   		. "address varchar(100), "
  //   		. "primary key(id)"
  //   		. ")";
		// $retval = mysql_query($sql, $conn);

		// if(!$retval){
		// 	die("create table failed" . mysql_error());
		// }

		// echo "create table success";
		// mysql_close($conn);
	?>
</body>
</html>