<div class="container" style="padding-top: 30px;">

    <form method="post" enctype="application/x-www-form-urlencoded">
        <fieldset >
            <legend><?= $text_legend ?></legend>
            <div class="row mt-3">
                <div class="col-md-5 col-3 input-effect">
                    <input class="effect-17" type="text" name="PrivilegeTitle" id="PrivilegeTitle"  placeholder="" maxlength="30" value="<?= $privilege->PrivilegeTitle; ?>">
                    <label class="floated"> <?= $text_label_privilege_title; ?></label>
                    <span class="focus-border"></span>
                </div>

                <div class="col-md-5 col-3 input-effect">
                    <input class="effect-17" type="text" name="Privilege"  id="Privilege" placeholder="" maxlength="30" value="<?= $privilege->Privilege; ?>">
                    <label class="floated"> <?= $text_label_privilege_url; ?></label>
                    <span class="focus-border"></span>
                </div>

            </div>

            <div class="col-md-12 form-group">
                <button class="btn btn-teal float mb-2" type="submit" name="submit"><?= $text_label_save; ?>
                </button>
            </div>
        </fieldset>

    </form>


</div>
