<?php if (isset ($_SESSION['error'])) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $_SESSION['error']; ?>
        <?php
        //remove error from session after displaying it
        unset ($_SESSION['error']); 
        ?>
    </div>
<?php endif ;?> 