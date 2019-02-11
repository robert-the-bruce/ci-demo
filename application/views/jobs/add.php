<a href="<?php echo base_url(); ?>jobs">&laquo; Zur&uuml;ck</a>

<h2>Neues Jobangebot erstellen</h2>

<?php echo form_open(); ?>

<table>
    <tr>
        <td>Bezeichnung:</td>
        <td><input type="text" name="title"/></td>
    </tr>
    <tr>
        <td>Unternehmen:</td>
        <td><input type="text" name="company"/></td>
    </tr>
    <tr>
        <td>Beschreibung:</td>
        <td><textarea name="description"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Speichern"/></td>
    </tr>
</table>

<?php echo form_close(); ?>