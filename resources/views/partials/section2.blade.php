
<div class="panel panel-default panel2">

      <div class="panel-heading">
          <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
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
                      </div>
                  </div>
            </div>

            <div class="form-group">
                  <button class="btn btn-default pull-right" id="next2" data-toggle="collapse"
                    data-parent="#accordion" href="#collapse3">Next >
                  </button>
            </div>

        </div>
    </div>

</div>
