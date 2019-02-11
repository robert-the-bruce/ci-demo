<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Übersicht</h2>

<a href="<?php echo base_url(); ?>jobs/add">Neu anlegen</a>

<table>
    <thead>
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
</body>
</html>


