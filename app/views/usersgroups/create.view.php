<div class="container" style="padding-top: 30px;">

    <form method="post" enctype="application/x-www-form-urlencoded">
        <fieldset>
            <legend><?= $text_legend ?></legend>
            <div class="row mt-3">
                <div class="col-md-5 col-3 input-effect">
                    <input class="effect-17" type="text" name="Group_name" id="Group_name"  placeholder="" maxlength="20">
                    <label> <?= $text_label_group_title ?></label>
                    <span class="focus-border"></span>
                </div>
            </div>

            <div class="col-md-12 ml-4">
                <label class="font-weight-bold"> <?= $text_label_privileges ?></label>
                <div class=" d-block">
                    <?php if(false !== $privileges  ) : foreach ($privileges as $privilege): ?>
                        <input type="checkbox" class="form-check-input" name="privileges[]" id="exampleCheck<?=$privilege->Privilege_id ?>" value="<?=$privilege->Privilege_id ?>">
                        <label class="form-check-label d-block" for="exampleCheck<?=$privilege->Privilege_id ?>"><?=$privilege->PrivilegeTitle ?></label>
                    <?php  endforeach; else : ?>
                        <label>  il ya pas des données  </label>
                    <?php endif; ?>
                </div>

            </div>

            <div class="col-md-12 form-group">
                <button class="btn btn-teal float mb-2" type="submit" name="submit"><?= $text_label_save; ?>
                </button>
            </div>
        </fieldset>

    </form>


</div>
