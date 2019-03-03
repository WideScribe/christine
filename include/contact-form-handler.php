<?php
if (!empty($_POST))
{
    //Displays the data that was received from the input box named name in the form
     echo ($_POST['name']);

     print_r($_POST);

}
else // $_POST is empty.
{
    echo "Perform code for page without POST data. ";
}
?>
