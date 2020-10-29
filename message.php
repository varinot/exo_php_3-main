
<?php   
    include ('../template/navigBar.php');
?>
       <!-- message de succes ou d'erreur -->
    <div class="div_mess">
       <p>
        les résultats de votre saisie dans le message
       </p>
       <p>
        <?php
       
        echo $mess[0];
        ?>
        </p>
        <?php
        echo $mess[1];
        ?>
        <p>
        <?php
        echo $mess[2];
        ?>
        </p>
        <p>
        <?php
        echo $mess[3];
        ?>
        </p>

    </div>
   </body>
</html>