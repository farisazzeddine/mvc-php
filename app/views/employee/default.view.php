<div class="container-fluid mt-4">

    <?php if (isset($_SESSION['message'])) { ?>
        <div class="center-align">
            <p class=" white-text col-md-6 offset-md-3 alert alert-success accent-3 <?= isset($error) ? 'indigo lighten-5' : '' ?>"
               style="padding:10px;">
                <?= $_SESSION['message'] ?>
            </p>

        </div>
        <?php
        unset($_SESSION['message']);
    } ?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Tax (%)</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>


        <?php if (false !== $employees){
        foreach ($employees

        as $employee){
        ?>
        <tr>
            <th scope="row"><?= $employee->id ?></th>
            <td><?= $employee->name ?></td>
            <td><?= $employee->age ?></td>
            <td><?= $employee->address ?></td>

            <td><?= $employee->tax ?></td>
            <td class="center-align align-content-lg-between indigo-text">
                <a href="/employee/edit/<?= $employee->id ?>"><i class="fa fa-pencil-square-o"
                                                                 aria-hidden="true"></i></a>
                <a href="/employee/delete/<?= $employee->id ?>"
                   onclick="if(!confirm('Do you want to delete this employee?')) return false;"><i class="fa fa-trash-o"
                                                                                                   aria-hidden="true"></i></a>
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




