<h1 class="title-1">Укажите ваши данные</h1>


<form action="set-cookie.php" method="POST">

	<?php 
		if ( !empty($errors)) {
			foreach ($errors as $key => $value) {
				echo "<div class='error'>$value</div>";
			}
		}
	?>

	<label class="label-title">Ваше имя</label>
	<input class="input" type="text" placeholder="" name="user-name"/>

	<label class="label-title">Ваш город</label>
	<input class="input" type="text" placeholder="" name="user-city"/>

	<input type="submit" class="button" value="Сохранить" name="user-submit">
</form>


<form action="unset-cookie.php" ethod="POST">
	<input type="submit" class="button" value="Удалить данные" name= "user-unset"> 
</form>