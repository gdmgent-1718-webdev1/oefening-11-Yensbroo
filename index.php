<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$navigation = [
    'index' => 'Home',
    'about' => 'Over ons',
    'portfolio' => 'Portfolio',
    'contact' => 'Contacteer ons'
];

foreach($navigation as $listItem) {
    echo '<ul>
            <li>
                <a href="#">' . $listItem . '</a>
            </li>
          </ul>';
}

?>
</body>
</html>