<?php
	if(array_key_exists('m', $_GET)) {
		if($_GET['m']==1) {
			$output = json_encode(
				array(
					'name' => 'Localhost',
					'description' => 'stuff',
					'version' => '1',
					'launch_url' => 'http://localhost/',
					'icons' => array(
						'128' => 'localhost.jpg'
					),
					'permissions' => array(
						'unlimitedStorage',
						'notifications'
					)
				)
			);
			//	header('Content-Type: application/json');
			echo $output;
			die();
		}
	}
?>
<html>
	<head>
		<title>EXT:Themes test environment</title>
		<style type="text/css">
			body {
				font-family: Verdana, Arial, "sans serif";
				font-size: 12px;
			}
			fieldset {
				width:48%;
				float:right;
				display:block;
				overflow:hidden;
			}		
		</style>
		<?php
			if(array_key_exists('i', $_GET)) {
				if($_GET['i'] == 1) {
					echo '<link rel="chrome-application-definition" href="?m=1">';
					echo '<script type="text/javascript">chrome.app.install();</script>';
				}
			}
		?>
	</head>
	<body>	
		<?php
			//mysql
	
			$db = mysql_connect('127.0.0.1','root');
			$res = mysql_query('SELECT VERSION();');
			list($mysqlversion) = mysql_fetch_row($res);
			mysql_close($db);
		?>
		<fieldset>
			<legend>Server Software</legend>
			Server
			<ul>
				<li>Apache</li>
				<li>PHP    <?php echo phpversion()?></li>
				<li>MySQL  <?php echo $mysqlversion?></li>
				<li>
					<?php
						echo "DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'];
					?>
				</li>
			</ul>
		</fieldset>
		<fieldset>
			<legend>Administrative Software</legend>
			<table>
				<?php
					foreach(scandir('.') as $file) {
						if($file!='.' && $file!='..' && is_dir($file)) {
							echo '<tr>';
							echo '<td><a href="/'.$file.'">'.$file.'</a></td>';
							if(substr($file,0,2)=='t3') {
								echo '<td><a href="/'.$file.'/typo3">[Backend]</a></td>';
								echo '<td><a href="/'.$file.'/typo3/install">[Installtool]</a></td>';
							} elseif(substr($file,0,4)=='tine') {
								echo '<td><a href="/'.$file.'/setup.php">[Admin]</a></td>';
							}
							echo '</tr>';
						}
					}
				?>
			</table>
		</fieldset>
		<fieldset>
			<legend>Documentation and Sources</legend>
			<ul>
				<li>
					<a href="https://github.com/typo3-themes/themes/blob/master/Documentation/Index.rst">Documentation</a>
				</li>
				<li>
					<a href="https://github.com/typo3-themes">Repositories</a>
				</li>
			</ul>
	</body>
</html>