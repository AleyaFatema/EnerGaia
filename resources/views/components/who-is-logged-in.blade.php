{{--@if(Auth::guard('web')->check())
    <p class="text-success">
        You are logged in as <strong>User</strong>
    </p>
@else
    <p class="text-danger">
        You are logged out as <strong>User</strong>
    </p>
@endif

@if(Auth::guard('admin')->check())
    <p class="text-success">
        You are logged in as <strong>Admin</strong>
    </p>
@else
    <p class="text-danger">
        You are logged out as <strong>Admin</strong>
    </p>
@endif--}}

@if(Auth::guard('admin')->check() || Auth::guard('web')->check())
    @if(isset($products))
        <h4>Products List</h4>
        <table class="table table-bordered table-striped" id="laravel_datatable">
            <thead>
            <tr>
                <th>S. No</th>
                <th>Name</th>
                <th>Product Code</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Vendor</th>
                <th>Supplier</th>
                <th>Description</th>
                <th>Date &amp;Time</th>
            </tr>
            </thead>
            <tbody>

            @foreach($products as $i => $product)
                <tr>
                    <td>{{ $i +1 }}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->product_code}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->vendor}}</td>
                    <td>{{ $product->suppliers->name }}</td>
                    <td>{{$product->decsription}}</td>
                    <td>{{$product->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@else
    <h2>Welcome</h2>
@endif
