<div class="container">
    <a href="<?php echo base_url(); ?>user" class="btn btn-primary mb-2" role="button" aria-pressed="true">Zur&uuml;ck</a>

    <h2>User ändern</h2>

    <?php echo form_open(); ?>

    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                   value="<?php echo $user->name; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Passwort</label>
            <input type="text" name="password" class="form-control" id="exampleFormControlInput2"
                   value="<?php echo $user->password; ?>">
        </div>
        <button type="submit" value="speichern" class="btn btn-primary mb-2">speichern</button>
    </form>

    <?php echo form_close(); ?>

</div>
