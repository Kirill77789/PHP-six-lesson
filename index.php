<?php
// Добавлять в отчет все ошибки PHP (см. список изменений)
error_reporting(E_ALL);
// То же, что и error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

require 'functions.php';
pr($_POST);
function esc($data)
{
    if(is_string($data)) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
    }
    return $data;
}
    $FIO = esc($_POST['FIO']);
    $dl = strlen($FIO);
    $subs = mb_substr($FIO, 0, 6);
?>

<?php echo $FIO?>
<?php pr ($dl) ?>
<?php pr ($subs) ?>
<form action="" method="post">
    <div class="form form_group">
        <label for="fio" class="form_label">Имя</label>
        <input type="text" id="fio" name="FIO" class="form_input" value="<?php echo $FIO ?>">
    </div>
    <button class="form_button">OK</button>
</form>

<?php
