

    <div class="container" style="padding-top: 30px;">

            <form method="post" enctype="application/x-www-form-urlencoded">
                <div class="card pull-l5 teal lighten-2" style="padding: 1px;">
                    <h5 class="center-align white-text">Employee Information</h5>
                </div>

                <div class="input-field col s10 offset-s1 center-align">
                    <input id="name" type="text" name="name" class="validate"  required>
                    <label for="name">Employee Name:</label>
                </div>

                <div class="input-field col s10 offset-s1 center-align">
                    <input id="age" type="number" name="age" class="validate" min="22" max="60"   required>
                    <label for="age">Employee Age:</label>
                </div>

                <div class="input-field col s10 offset-s1 center-align">
                    <input id="address" type="text" name="address" class="validate"  required>
                    <label for="address">Employee Address:</label>
                </div>
                <div class="input-field col s10 offset-s1 center-align">
                    <input id="salary" type="number" name="salary" step="0.01" min="1500" max="9000" class="validate"  required>
                    <label for="salary">Employee Salary:</label>
                </div>
                <div class="input-field col s10 offset-s1 center-align">
                    <input id="tax" type="number" name="tax" step="0.01" min="1" max="5" class="validate"  required>
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






