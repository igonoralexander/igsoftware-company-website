@extends('../layouts/profmain')

@section('head')
	<title> Profile | Dashboard </title>	
@endsection

@section('content')
            <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> </h3>
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            <div class="row">

              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Please Complete Profile</h4>
                    <form method = "POST" action = "{{route('address-details')}}" lass="form-sample">
                        @csrf

                        <p class="card-description"> Personal info </p>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                              <input type="text" name = "fullname" value = "{{$data->fullname}}" class="form-control" />
                            </div>
                          </div>
                        </div>

                        <input type="hidden" name = "register_user_id" value = "{{$data->id}}" class="form-control" />

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone No </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name = "mobileno" value = "{{$data->mobileno}}">
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" name = "email" value = "{{$data->email}}" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Username </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name = "username" value = "{{$data->username}}">
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                              <select name = "gender" class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input class="form-control" name = "dob" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>

                      <p class="card-description"> Delivery Address </p>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-1 col-form-label">Address</label>
                            <div class="col-sm-11">
                              <input type="text" name = "address" placeholder = "Enter Address" class="form-control" />
                            </div>
                          </div>
                        </div>
                      
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State </label>
                            <div class="col-sm-9">
                              <input type="text" name = "state" class="form-control" />
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" name = "city" class="form-control" />
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="row">
                       
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                                <input type="text" name = "country" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection