@extends('../layouts/admain')

@section('head')
<title> Admin - All Users </title>
@endsection

@section('content')
           <!-- Recent Sales Start -->
           <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">All Users</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Id</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Mobile No</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->fullname}}</td>
                                        <td>{{$item->mobileno}}</td>
                                        <td>{{$item->email}}</td>
                                        <td><a class="btn btn-sm btn-primary" href="{{ '/singleuser/'.$item->id}}">View Detail</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection