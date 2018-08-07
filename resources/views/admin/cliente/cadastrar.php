<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
	<form method="post" action="/cliente/cadastrar">
		<input type="hidden" name="_token" value="<?=$csrftoken?>">
		<input type="text" name="name" value="<?=$name?>">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>