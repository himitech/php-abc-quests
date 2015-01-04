<?php
$left = isset($_POST['left']) ? $_POST['left'] : '';
$operator = isset($_POST['operator']) ? $_POST['operator'] : '';
$right = isset($_POST['right']) ? $_POST['right'] : '';

if ($left && $operator && $right) {
    switch ($operator) {
        case '−':
            $answer = $_POST['left'] - $_POST['right'];
            $selected['−'] = 'selected';
            break;
        case '×':
            $answer = $_POST['left'] * $_POST['right'];
            $selected['×'] = 'selected';
            break;
        case '÷':
            $answer = $_POST['left'] / $_POST['right'];
            $selected['÷'] = 'selected';
            break;
        case '＋':
        default:
            $answer = $_POST['left'] + $_POST['right'];
            $selected['＋'] = 'selected';
            break;
    }

    $result = "{$left} {$operator} {$right} ＝ {$answer}";
} else {
    $result = '計算結果なし';
    $selected['＋'] = 'selected';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="left" value="<?php echo $left; ?>" required autofocus/>
        <select name="operator">
            <option value="＋" <?php echo $selected['＋']; ?>>+</option>
            <option value="−" <?php echo $selected['−']; ?>>-</option>
            <option value="×" <?php echo $selected['×']; ?>>×</option>
            <option value="÷" <?php echo $selected['÷']; ?>>÷</option>
        </select>
        <input type="text" name="right" value="<?php echo $right; ?>" required/>
        <input type="submit" value="計算する">
    </form>
    <p><?php echo $result; ?></p>
</body>
</html>
