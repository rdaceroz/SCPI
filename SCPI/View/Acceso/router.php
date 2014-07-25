<?php
echo 'estas en router';
class AccesoRouter
{
    public function redirect($link)
    {
        echo '<script> location.href="'.$link.'.php"</script>';
    }
}


