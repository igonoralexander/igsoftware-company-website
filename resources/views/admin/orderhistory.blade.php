@extends('../layouts/admain')

@section('head')
<title> Admin - Pending Orders </title>
@endsection

@section('content')
           <!-- Recent Sales Start -->
           <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Pending Orders</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Order No</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $item)
                                    <tr>
                                        <td>{{date('d-m-Y', strtotime ($item->created_at))}}</td>
                                        <td>{{$item->tracking_id}}</td>
                                        <td>{{$item->total_price}}</td>
                                        <td>{{$item->status == '0' ? 'Pending' : 'Delivered'}} </td>
                                        <td><a class="btn btn-sm btn-primary" href="{{'/admin/orderdetails/'.$item->id}}">View Detail</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection