<?php require_once('../../../admin/init.php'); ?>
<?php 
$id = isset($_GET['id']) ? $_GET['id'] :'1'

?>
<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
 
<a class="back-link" href="<?php echo url_for('/staff/page/index.php'); ?>">&laquo; &laquo; Back to List</a>
  <div class="page show">

  Page ID: <?php echo h($id); ?>

  </div>



<?php include(SHARED_PATH . '/footer.php'); ?>
