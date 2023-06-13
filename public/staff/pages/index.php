<?php include('../../../private/initialize.php') ?>

<?php
$pages = [
  ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'Globe Bank'],
  ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'History'],
  ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Leadership'],
  ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Contact Us'],
];
?>

<?php include(SHARED_PATH . '/staff_header.php') ?>

<div id="content">

  <table class="list">
    <tr>
      <th>ID</th>
      <th>Position</th>
      <th>Visible</th>
      <th>Name</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>

    
    <?php foreach ($pages as $page) { ?>
        <tr>
          <td>  <?php echo $page['id']; ?></td>
          <td>  <?php echo $page['position']; ?></td>
          <td><?php echo $page['visible']; ?></td>
          <td><?php echo $page['menu_name']; ?></td>
          <td><a class="action" href="<?php echo url_to('/pages/show.php?id=' . urlencode($page['id'])); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>

        </tr>
        <?php } ?>
      
  </table>

</div>

<?php include(SHARED_PATH . '/staff_footer.php') ?>