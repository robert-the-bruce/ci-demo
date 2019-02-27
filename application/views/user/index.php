<div class="container">
    <h2>Übersicht</h2>

    <a href="<?php echo base_url(); ?>user/add" class="btn btn-primary mb-2" role="button" aria-pressed="true">Neu anlegen</a>

    <table class="table">
        <thead class="thead-dark">
        <th>Name</th>
        <th>Passwort</th>
        <th>Aktion</th>
        </thead>
        <tbody>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->password; ?></td>
                <td>
                    <a href="<?php echo base_url() . 'user/view/' . $user->id; ?>">Ansehen</a>
                    <a href="<?php echo base_url() . 'user/update/' . $user->id; ?>">Ändern</a>
                    <a href="<?php echo base_url() . 'user/delete/' . $user->id; ?>">Löschen</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>