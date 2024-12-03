<?php
include('include/db.php');
include('include/session.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        $user_id = $conn->insert_id;
        setcookie('user_id', $user_id, time() + 3600, "/"); // Path "/" makes it accessible across the entire site
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<?php include('template/header.php'); ?>
<div class="flex flex-col items-center">
  <h1 class="text-2xl">Enter your name</h1>
  <form method="POST" action="welcome.php" class="mt-4">
      <input type="text" name="name" class="border p-2" required>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2">Submit</button>
  </form>
</div>
<?php include('template/footer.php'); ?>

