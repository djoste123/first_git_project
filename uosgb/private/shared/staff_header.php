<?php
  if(!isset($page_title)) { $page_title = 'Administratorski panel'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>UOSGB - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>UOSGB Admin panel</h1>
    </header>

    <navigation>
      <ul>
        <?php if($session->is_logged_in()) { ?>
        <li>Ulogovani ste kao user: <?php echo $session->username; ?></li>
        <li><a href="<?php echo url_for('/staff/index.php'); ?>">Admin Panel</a></li>
        <li><a href="<?php echo url_for('/staff/logout.php'); ?>">Logout</a></li>
          <?php } ?>
      </ul>
    </navigation>

    <?php echo display_session_message(); ?>
