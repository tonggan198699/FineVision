
<div class="panel panel-default panel1">

      <div class="panel-heading">
          <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion">
                Step 1: Your Details
              </a>
          </h4>
      </div>

      <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body">

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastname">Surname</label>
                                <input type="text" name="lastname" id="lastname" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                                <input name="email" type="text" id="email" class="form-control"/>
                                <span class="error_email" required>Please enter a valid email</span>
                        </div>
                    </div>
                </div>


              <div class="form-group">
                    <input class="btn btn-default pull-right" id="next1" data-toggle="collapse"
                      data-parent="#accordion" href="#collapse2" value="Next >" disabled>
              </div>

          </div>
      </div>

</div>
