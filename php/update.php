<?php
require_once('lib/print.php');
require_once('view/top.php');
 ?>

    <a href="create.php">create</a>

    <form class="" action="update_process.php" method="post">
      <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
     <p>
       <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
     </p>
     <p>
       <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
     </p>
     <p>
       <input type="submit">
     </p>
   </form>
<?php
require_once('view/bottom.php');
?>
