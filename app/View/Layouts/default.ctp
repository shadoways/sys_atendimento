<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(                    
                    'cake.generic', 
                    'http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css',
                    'https://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css'
                ));
                
                echo $this->Html->script(array(                    
                    'http://code.jquery.com/jquery-1.10.2.js', 
                    'http://code.jquery.com/ui/1.11.4/jquery-ui.js',
                    'https://cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js',                    
                    'calendar'                    
                ));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Comunidade Catolica Palavra </h1> 
                        <a href="/attendances/index">Atendimentos</a>
                        <a href="/members/index">Membros</a>
                        <a href="/Events/index">Eventos</a>
                        <a href="/Scales/index">Escala</a>
                        <a href="">Sair</a>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
