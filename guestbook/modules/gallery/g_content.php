<?php
if(isset($feedback['gallery']) && is_array($feedback['gallery'])){
    echo '<p>';
    foreach($feedback['gallery'] as $img){
        //XSS here :)
        echo '<img src="' . $img . '" />&nbsp;';
    }
    echo '</p>';
}
else{
?>
<form method="post" action="" >
<label for="id-dir">Directory containing images</label>
<input type="text" name="dir" id="id-dir" />
<br />
<input type="submit" name="submit" value="Display" />
</form>
<?php
}
if(isset($feedback['gallery']) && NULL != $feedback['gallery'] && is_numeric($feedback['gallery'])){
    echo '<h3>';

    switch($feedback['gallery']){
        case ERR_IS_DIR: echo 'Invalid directory name! - ', ERR_IS_DIR;
            break;
        case ERR_NO_DIR: echo 'Please provide a directory name! - ', ERR_NO_DIR;
            break;
        case ERR_OPEN_DIR: echo 'Failed to open directory! - ', ERR_OPEN_DIR;
            break;
        case ERR_NO_IMAGES: echo 'The directory does not contain images! - ',
                ERR_NO_IMAGES;
            break;
        default;
    }

    echo '</h3>';
}
?>