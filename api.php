<?php
$cyr = ['а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', 'ў', 'ғ', 'қ', 'ҳ', 'е', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'Ў', 'Ғ', 'Қ', 'Ҳ', 'Е', ];
$lat = ['a', 'b', 'v', 'g', 'd', 'e', 'yo', 'j', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'x', 's', 'ch', 'sh', 'sh', '\'', 'i', '\'', 'e', 'yu', 'ya', 'o‘', 'g‘', 'q', 'h', 'ye', 'A', 'B', 'V', 'G', 'D', 'E', 'Yo', 'J', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'X', 'S', 'Ch', 'Sh', 'Sh', '\'', 'I', '\'', 'E', 'Yu', 'Ya', 'O‘', 'G‘', 'Q', 'Ye'];

// Lotindan krilga o`griish
if ($_POST["variant"] == '2-1')
{
    $textlat = $_POST["from_text"];
    $textlat = str_replace($lat, $cyr, $textlat);
    echo json_encode(array(
        'success' => 'true',
        'to_text' => $textlat
    ));
}
// Krildan lotinga o`girish
if ($_POST["variant"] == '1-2')
{
    $textcyr = $_POST["from_text"];
    $textcyr = str_replace($cyr, $lat, $textcyr);
    echo json_encode(array(
        'success' => 'true',
        'to_text' => $textcyr
    ));
}

