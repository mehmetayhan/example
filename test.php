<?php 

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use Mehmet\Example;

?>
<html>
<head>
<?php echo Example::css(); ?>
</head>
<body>
<?php echo Example::getIcon('font-awesome','amazon'); ?>
</body>

</html>