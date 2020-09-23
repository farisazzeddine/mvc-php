<div class="container">
    <h4 class="bg-title"><?= $text_group_header ?></h4>
    <a href="/usersgroups/create" class="button"><i class="fa fa-plus"></i> <?= $text_new_item ?></a>

        <table id="table_id" class="table table-hover display">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">                     <?= $text_table_group_groupName ?>  </th>
            <th class="text-center" scope="col">    <?= $text_table_Action ?>        </th>
        </tr>
        </thead>
        <tbody>
        <?php $index = 0; ?>
        <?php if(false !== $groups  ) : foreach ($groups as $group): ?>
              <tr>
            <th scope="row"><?=$index++  ?></th>
            <td><?= $group->Group_name  ?></td>
            <td class="text-center">
                <a href="/usersgroups/edit/<?= $group->Group_id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="/usersgroups/delete/<?= $group->Group_id ?>"
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

