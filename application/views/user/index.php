<div class="container">
    <h2>Übersicht</h2>

    <a href="<?php echo base_url(); ?>user/add" class="btn btn-primary mb-2" role="button" aria-pressed="true">Neu anlegen</a>

    <table class="table">
        <thead class="thead-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Passwort</th>
        </thead>
        <tbody>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->password; ?></td>
                <td>
                    <a href="<?php echo base_url() . 'user/view/' . $job->id; ?>">Ansehen</a>
                    <a href="<?php echo base_url() . 'user/update/' . $job->id; ?>">Ändern</a>
                    <a href="<?php echo base_url() . 'user/delete/' . $job->id; ?>">Löschen</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>




