<!DOCTYPE html>
<html>
        <body>
            <?php

                if($_POST ['meno'] == "jakub" && $_POST ['heslo'] == "hvizdak")
                {
                    echo "Si prihlaseny";
                }
                else {
                    echo "Nie si prihlaseny";
                }


            ?>    
        </body>     
</html>    
