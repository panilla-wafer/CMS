<?php if (isset ($_SESSION['success'])) : ?>
    <div class="alert alert-success" role="alert">
        <?= $_SESSION['success']; ?>
        <?php
        //remove success from session after displaying it
        unset ($_SESSION['success']); 
        ?>
    </div>
<?php endif ;?> 