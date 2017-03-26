<?php
var_dump($_POST);
$fileContent = file_get_contents("checkboxes.txt");
$checkboxes = unserialize($fileContent);

if ($_POST['newLessonName']) {
    $checkboxes[] = [
        "value" => "",
        "text" => $_POST['newLessonName']
    ];
    file_put_contents("checkboxes.txt", serialize($checkboxes));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My ToDo List</title>
    <link href="styles/style1.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
<div class="container">
    <h1 onclick="this.innerHTML = 'Ooops!'">Click on this text!</h1>

    <form action="" method="post">

        <ol>
            <li>Dinamic</li>

            <?php
            /*   foreach ($checkboxes as $key => $checkboxobject) {
                  echo '<input type="checkbox" name="checkbox['.$key.']" checked>'.$checkboxobject["text"].'<br>';
              }
            */
            ?>

            <li>Прочитать статьи с лекций:</li>
            <input type="checkbox" name="action" checked>B1<br>
            <input type="checkbox" name="action" checked>B2<br>
            <input type="checkbox" name="action" checked>B3<br>
            <input type="checkbox" name="action" checked>B4<br>
            <input type="checkbox" name="action" checked>B5<br>
            <input type="checkbox" name="action" checked>B8<br>
            <input type="checkbox" name="action" checked>B6<br>

            <input type="checkbox" name="action" checked>B7</><br>

        <input type="checkbox" name="action"><span style="color:green;">B9</span><br>

        <input type="checkbox" name="action" checked>A14<br>
        <input type="checkbox" name="action" checked>A10(не удалось увидеть примеры)<br>

        <input type="checkbox" name="action" checked>A7<br>
        <input type="text" name="newLessonName">

        <button>Add new</button>

        <li>https://developer.mozilla.org</li>
        <input type="checkbox" name="action" checked>HTML<br>
        <input type="checkbox" name="action" checked>CSS<br>
        <input type="checkbox" name="action"><span>JavaScript</span><br>
        <input type="checkbox" name="action"><span>Learn Git</span><br>
        <input type="checkbox" name="action" checked>Learn the Command Line<br>
        <input type="checkbox" name="action"><span>SQL</span><br>
        <input type="checkbox" name="action">Accessibility<br>
        <input type="checkbox" name="action">Tools and testing<br>
        <input type="checkbox" name="action">Server-side website programming<br>


        <li><input type="checkbox" name="action">Прослушать курс Веб-технологии.</li>
        <li><input type="checkbox" name="action"><a href="https://www.codecademy.com/learn/react-101">ReactJs</a></li>

        </ol>

        <img src="images/maldives.jpg" alt="regular pyramid built from four equilateral triangles">

        <picture>
            <source media="(max-width: 500px)" srcset="images/maldives1.jpg">
            <source media="(min-width: 501px)" srcset="images/maldives.jpg">
            <img src="images/maldives.jpg" alt="View of Maldives">
        </picture>


    </form>
</div>
</body>

</html>