<?php
session_start();
if (!empty($_SESSION)) 
{
    echo '���: ',$_SESSION['Name'];
    echo' �������: ',$_SESSION['Surname'] ;
    echo' �������: ',$_SESSION['Age'];
}
?>
