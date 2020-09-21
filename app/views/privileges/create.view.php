<div class="container" style="padding-top: 30px;">

    <form method="post" enctype="application/x-www-form-urlencoded">
        <fieldset class="border-dark">
            <legend><?= $text_legend ?></legend>
            <div class="mt-3">
                <div class="col-3 input-effect">
                    <input class="effect-17" type="text" name="PrivilegeTitle" id="PrivilegeTitle"  placeholder="" maxlength="30">
                    <label> <?= $text_label_privilege_title; ?></label>
                    <span class="focus-border"></span>
                </div>

                <div class="col-3 input-effect">
                    <input class="effect-17" type="text" name="Privilege"  id="Privilege" placeholder="" maxlength="30">
                    <label> <?= $text_label_privilege_url; ?></label>
                    <span class="focus-border"></span>
                </div>

            </div>

            <div class="form-group mt-4">
                <button class="btn btn-teal" type="submit" name="submit"><?= $text_label_save; ?>
                </button>
            </div>
        </fieldset>

    </form>


</div>
