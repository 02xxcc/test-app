<?php
session_start();


require('library.local.php');

if (!isset($_SESSION['name'], $_SESSION['id'])) {
  header('Location: login.php');
  exit();
}
$id = (int)$_SESSION['id'];

$post_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$post_id) {
  header('Location: index.php');
  exit();
}

$db = dbconnect();
$stmt = $db->prepare('DELETE FROM posts WHERE id=? AND member_id=? LIMIT 1');
if (!$stmt) die($db->error);

$stmt->bind_param('ii', $post_id, $id);
if (!$stmt->execute()) die($db->error);

header('Location: index.php');
exit();


