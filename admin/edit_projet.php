<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>2ano</title>
	<link rel="stylesheet" href="../css/style.css">
	<script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
			selector: "textarea",
			 plugins: [
	        "advlist autolink lists link image charmap print preview",
	        "searchreplace visualblocks code fullscreen",
	        "table contextmenu paste "
	 	   ],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		});
	</script>
</head>
<body>
	<form method="post" action="update.php">
		<input type="text" name="title" />
		<textarea name="content" style="width:400px ; height:600px"></textarea>
		<input type="submit" value="editer" />
	</form>
</body>
</html>