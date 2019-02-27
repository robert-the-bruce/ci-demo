<div class="container">
    <a href="<?php echo base_url(); ?>user" class="btn btn-primary mb-2" role="button" aria-pressed="true">Zurück</a>

    <h2>Details: <?php echo $user->name; ?></h2>

    <table class="table btn-hover">
        <tr>
            <td>Name:</td>
            <td><?php echo $user->name; ?></td>
        </tr>
        <tr>
            <td>Passwort:</td>
            <td><?php echo $user->password; ?></td>
        </tr>
    </table>
</div>

