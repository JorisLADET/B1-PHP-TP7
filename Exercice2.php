$liaisonsHouat = array();

for ($i = count($liaisons) - 1; $i >= 0; $i--) {
    if (strpos($liaisons[$i], 'Houat') !== false) {
        $liaisonsHouat[] = array_splice($liaisons, $i, 1)[0];
    }
}

usort($liaisonsHouat, function ($a, $b) {
    return explode(":", $a)[1] - explode(":", $b)[1];
});

foreach ($liaisonsHouat as $liaison) {
    echo "\t- " . explode(":", $liaison)[1] . "\n";
}
