<?php
include('include/db.php');

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
    $sql = "SELECT name FROM users WHERE id = '$user_id'";
    $result = $conn->query($sql);

    if ($result && $row = $result->fetch_assoc()) {
        $name = $row['name'];
    } else {
        header('Location: welcome.php');
        exit();
    }
} else {
    header('Location: welcome.php');
    exit();
}
?>

<?php include('template/header.php'); ?>
<div class="text-center">
  <h1 class="text-4xl mb-4">Halo, <?php echo $name; ?>!</h1>
  <p class="text-gray-400">Ga ada apa apa disini kok..</p>
</div>
<?php include('template/footer.php'); ?>

