<x-header/>
<!-- main section -->
<section class="main_section py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <x-AlertMessage/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 py-5">
                <h3>Customer List
                    <a href="{{url('/customer/create')}}" class="btn btn-success btn-sm float-end">Add Customer</a>
                </h3>
                <hr class="pb-3"/>

                <table class="table table-secondary table-striped table-bordered ">
                    <tr>
                        <th>Coustomer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                    @if($all_customer)
                    @foreach($all_customer as $customer)
                    <tr>
                       <td>{{$customer->name}}</td>
                       <td>{{$customer->email}}</td>
                       <td>{{$customer->phone}}</td>
                       <td>
                        <a href="{{url('customer/edit/'.$customer->id)}}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{url('customer/delete/'.$customer->id)}}" class="btn btn-danger btn-sm" 
                        onclick="return confirm('Do you want to delete this data?');">Delete</a>
                       </td>
                    </tr>
                    @endforeach
                    @endif
                </table>
                
            </div>
        </div>
    </div>
</section>
<x-footer/>