<a href="<?php echo base_url(); ?>jobs" class="btn btn-primary mb-2" role="button" aria-pressed="true">Zurück</a>

<h2>Details: <?php echo $job->title; ?></h2>

<table class="table btn-hover">
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
