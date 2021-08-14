// Обработчик ошибок
function nettuts_error_handler($number, $message, $file, $line, $vars){
 $email = "
 <p>An error ($number) occurred on line
 <strong>$line</strong> and in the <strong>file: $file.</strong>
 <p> $message </p>";

$email .= "<pre>" . print_r($vars, 1) . "</pre>";

$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

