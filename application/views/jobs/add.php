<a href="<?php echo base_url(); ?>jobs" class="btn btn-primary mb-2" role="button" aria-pressed="true">Zur&uuml;ck</a>

<h2>Neues Jobangebot erstellen</h2>

<?php echo form_open(); ?>

<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Bezeichnung</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Bezeichnung">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Unternehmen</label>
        <input type="text" name="company" class="form-control" id="exampleFormControlInput2" placeholder="Unternehmen">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Beschreibung</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" value="speichern" class="btn btn-primary mb-2">speichern</button>
</form>

<?php echo form_close(); ?>