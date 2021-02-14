<?php 
    include 'php/conDB.php';
    $result = mysqli_query($conn,"SELECT * FROM place");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <title>List DATA</title>
</head>
<body>
    <table class="table table-striped table-hover">
        
        <thead>
            <tr>
                <th>#</th>
                <th>NAME</th>
                <th>Details</th>
                <th>Image</th>
            </tr>
        </thead>
        
        <?php while($row = mysqli_fetch_array($result)) {?>
        <tbody >
            
                <tr>
                    <th><?php echo $row["id"] ?></th>
                    <th><?php echo $row["pname"] ?></th>
                    <th><?php  echo $row["pdetails"] ?></th>
                    <th><?php echo $row["pimages"] ?></th>
                    <th><a href="php/delete.php?id=<?= $row['id']?>">Delete</a></th>
                    <th><a href="edit.php?id=<?= $row['id']?>">Edit</a></th>
                        
        </tbody>
        <?php }
        
        ?>    
    </table>
</body>
</html>