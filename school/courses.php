<?php

include_once "includes/connect.php";

//FETCH ALL USERS FROM DATABASE
$stmt = $connect->query("SELECT * FROM courses");
$courses = $stmt->fetchAll(PDO ::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>COURSES</title>
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
               rel="stylesheet" >
</head>
<body>
      <?php if (count($courses) > 0):?>        
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Course Name</th>
      <th scope="col">Duration</th>
      <th scope="col">Price</th>
      <th scope="col">Trainer</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($courses as $course):?>
    <tr>
      <th scope="row"><?= htmlspecialchars($course['id'])?></th>
      <td><?= htmlspecialchars($course['course_name'])?></td>
      <td><?= htmlspecialchars($course['duration'])?></td>
      <td><?= htmlspecialchars($course['price'])?></td>
      <td><?= htmlspecialchars($course['trainer'])?></td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>

              <?php else: ?>
              <p>No courses Available!</p>
              <?php endif?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
></script>

</body>
</html>