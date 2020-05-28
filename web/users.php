<?php
spl_autoload_register(function ($class) {
	include_once('classes/' . $class . '.class.php');
});

header("content-type:text/plain");
$user1 = new User('Alexey', 'Alexey22', '12345');
$user2 = new User('Andrew', 'Andrew21', '54321');
$user3 = new User('Alexius', 'Alexey23', '32222');
$user4 = new SuperUser("Sanya","SuperUser","228336","admin");
echo "Всего обычных userov: " . (User::$counter - SuperUser::$counter) .PHP_EOL;
echo "Всего root-userov: " . SuperUser::$counter .PHP_EOL;
$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
$user4->showInfo();
print_r($user4->getInfo());
?>