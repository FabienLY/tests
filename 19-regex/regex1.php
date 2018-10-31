<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 10/22/18
 * Time: 2:36 PM
 */
if (preg_match('#guitare|piano#', 'J\'aime la guitare.'))
{
    echo 'Le mot que vous cherchez se trouve dans la chaîne';
}
else
{
    echo 'Le mot que vous cherchez ne se trouve pas dans la chaîne';
}
?>