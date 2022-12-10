<?php include "inc/header.php"?>

<?php
// $feedback = [
//   [
//     'id' => '1',
//     'name' => 'Bob',
//     'email' => 'bob@gmail.com',
//     'body' => 'I hate programming...'
//   ],
//   [
//     'id' => '2',
//     'name' => 'Bill',
//     'email' => 'bill@gmail.com',
//     'body' => 'It could be better...'
//   ],
//   [
//     'id' => '3',
//     'name' => 'Tom',
//     'email' => 'tom@gmail.com',
//     'body' => 'Great content!'
//   ]
// ];

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
 ?>
        <h2>Past Feedback</h2>

        <?php if (empty($feedback)) {
         echo "<p class='lead mt3'>There is no feedback!</p>";
        }
        ?>

        <?php foreach($feedback as $item): ?>
        <div class="card my-3 w-75">
          <div class="card-body text-center">
          <?php echo $item['body'] ?>
          <div class='text-secondary mt-2'>
            By <?php echo $item['name'] . " on " . $item['date']; ?>
          </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php include "inc/footer.php"; ?>
