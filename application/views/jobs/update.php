<div class="container">
    <a href="<?php echo base_url(); ?>jobs" class="btn btn-primary mb-2" role="button" aria-pressed="true">Zur&uuml;ck</a>

    <h2>Jobangebot ändern</h2>

    <?php echo form_open(); ?>

    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Bezeichnung</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                   value="<?php echo $job->title; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Unternehmen</label>
            <input type="text" name="company" class="form-control" id="exampleFormControlInput2"
                   value="<?php echo $job->company; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Beschreibung</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $job->description; ?></textarea>
        </div>
        <button type="submit" value="speichern" class="btn btn-primary mb-2">speichern</button>
    </form>

    <?php echo form_close(); ?>

</div>
