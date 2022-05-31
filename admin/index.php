<?php

require_once 'config.php';
if($admin == 0){
    ?>
    <form method="post" action="/egeOdev/admin/adminCheck.php">
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
}else{
  ?>
<script>
    window.location.pathname = "/egeOdev/admin/inside.php";
</script>
<?php
}

?>