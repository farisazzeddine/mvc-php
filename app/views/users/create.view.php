<div class="container" style="padding-top: 30px;">

    <form method="post" enctype="application/x-www-form-urlencoded">
        <fieldset class="px-4">
            <legend><?= $text_legend ?></legend>
            <div class="row mt-3">
                <div class="col-md-4  input-effect">
                    <input required class="effect-17" type="text" name="Username" id="Username" placeholder=""   maxlength="40">
                    <label> <?= $text_label_users_name; ?></label>
                    <span class="focus-border"></span>
                </div>

                <div class="col-md-4  input-effect">
                    <input required class="effect-17" type="email" name="Email"  id="Email" placeholder=""  maxlength="40">
                    <label> <?= $text_label_users_email; ?></label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-md-4  input-effect">
                    <input required class="effect-17" type="email" name="CEmail"  id="CEmail" placeholder=""  maxlength="40">
                    <label> <?= $text_label_users_confirme_email; ?></label>
                    <span class="focus-border"></span>
                </div>




            </div>
            <div class="row mt-4">
                <div class="col-md-4  input-effect">
                    <input required class="effect-17" type="password" name="Password"  id="Password" placeholder="" >
                    <label> <?= $text_label_users_password; ?></label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-md-4  input-effect">
                    <input required class="effect-17" type="password" name="c_Password"  id="c_Password" placeholder="" >
                    <label> <?= $text_label_users_confirm_password; ?></label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-md-4  input-effect">
                    <input required class="effect-17" type="text" name="PhoneNumber" id="PhoneNumber" placeholder=""   maxlength="40">
                    <label> <?= $text_label_users_phone; ?></label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-md-6  input-effect mt-4">
                    <select class="form-control effect-17">
                        <option value=""><?= $text_label_users_groups_select; ?></option>
                        <?php  if(false !== $groups): foreach ($groups as $group): ?>

                        <option value="<?= $group->Group_id ?>"><?= $group->Group_name ?></option>
                        <?php endforeach; endif;  ?>
                    </select>
                </div>

            </div>

            <div class="col-md-12 form-group mt-4">
                <button class="btn btn-teal float mb-2" type="submit" name="submit"><?= $text_label_save; ?>
                </button>
            </div>
        </fieldset>

    </form>


</div>
