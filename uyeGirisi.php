<?php
require_once 'config.php';
require_once 'include/header.php';
?>
<body>
<form method="post" action="/egeOdev/userCheck.php">
	<table>
		<tr>
			<td>
				Username:
			</td>

			<td>
				<input type=”mail” name="username" >
			</td>
		</tr>
	<tr>
	<td>
				Password:
			</td>

			<td>
				<input type=”Password” name="pass" >
			</td>
		</tr>
        <tr>
			<td>
				<input type=Submit >
			</td>
		</tr>
	</table>
</form>
<?php
require_once 'include/footer.php'
?>