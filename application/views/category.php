<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <input id="testJson" value = '<?php echo $courses; ?>'>
    <input id="test" value = '<?php echo $field;?>'>
</body>
<script>
    const testJson = document.querySelector("#testJson");
    var json = JSON.parse(testJson.value);
    console.log(json);
</script>
</html>