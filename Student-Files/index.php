<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My First PHP Document</title>
    <meta name="description" content="This is the introduction to using PHP">
  </head>
  <body>
    <!-- one thing that is really nice about PHP is that we can inject it anywhere we what to in a document. In order to add PHP we simply need to add the PHP tag. Just like the below example. -->
    <?php
    echo "<h1>Hello World</h1>";
    echo "<section style='background-color: skyblue'>";
    echo "<h2>Welcome</h2>";
    echo "<p>Good Morning</p>";
    echo "</section>";
    echo "</br>";
    $name = 'Gurneet';
    echo $name;
    ?>
  </body>
</html>
