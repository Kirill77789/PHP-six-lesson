<?php
/*// Добавлять в отчет все ошибки PHP (см. список изменений)
error_reporting(E_ALL);
// То же, что и error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);*/

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
};
if(empty($_POST['FIO'])){
    $_POST['FIO'] = '';
};
if(empty($_POST['mail'])){
    $_POST['mail'] = '';
};
    $FIO = esc($_POST['FIO']);
    $mail = esc($_POST['mail']);
    $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
    $dl = mb_strlen($FIO);
    $subs = mb_substr($FIO, 0, 6);
?>

<?php pr($FIO); ?>
<?php pr($mail); ?>
<?php if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    echo 'Не корректный E-mail';
}; ?>
<?php /*pr ($dl); */?><!--
--><?php /*pr ($subs); */?>
<form action="" method="post">
    <div class="form form_group">
        <label for="" class="form_label">Имя</label>
        <input type="text" name="FIO" class="form_input" value="<?php echo _echo('FIO'); ?>">
    </div>
    <div class="form form_group">
        <label for="" class="form_label">E-mail</label>
        <input type="text" name="mail" class="form_input" value="<?php echo _echo('mail'); ?>">
    </div>
    <button class="form_button">OK</button>
</form>

<?php
