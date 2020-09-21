<div class="container">
    <h4 class="bg-title"><?= $text_privilege_header ?></h4>
    <a href="/privileges/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>



        <table id="table_id" class="table table-hover display">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">                     <?= $text_table_privilege_privilegeName ?>          </th>
            <th scope="col">                     <?= $text_table_privilege_privilegeUrl ?>          </th>
            <th  class="text-center" scope="col"><?= $text_table_Action ?>                  </th>
        </tr>
        </thead>
        <tbody>
        <?php if(false !== $privileges  ) : foreach ($privileges as $privilege): ?>
              <tr>
            <th scope="row"><?= $privilege->Privilege_id  ?></th>
            <td><?= $privilege->PrivilegeTitle  ?></td>
            <td><?= $privilege->Privilege  ?></td>
            <td class="text-center">
                <a href="/user/edit/<?= $privilege->Privilege_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="/user/delete/<?= $privilege->Privilege_id ?>"
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

