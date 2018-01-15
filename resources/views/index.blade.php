@extends('app')


  @section('content')

<div class="container">

    <div class="panel-group" id="accordion">

      <form method="post" action="/storeform">

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
                                      <input type="tel" class="form-control" name="telephone" id="telephone">
                                      <span class="error_telephone" required>Please enter a valid uk number, i.e. 0xxxx xxx xxx</span>
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
                                      <input type="text" name="dob" id="dob" class="form-control">
                                      <span class="error_dob" required>Please enter a valid date, i.e. dd/mm/yyyy</span>
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





      <div class="panel panel-default panel3">

            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                      Step 3: Final Comments
                    </a>
                </h4>
            </div>

            <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">

                            <div class="col-md-6">
                                <div class="form-group">
                                     <div id="comment-message" class="form-row">
                                          <textarea class="form-control" name="comments" rows="6" placeholder="Please enter your comments" required></textarea>
                                      </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-default">Send Message</button>
                                </div>
                            </div>

                  </div>
            </div>

      </div>
    </form>

    </div>

</div>

  @endsection
