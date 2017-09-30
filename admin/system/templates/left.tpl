<link href="css/left.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/left.js"></script>
<table width="190"  border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right">
		<div id="type" align="center" bgcolor="#000000" ><font color="#000000">类别管理</font></div>
		<div id="one" bgcolor="#abcdef">
			<div id="addtype" align="center"><a href="addtype.php" target="mainFrame" id="menu">添加类别</a></div>
			<div id="showtype" align="center"><a href="showtype.php" target="mainFrame" id="menu">查看类别</a></div>
		</div>

		<div id="commo" align="center" onclick="change(two,commo)"><font color="#000000">商品管理</font></div>
		<div id="two" style="color:#00FF00">
			<div id="addcommo" align="center"><a href="addcommo.php" target="mainFrame" id="menu">添加商品</a></div>
			<div id="showcommo" align="center"><a href="showcommo.php" target="mainFrame" id="menu">查看商品</a></div>
			<div id="showform" align="center"><a href="showform.php" target="mainFrame" id="menu">查看订单</a></div>
		</div>

		<div id="user" align="center" onclick="change(three,user)" height="300"><font color="#000000">用户管理</font></div>	
		<div id="three" >
			<div id="manager" align="center"><a href="admin.php" target="mainFrame" id="menu">管理员管理</a></div>
			<div id="member" align="center"><a href="member.php" target="mainFrame" id="menu">会员管理</a></div>
		</div>


		<div id="public" align="center" onclick="change(four,public)"><font color="#000000">公告管理</font></div>
		<div id="four">
			<div id="addpublic" align="center"><a href="addpublic.php" target="mainFrame" id="menu">添加公告</a></div>
			<div id="showpublic" align="center"><a href="showpub.php" target="mainFrame" id="menu">查看公告</a></div>
		</div>


		<div id="frelink" align="center" onclick="change(five,frelink)"><font color="#000000">友情链接</font></div>
		<div id="five">
			<div id="addlinks" align="center"><a href="links.php" target="mainFrame" id="menu">添加链接</a></div>
			<div id="showlinks" align="center"><a href="showlinks.php" target="mainFrame" id="menu">查看链接</a></div>
		</div>

	</td>
  </tr>
</table>
