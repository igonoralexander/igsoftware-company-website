@extends('../layouts/profmain')

@section('head')
	<title> Profile | My Orders </title>	
@endsection

@section('content')
           <!-- partial -->
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Orders</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr> 
                            <th> Tracking No </th>
                            <th> Total Price </th>
                            <th> Status </th>
                            <th> Payment Method </th>
                            <th> Date </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach ($myorders as $item)
                                <td> {{$item->tracking_id}} </td>
                                <td> ${{$item->total_price}} </td>
                                <td> <div class="badge badge-outline-warning">{{$item->status == '0' ? 'Pending' : 'Delivered' }}</div>  </td>
                                <td> {{$item->payment_method}} </td>
                                <td> {{date ('d-m-Y', strtotime ($item->created_at)) }} </td>
                                <td>
                                    <a href = "{{ route ('view-orders', $item->id) }}" > 
                                        <div class="badge badge-outline-success">View Details</div>
                                    </a>
                                </td>
                            @endforeach
                          </tr>
                      
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            
             
            </div>

            <div class="row">
             
             
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
@endsection