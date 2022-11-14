<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-01-3</title>
</head>
<body>
<?php
$filePath = 'D:\WebServers\home\testsite\www\myfile.txt';
$fileName = findFileName($filePath, '\\');
echo "File name: $fileName";
?>
</body>
</html>

<?php
function findFileName($filePath, $separator)
{
    $position = mb_strrpos($filePath, $separator) + 1;
    return mb_substr($filePath, $position);
}
?>