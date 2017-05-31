<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<h2>Create</h2>
	<?php echo form_open(base_url('index.php/MyController/signup')); ?>
	<input type="text" name="username" placeholder="user name"><br><br>
	<input type="text" name="password" placeholder="password"><br><br>
	<input type="text" name="namalengkap" placeholder="nama lengkap"><br><br>
	<input type="text" name="email" placeholder="email"><br><br>
	<input type="text" name="alamat" placeholder="alamat lengkap"><br><br>
	<input type="text" name="telefon" placeholder="telefon"><br><br>
	<input type="submit" name="submit" value="Submit">
	<?php echo form_close(); ?><br>
	<a href="<?php echo base_url() . 'read' ?>"><button>Read</button></a>
</body>
</html>