<?php
    require('../../model/connect.php');
    $sql = "SELECT * FROM `roomImage`";
    $show = $connect->query($sql);
    $show->execute();
    $list = $show->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Image</title>
    <link rel="stylesheet" href="../quanTri.css">
    <link rel="stylesheet" href="image.css">
</head>
<body>
<div class="admin">
        <div class="category">
            <div class="logo">
                <a href="../quanTri.php"><img src="../../view/img/logo.png" alt=""></a>
            </div>
            <hr>
            <div class="category-1">
                <a href="../kindRoom/kindRoom.php"><h2 class="kind">Kind Of Room</h2></a>
                <a href="../room/room.php"><h2>Room</h2></a> <br>
                <a href="../roomImage/image.php"><h2>Room Image</h2></a>
                <a href="../user/user.php"><h2>User</h2></a><br>
                <h2>Roombooked</h2>
                <a href="../comment/cmt.php"><h2>Comment</h2></a>
                <h2>Statistical</h2>
            </div>
            <div class="logout">
                <a href="../../index.php">
                    <h2><i class="fa-solid fa-right-from-bracket"></i> LogOut</h2>
                </a>
            </div>
        </div>
        <div class="content">
            <div>
                <h1>Room Image</h1>
            </div>
            <hr>
            <div class="hangHoa">
                <table>
                    <thead>
                        <tr>
                            <th>Room Image ID</th>
                            <th>Room ID</th>
                            <th>Room Image</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $item) {
                        ?>
                            <tr>
                                <td><?php echo $item['room_image_id'] ?></td>
                                <td><?php echo $item['room_id'] ?></td>
                                <td><img src="<?php echo "../room/" . $item['image_room'] ?>" width="200px" height="100px"></td>
                                <td>
                                    <a onclick="return confirm('Do you want delete?')" href="delete.php?id=<?php echo $item['room_image_id'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>