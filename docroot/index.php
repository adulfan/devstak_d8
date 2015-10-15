<?php
// MySQL
$mysqli = @new mysqli('localhost', 'root', '');

$mysql_running = true;
if (mysqli_connect_errno()) {
    $mysql_running = false;
} else {
  $mysql_version = $mysqli->server_info;
}

$mysqli->close();

// Memcached
$m = new Memcached();
$memcached_running = false;
if ($m->addServer('localhost', 11211)) {
  $memcached_running = true;
  $memcached_version = $m->getVersion();
  $memcached_version = current($memcached_version);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vagrant Bootstrap - LAMP Stack</title>

    <!-- Bootstrap -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h1>It works!</h1>
      <p class="lead">The Virtual Machine is up and running, yay! Here's some additional information you might need.</p>

      <h3>Installed software</h3>
      <table class="table table-striped">
        <tr>
          <td>PHP Version</td>
          <td><?php echo phpversion(); ?></td>
        </tr>

        <tr>
          <td>MySQL running</td>
          <td><span class="glyphicon glyphicon-<?php echo ($mysql_running ? 'ok' : 'remove'); ?>"></span></td>
        </tr>

        <tr>
          <td>MySQL version</td>
          <td><?php echo ($mysql_running ? $mysql_version : 'N/A'); ?></td>
        </tr>

        <tr>
          <td>Memcached running</td>
          <td><span class="glyphicon glyphicon-<?php echo ($memcached_running ? 'ok' : 'remove'); ?>"></span></td>
        </tr>

        <tr>
          <td>Memcached version</td>
          <td><?php echo ($memcached_version ? $memcached_version : 'N/A'); ?></td>
        </tr>
      </table>

      <h3>PHP Modules</h3>
      <table class="table table-striped">
        <tr>
          <td>MySQL</td>
          <td><span class="glyphicon glyphicon-<?php echo (class_exists('mysqli') ? 'ok' : 'remove'); ?>"></span></td>
        </tr>

        <tr>
          <td>CURL</td>
          <td><span class="glyphicon glyphicon-<?php echo (function_exists('curl_init') ? 'ok' : 'remove'); ?>"></span></td>
        </tr>

        <tr>
          <td>mcrypt</td>
          <td><span class="glyphicon glyphicon-<?php echo (function_exists('mcrypt_encrypt') ? 'ok' : 'remove'); ?>"></span></td>
        </tr>

        <tr>
          <td>memcached</td>
          <td><span class="glyphicon glyphicon-<?php echo (class_exists('Memcached') ? 'ok' : 'remove'); ?>"></span></td>
        </tr>

        <tr>
          <td>gd</td>
          <td><span class="glyphicon glyphicon-<?php echo (function_exists('imagecreate') ? 'ok' : 'remove'); ?>"></span></td>
        </tr>
      </table>

      <h3>MySQL credentials</h3>
      <table class="table table-striped">
        <tr>
          <td>Hostname</td>
          <td>localhost</td>
        </tr>

        <tr>
          <td>Username</td>
          <td>vagrant</td>
        </tr>

        <tr>
          <td>Password</td>
          <td>vagrant</td>
        </tr>

        <tr>
          <td colspan="2"><em>Note: External access is enabled! Just use <strong><?php echo $_SERVER['SERVER_ADDR'] ?></strong> as host.</em></td>
        </tr>
      </table>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
