<?php
require_once('../../../private/initialize.php');

$id = htmlspecialchars($_GET['id'] ?? redirect_to(url_to('/pages/index.php')));
$menu_name = htmlspecialchars($_GET['menu_name']  ?? '');
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
    // redirect_to(url_to('/pages/new.php'));
}
?>


<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <a class="back-link" href="<?php echo url_to('/pages/index.php'); ?>">&laquo; Back to List</a>

    <div class="page new">
        <h1>Edit Page</h1>

        <form action="<?php echo url_to('/pages/edit.php?id=' . urlencode($id)); ?>" method="post">
            <dl>
                <dt>Menu Name</dt>
                <dd><input type="text" name="menu_name" value="<?php echo $menu_name ?>" /></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position">
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <?php if ($i == $position) {
                                echo '<option value="' . $i . '" selected>' . $i . '</option>';
                            } else {
                                echo '<option value="' . $i . '" >' . $i . '</option>';
                            }

                            ?>

                        <?php } ?>
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