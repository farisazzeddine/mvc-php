<div class="container" style="padding-top: 30px;">

    <form method="post" enctype="application/x-www-form-urlencoded">
        <fieldset class="px-4">
            <legend><?= $text_legend ?></legend>
            <div class="row mt-3">

                <div class="col-md-4  input-effect">
                    <input   class="effect-17" type="text" name="Username" id="Username" placeholder=""   maxlength="40" value="<?= $this->showValue('Username')?>">
                    <label <?= $this->labelFloat('Username')?>> <?= $text_label_Username; ?></label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-md-4  input-effect">
                    <input   class="effect-17" type="text" name="FirstName" id="FirstName" placeholder=""   maxlength="10" value="<?= $this->showValue('FirstName')?>">
                    <label <?= $this->labelFloat('FirstName')?> > <?= $text_label_FirstName; ?></label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-md-4  input-effect">
                    <input   class="effect-17" type="text" name="LastName" id="LastName" placeholder=""   maxlength="10" value="<?= $this->showValue('LastName')?>">
                    <label <?= $this->labelFloat('LastName')?>> <?= $text_label_LastName; ?></label>
                    <span class="focus-border"></span>
                </div>

                <div class="col-md-4  input-effect mt-4">
                    <input required class="effect-17" type="email" name="Email"  id="Email" placeholder=""  maxlength="40" value="<?= $this->showValue('Email')?>">
                    <label <?= $this->labelFloat('Email')?>> <?= $text_label_Email; ?></label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-md-4  input-effect mt-4">
                    <input required class="effect-17" type="email" name="CEmail"  id="CEmail" placeholder=""  maxlength="40" value="<?= $this->showValue('CEmail')?>">
                    <label <?= $this->labelFloat('CEmail')?>> <?= $text_label_CEmail; ?></label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-md-4  input-effect mt-4">
                    <input required class="effect-17" type="text" name="PhoneNumber" id="PhoneNumber" placeholder=""   maxlength="15" value="<?= $this->showValue('PhoneNumber')?>">
                    <label <?= $this->labelFloat('PhoneNumber')?>> <?= $text_label_PhoneNumber; ?></label>
                    <span class="focus-border"></span>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-6  input-effect">
                    <input required class="effect-17" type="password" name="Password"  id="Password" placeholder=""  value="<?= $this->showValue('Password')?>">
                    <label <?= $this->labelFloat('Password')?>> <?= $text_label_Password; ?></label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-md-6  input-effect">
                    <input required class="effect-17" type="password" name="c_Password"  id="c_Password" placeholder=""  value="<?= $this->showValue('c_Password')?>">
                    <label <?= $this->labelFloat('c_Password')?>> <?= $text_label_c_Password; ?></label>
                    <span class="focus-border"></span>
                </div>

                <div class="col-md-6  input-effect mt-4">
                    <select class="form-control effect-17" name="Group_id">
                        <option value=""><?= $text_label_Group_id; ?></option>
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
