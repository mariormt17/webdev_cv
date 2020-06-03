<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Mensaje de Portafolio CV</h1>
	<h2>Se pusieron en contacto contigo Elon Musk, los datos son los siguientes:</h2>
	<br>
	<p>Recibiste un mensaje de: {{ $mailData['name'] }}</p>
	<p><strong>E-mail: </strong>{{ $mailData['email'] }}</p>
	<p><strong>Asunto: </strong>{{ $mailData['subject'] }}</p>
	<p><strong>Contenido: </strong>{{ $mailData['content'] }}</p>
</body>
</html>