<?php
/**
 * Date: 28.06.18
 * @author Isaenko Alexey <info@oiplug.com>
 */

require 'functions.php';

pr( $_POST );

function esc( $data ) {

    if ( is_string( $data ) ) {
        $data = trim( $data );
        $data = stripcslashes( $data );
        $data = strip_tags( $data );
        $data = htmlspecialchars( $data );
    }

    return $data;
}

if(empty($_POST['fio'])){
    $_POST['fio'] = '';
};
$fio   = esc( $_POST['fio'] );
$email = esc( $_POST['email'] );


$count = mb_strlen( $fio );

$substr = mb_substr( $fio, 0, 5 );
?>

<?php pr( $fio ); ?>
<?php pr( $email ); ?>
<?php

if ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    echo 'Email введен не верно!';
}

?>
    <form action="" method="post">
        <div class="form form_group">
            <label for="fio" class="form__label">Имя</label>
            <input type="text" id="fio" name="fio" class="form__input" value="<?php echo $fio; ?>">
        </div>
        <div class="form form_group">
            <label for="email" class="form__label">Email</label>
            <input type="text" id="email" name="email" class="form__input" value="<?php echo $email; ?>">
        </div>
        <button class="form__button">Ok</button>
    </form>

<?php
// eof
