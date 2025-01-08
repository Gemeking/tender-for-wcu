<?php include 'uploadreport.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download reports</title>
</head>
<body>

<table>
<thead>
    <th>RID</th>
	<th>Uploaded By</th>
    <th>Filename</th>
    <th>size (in mb)</th>
	<th>Upload_date</th>
	<th>Abstraction</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['rid']; ?></td>
	  <td><?php echo $file['uploaded_by']; ?></td>
      <td><?php echo $file['name']; ?></td>
	   <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['date']; ?></td>
	   <td><?php echo $file['abstraction']; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['rid'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>