
<div class="panel panel-default panel2">

      <div class="panel-heading">
          <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion">
                Step 2: More Comments
              </a>
          </h4>
      </div>

    <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">

            <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                           <label for="telephone">Telephone Number</label>
                                <input type="tel" class="form-control" name="telephone" pattern="^\d{4}-\d{3}-\d{4}$" required>
                                <span class="error_firstname" required>Please enter a valid uk number</span>
                      </div>
                  </div>

                  <div class="col-md-2">
                      <div class="form-group">
                           <label for="gender">Gender</label>
                               <select class="form-control" name="gender">
                                   <option value="m">Male</option>
                                   <option value="f">Female</option>
                               </select>
                      </div>
                  </div>
            </div>

            <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="dob">Date of Birth</label>
                                <input type="text" name="dob" class="form-control">
                                <span class="error_firstname" required>Please enter a valid date</span>
                      </div>
                  </div>
            </div>

            <div class="form-group">
                  <input class="btn btn-default pull-right" data-toggle="collapse" name="next2"
                    data-parent="#accordion" href="#collapse3" value="Next >" id="next2" disabled>

                  <input class="btn btn-default pull-right" data-toggle="collapse"
                    data-parent="#accordion" href="#collapse1" value="< Prev" id="prev">
            </div>

        </div>
    </div>

</div>
