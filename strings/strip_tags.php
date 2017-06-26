<?php
$str = '<p>Параграф.</p>
        <!-- Comment -->
        Еще немного текста';
echo htmlspecialchars(strip_tags($str));
echo '<br />';
echo htmlspecialchars(strip_tags($str, '<p>'));
