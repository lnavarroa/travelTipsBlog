 <!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Sign In</title> 
</head>
<body>
        
    <div>
    	<?=form_open(base_url().'users/validate/')?>
        <?php echo (isset($error)) ? '<p>Incorrect Data!</p>' : '';?>
        <p>Username: <?=form_input('username')?></p>   
        <p>Password: <?=form_password('password')?></p>
        <?=form_submit('submit', 'Ingresar')?>
    </div>   
        

<!--
    <div>
    	<form action="<?php echo base_url() ?>CrudController/insertarDatos" method="post">
			<div class="field-wrap">
				<label>
					Email*
				</label>
				<input type="email" name="userEmail" required autocomplete="off"/>
			</div>
			
			<div class="field-wrap">
				<label>	
					contraseña*
				</label>
				<input type="password" name="userPass" required autocomplete="off"/>
			</div>
			<button type="submit" class="button button-block"/>Continuar
		</form>
    </div>
-->      

        
</body>
	<script type="text/javascript" src="<?=base_url()?>js/moment.js"></script>
</html>