<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?>, how are you?</h1>

<p>Current version of PHP is: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>