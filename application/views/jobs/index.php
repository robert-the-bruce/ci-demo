<h2>Übersicht</h2>

<a href="<?php echo base_url(); ?>jobs/add" class="btn btn-primary mb-2" role="button" aria-pressed="true">Neu anlegen</a>

<table class="table">
    <thead class="thead-dark">
    <th>Bezeichnung</th>
    <th>Unternehmen</th>
    <th>Aktion</th>
    </thead>
    <tbody>

    <?php foreach ($jobs as $job): ?>
        <tr>
            <td><?php echo $job->title; ?></td>
            <td><?php echo $job->company; ?></td>
            <td>
                <a href="<?php echo base_url() . 'jobs/view/' . $job->id; ?>">Ansehen</a>
                <a href="<?php echo base_url() . 'jobs/delete/' . $job->id; ?>">Löschen</a>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>



