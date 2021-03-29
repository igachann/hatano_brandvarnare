<?php
$floor = $_POST['floor'];
$room = $_POST['room'];
$setback_floor = $_POST['setback_floor'];
$setback_start_room = $_POST['setback_start_room'];
$setback_end_room = $_POST['setback_end_room'];
$room_lists = [];

for ($i=1; $i <= $floor; $i++){
    if ($setback_floor == $i){
        for ($v=$setback_start_room; $v <= $setback_end_room; $v++){
            if(isset($_POST['exception-four'])){
                if($v === 4){
                    continue;
                }
            }
            if(isset($_POST['exception-nine'])){
                if($v === 9){
                    continue;
                }
            }
            $room_lists[] .= $i.sprintf('%02d',$v).'<br>';
        }
    }else{
        for ($v=1; $v <= $room; $v++){
            if(isset($_POST['exception-four'])){
                if($v === 4){
                    continue;
                }
            }
            if(isset($_POST['exception-nine'])){
                if($v === 9){
                    continue;
                }
            }
            $room_lists[] .= $i.sprintf('%02d',$v).'<br>';
        }
    }
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>てんけんチェッカー</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="script" href="js/create_box.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="box-container">
    <?php foreach ($room_lists as $room_list) : ?>
        <div class="container">
            <a href="#" class="btn-flat-border btn">
                <p class="room-number">
                    <?php echo $room_list;?>
                </p>
            </a>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>