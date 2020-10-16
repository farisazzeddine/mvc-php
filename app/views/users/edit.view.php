<div class="container" style="padding-top: 30px;">

    <form method="post" enctype="application/x-www-form-urlencoded">
        <fieldset class="px-4">
            <legend><?= $text_legend ?></legend>

            <div class="row mt-4">
                <div class="col-md-6  input-effect">
                    <input required class="effect-17" type="text" name="PhoneNumber" id="PhoneNumber" placeholder=""   maxlength="15" value="<?= $this->showValue('PhoneNumber',$user)?>">
                    <label <?= $this->labelFloat('PhoneNumber',$user)?>> <?= $text_label_PhoneNumber; ?></label>
                    <span class="focus-border"></span>
                </div>
                <div class="col-md-6  input-effect">
                    <select class="form-control effect-17" name="Group_id">
                        <option value=""><?= $text_label_Group_id; ?></option>
                        <?php  if(false !== $groups): foreach ($groups as $group): ?>
                            <option value="<?= $group->Group_id ?>" <?= $this->selectedIf('Group_id', $group->Group_id ,$user) ?>>
                                <?= $group->Group_name ?>
                            </option>
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
