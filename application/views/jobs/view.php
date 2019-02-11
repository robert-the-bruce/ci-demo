<a href="<?php echo base_url(); ?>jobs">&laquo; Zur&uuml;ck</a>

<h2>Details: <?php echo $job->title; ?></h2>

<table>
    <tr>
        <td>Bezeichnung:</td>
        <td><?php echo $job->title; ?></td>
    </tr>
    <tr>
        <td>Unternehmen:</td>
        <td><?php echo $job->company; ?></td>
    </tr>
    <tr>
        <td>Beschreibung:</td>
        <td><?php echo nl2br($job->description); ?></td>
    </tr>
</table>