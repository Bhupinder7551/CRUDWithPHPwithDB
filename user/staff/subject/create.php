<?php

require_once('../../../admin/init.php');

if(is_post_request()) {

  // Handle form values sent by new.php
  $subject = [];
  $subject['menu_name'] = $_POST['menu_name'] ?? '';
  $subject['position'] = $_POST['position'] ?? '';
  $subject['visible'] = $_POST['visible'] ?? '';


  $result = insert_subject($subject);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/staff/subject/show.php?id=' . $new_id));
} else {
  redirect_to(url_for('/staff/subject/new.php'));
}

?>
