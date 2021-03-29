
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>てんけんチェッカー</title>
</head>
<body>
<div class="main-container">
    <h1>てんけんチェッカー</h1>
    <?php //var_dump($_POST); ?>
    <form method="post" action="confirm.php">
        <div class="element_wrap">
            <label>階数</label>
            <select name="floor">
                <?php for ($i=1; $i<=50; $i++) {?>
                    <option name="floor" value="<?php echo $i ?>"><?php echo $i.'階' ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="element_wrap">
            <label>部屋数</label>
            <select name="room">
                <?php for ($i=1; $i<=30; $i++) {?>
                    <option name="room" value="<?php echo $i ?>"><?php echo $i.'号室' ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="element_wrap">
            <label>4号室なしを考慮する</label>
            <input type="checkbox" name="exception-four" value="1" checked="checked">
        </div>

        <div class="element_wrap">
            <label>9号室なしを考慮する</label>
            <input type="checkbox" name="exception-nine" value="1" checked="checked">
        </div>

        <div class="element_wrap">
            <label class="wf-nicomoji">セットバックを考慮する</label>
            <button id="setback" type="button">+</button>
            <select name="setback_floor">
                <option disabled selected value>階数を選択</option>
                <?php for ($i=1; $i<=50; $i++) {?>
                    <option name="setback_floor" value="<?php echo $i ?>"><?php echo $i.'階' ?></option>
                <?php } ?>
            </select>

            <select name="setback_start_room">
                <option disabled selected value>部屋を選択</option>
                <?php for ($i=1; $i<=30; $i++) {?>
                    <option name="setback_start_room" value="<?php echo $i ?>"><?php echo $i.'号室' ?></option>
                <?php } ?>
            </select>
            〜
            <select name="setback_end_room">
                <option disabled selected value>部屋を選択</option>
                <?php for ($i=1; $i<=30; $i++) {?>
                    <option name="setback_end_room" value="<?php echo $i ?>"><?php echo $i.'号室' ?></option>
                <?php } ?>
            </select><br>
        </div>
            <input  class="setting" type="submit" name="btn_confirm" value="設定する">
    </form>
</div>

</body>
</html>