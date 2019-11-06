<?php
$content = file_get_contents('https://calendar.google.com/calendar/embed?src=m1afngc9078hrdva26u2h74hmg%40group.calendar.google.com&ctz=Europe%2FBrussels');
$content = str_replace('</title>','</title><base href="https://www.google.com/calendar/" />', $content);
$content = str_replace('</head>','<link rel="stylesheet" href="" /></head>', $content);
echo $content;
?>