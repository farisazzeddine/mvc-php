<div class="container">
    <h4 class="bg-title"><?= $text_us_header ?></h4>
    <a href="/users/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>
        <table id="table_id" class="table table-hover display">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">                     <?= $text_table_user_usersName ?>          </th>
            <th  class="text-center" scope="col"><?= $text_table_user_email ?>              </th>
            <th  class="text-center" scope="col"><?= $text_table_user_phoneNumber ?>        </th>
            <th  class="text-center" scope="col"><?= $text_table_groupId ?>                 </th>
            <th  class="text-center" scope="col"><?= $text_table_subscriptionDate ?>        </th>
            <th  class="text-center" scope="col"><?= $text_table_last_login ?>              </th>
            <th  class="text-center" scope="col"><?= $text_table_Action ?>                  </th>
        </tr>
        </thead>
        <tbody>
        <?php if(false !== $users  ) : foreach ($users as $user): ?>
              <tr>
            <th scope="row"><?= $user->User_id  ?></th>
            <td><?= $user->Username  ?></td>
            <td class="text-center"><?= $user->Email  ?></td>
            <td  class="text-center"><?= $user->PhoneNumber  ?></td>
            <td  class="text-center"><?= $user->Group_id  ?></td>
            <td  class="text-center"><?= $user->SubscriptionDate ?></td>
            <td class="text-center">
                <a href="/user/edit/<?= $user->User_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="/user/delete/<?= $user->User_id ?>"
                   onclick="if(!confirm('<?= $text_delete_confirm ?>')) return false;"><i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
            </td>

        <?php  endforeach; else : ?>
            <tr>
                    <td colspan="6"><p>Sorry no users to list</p></td
            </tr>
        <?php endif; ?>
        </tbody>

</div>

