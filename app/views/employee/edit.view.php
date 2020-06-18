<html>
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://use.fontawesome.com/0af447c5a1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<div  class="row z-depth-1 light-green lighten-5" style="padding-top:  20px;"  >

    <div class="container" style="padding-top: 30px;">

        <form method="post" enctype="application/x-www-form-urlencoded">
            <div class="card pull-l5 teal lighten-2" style="padding: 1px;">
                <h5 class="center-align white-text">Employee Information</h5>
            </div>

            <div class="input-field col s10 offset-s1 center-align">
                <input id="name" type="text" name="name" class="validate" value="<?= $employee->name ?>" required>
                <label for="name">Employee Name:</label>
            </div>

            <div class="input-field col s10 offset-s1 center-align">
                <input id="age" type="number" name="age" class="validate" min="22" max="60" value="<?= $employee->age ?>"  required>
                <label for="age">Employee Age:</label>
            </div>

            <div class="input-field col s10 offset-s1 center-align">
                <input id="address" type="text" name="address" class="validate" value="<?= $employee->address ?>" required>
                <label for="address">Employee Address:</label>
            </div>
            <div class="input-field col s10 offset-s1 center-align">
                <input id="salary" type="number" name="salary" step="0.01" min="1500" max="9000" class="validate" value="<?= $employee->salary ?>" required>
                <label for="salary">Employee Salary:</label>
            </div>
            <div class="input-field col s10 offset-s1 center-align">
                <input id="tax" type="number" name="tax" step="0.01" min="1" max="5" class="validate" value="<?= $employee->tax ?>" required>
                <label for="tax">Employee Tax %:</label>
            </div>

            <div class="row">
                <div class="input-field col s12  center-align">
                    <button class="btn waves-effect  purple darken-4  " type="submit" name="submit">Save
                    </button>
                </div>
            </div>

        </form>


    </div>
</div>
</body>
</html>






