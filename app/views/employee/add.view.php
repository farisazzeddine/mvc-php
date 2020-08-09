

    <div class="container" style="padding-top: 30px;">

            <form method="post" enctype="application/x-www-form-urlencoded">
                <div class="card">
                    <div class="card-header bg-teal-darken" >
                        <h5 class="text-capitalize text-white">Employee Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-inline my-2">
                            <div class="form-inline col-md-4 ">
                                <label for="name"> Name:</label>
                                <input id="name" type="text" name="name" class="form-control mx-2"  required>
                            </div>

                            <div class="form-inline col-md-4 ">
                                <label for="age"> Age:</label>
                                <input id="age" type="number" name="age" class="form-control mx-2" min="22" max="60"   required>
                            </div>

                            <div class="form-inline col-md-4">
                                <label for="address"> Address:</label>
                                <input id="address" type="text" name="address" class="form-control mx-2" required>
                            </div>
                        </div>
                        <div class="form-inline mt-4 mb-4">
                            <div class="form-inline col-md-4">
                                <label for="salary"> Salary:</label>
                                <input id="salary" type="number" name="salary" step="0.01" min="1500" max="9000" class="form-control mx-2" required>
                            </div>
                            <div class="form-inline col-md-4">
                                <label for="tax"> Tax %:</label>
                                <input id="tax" type="number" name="tax" step="0.01" min="1" max="5" class="form-control mx-2" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <button class="btn btn-teal btn-block" type="submit" name="submit">Save
                            </button>
                        </div>

                    </div>
                </div>
            </form>


    </div>






