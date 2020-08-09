

    <div class="container-fluid" >

        <form method="post" enctype="application/x-www-form-urlencoded">
            <div class="card-header bg-teal-darken" >
                <h5 class="text-capitalize text-white">Employee Information</h5>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="name">Employee Name:</label>
                <input id="name" type="text" name="name" class="form-control" value="<?= $employee->name ?>" required>
            </div>

            <div class="form-group">
                <label for="age">Employee Age:</label>
                <input id="age" type="number" name="age" class="form-control" min="22" max="60" value="<?= $employee->age ?>"  required>
            </div>

            <div class="form-group">
                <label for="address">Employee Address:</label>
                <input id="address" type="text" name="address" class="form-control" value="<?= $employee->address ?>" required>
            </div>
            <div class="form-group">
                <label for="salary">Employee Salary:</label>
                <input id="salary" type="number" name="salary" step="0.01" min="1500" max="9000" class="form-control" value="<?= $employee->salary ?>" required>
            </div>
            <div class="form-group">
                <label for="tax">Employee Tax %:</label>
                <input id="tax" type="number" name="tax" step="0.01" min="1" max="5" class="form-control" value="<?= $employee->tax ?>" required>
            </div>


                <div class="form-group">
                    <button class="btn btn-teal btn-block" type="submit" name="submit">Save
                    </button>
                </div>
            </div>
        </form>


    </div>








