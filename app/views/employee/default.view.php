<div class="container-fluid mt-4">


    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"><?= $text_table_employee_Name ?></th>
            <th  class="text-center" scope="col"><?= $text_table_employee_Age ?></th>
            <th  class="text-center" scope="col"><?= $text_table_employee_Address ?></th>
            <th  class="text-center" scope="col"><?= $text_table_employee_Tax ?></th>
            <th  class="text-center" scope="col"><?= $text_table_Action ?></th>
        </tr>
        </thead>
        <tbody>


        <?php if (false !== $employees){
        foreach ($employees as $employee){
        ?>
        <tr>
            <th scope="row"><?= $employee->id ?></th>
            <td><?= $employee->name ?></td>
            <td class="text-center"><?= $employee->age ?></td>
            <td  class="text-center"><?= $employee->address ?></td>

            <td  class="text-center"><?= $employee->tax ?></td>
            <td class="text-center">
                <a href="/employee/edit/<?= $employee->id ?>"><i class="fa fa-pencil-square-o"
                                                                 aria-hidden="true"></i></a>
                <a href="/employee/delete/<?= $employee->id ?>"
                   onclick="if(!confirm('<?= $text_delete_confirm ?>')) return false;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>

            <?php
            }
            }
            else {
                ?>
                <td colspan="6"><p>Sorry no employees to list</p></td

                <?php
            }
            ?>
        </tr>

        </tbody>

</div>
</div>




