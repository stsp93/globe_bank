<?php include('../../../private/initialize.php') ?>

<?php
$pages = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'Globe Bank'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'History'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Leadership'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Contact Us'],
];
?>



<?php

$id = $_GET['id'] ?? '1';
?>

<?php
foreach ($pages as $page) {
    if ($page['id'] == $id) {
        $page_title = $page['menu_name'];
        break;
    }
}
?>

<?php include(SHARED_PATH . '/staff_header.php') ?>

<?php
echo htmlspecialchars($id);
?>

<?php include(SHARED_PATH . '/staff_footer.php') ?>