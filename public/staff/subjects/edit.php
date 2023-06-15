<?php 
require_once('../../../private/initialize.php');

$id = htmlspecialchars($_GET['id'] ?? redirect_to(url_to('/subjects/index.php')));
$menu_name = htmlspecialchars($_GET['menu_name'] ?? '');
$position = htmlspecialchars($_GET['position'] ?? '');
$visible = htmlspecialchars($_GET['visible'] ?? '');



if (is_post_request()) {
    $menu_name = htmlspecialchars($_POST['menu_name'] ?? '');
    $position = htmlspecialchars($_POST['position'] ?? '');
    $visible = htmlspecialchars($_POST['visible'] ?? '');


    echo "Form parameters <br />";
    echo "Menu name: " . $menu_name . "<br />";
    echo "Position: " . $position . "<br />";
    echo "Visible: " . $visible . "<br />";
} else {
    // redirect_to(url_to('/subjects/new.php'));
}
?>


<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_to('/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Edit Subject</h1>

    <form action="<?php echo url_to('/subjects/edit.php?id='.urlencode($id)); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo $menu_name ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" <?php if($visible) {echo 'checked';} ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
