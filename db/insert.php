<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form id="form1" name="form1" method="post" action="insert.php">
		<table border="0" align="center">
			<tr>
				<td>id: </td>
				<td>
					<input type="text" name="id" id="id"/>
				</td>
			</tr>

			<tr>
				<td>name: </td>
				<td>
					<input type="text" name="name" id="name"/>
				</td>
			</tr>
			<tr>
				<td>pwd: </td>
				<td>
					<input type="text" name="pwd" id="pwd"/>
				</td>
			</tr>

			<tr>
				<td>addr: </td>
				<td>
					<input type="text" name="addr" id="addr"/>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="submit" value="submit" />&nbsp;&nbsp;
					<input type="reset" name="reset" value="reset" />
				</td>
			</tr>

			<?php 
				if($_POST['submit'] == 'submit' && $_POST['id'] != ''){
					$dbms = "mysql";
					$dbname = "db_database20";
					$host = "127.0.0.1:3306";
					$user = "root";
					$pwd = "mymac8";
					$dsn = "$dbms:host=$host;dbname=$dbname";
					try{
						$pdo = new PDO($dsn, $user, $pwd);
						echo "connect database success</br>";

						$id = $_POST['id'];
						$name = $_POST['name'];
						$pwd = $_POST['pwd'];
						$addr = $_POST['addr'];

						// $pdo->beginTransaction();
						// $query = "insert into think_user(id, user, pass, address) value (" . "$id" . ", '$name'" . ", '$pwd'" . ", '$addr')";
						// $query = "insert into tutorials_tbl(my_id, title, author) values (". 3 . ", 'title2'" . ", 'author2')";
						$query = "insert into tb_form(formid,commo_id,commo_name,commo_num,agoprice,fold,total,vendee,taker,address,tel,code,pay_method,del_method,formtime,state)values('1494667723','6','aaa','1','3099.6','9','3099.6','user0','sdfsa','asdfasg','1232322322','332222','银行转账','平邮','2017-05-13 17:28:43',0)";
				
												// $query = "insert into tb_user(name,password,question,answer,consume,realname,card,tel,phone,Email,QQ,code,address,addtime,isfreeze,shopping) values ";
						// $query = $query . "('user3', '96e79218965eb72c92a549dd5a330112', 'question', 'answer', '00.00', 'realname', '500240199010205132', '13126562961','35435','email@aa.com', '11','44', 'address', '2017-04-30', '1', 'shopping')";

						// $query = "insert into tb_user(name) values ";
						// $query = $query . "('user2')";
						// $query = "insert into think_user(user, pass, address) values('user_test', 'aaaaaa', 'addressssssss')";

						echo "query: $query";

						$result = $pdo->prepare($query);
						echo "<br/>";
						
						if($result->execute()){
							echo "add data success";
						}else{
							echo "add data failed";
						}
						// $pdo->commit();

					}catch(Exception $ex){
						echo "error: " . ex.getMessage();
						$pdo->rollBack();
					}
				}
			?>
		</table>
	</form>

</body>
</html>