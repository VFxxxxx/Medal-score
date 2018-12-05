<?
function filterValue($value = "") {
    $value = trim($value); //для удаления пробелов из начала и конца строки
    $value = stripslashes($value); //для удаления экранированных символов
    $value = strip_tags($value); //для удаления HTML и PHP тегов
    $value = htmlspecialchars($value); //преобразует специальные символы
    return $value;
}
?>