<x-header/>

<!-- main section -->
<section class="main_section py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 py-4">
                <h3>Add Customer
                    <a href="{{url('/')}}" class="btn btn-success btn-sm float-end">Home</a>
                </h3>
                <hr/>                
            </div>
        </div>

        <form action="{{url('/customer/create')}}" method="POST">
          @csrf  
        <div class="row">
            <div class="col-sm-12 pb-4 ">
                <label for="customer_name"> Customer Name</label>
                <input type="text" name="customer_name" id="customer_name" class="form-control" 
                placeholder="Type Customer Name">
            </div>

            <div class="col-sm-12 pb-4 ">
                <label for="customer_email"> Customer Email</label>
                <input type="text" name="customer_email" id="customer_email" class="form-control" 
                placeholder="Type Customer Email">
            </div>

            <div class="col-sm-12 pb-4 ">
                <label for="customer_phone"> Customer Phone</label>
                <input type="text" name="customer_phone" id="customer_phone" class="form-control" 
                placeholder="Type Customer Phone">
            </div>

            <div class="col-sm-12 pb-4 ">                
                <input type="submit" name="form_submit" id="form_submit" class="btn btn-dark" 
                value="Submit">
            </div>
        </div>
        </form>
    </div>
</section>

<x-footer/>