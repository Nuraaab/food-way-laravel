<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Order</h6>
            {{-- <a href="">Show All</a> --}}
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Food Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentorder as $order)
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>{{$order->full_name}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->city}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->food_name}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td> 
                            @if ($order->status == "1")
                            Completed
                            @else
                            Pending...
                            @endif
                        </td>
                        <td> <form action="{{ route('complete_order', $order->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to alter this order?');">
                            @csrf
                            <input type="hidden" name="status" id="" value="{{$order->status}}">
                            @if ($order->status == "1")
                            <button type="submit" class="btn btn-sm btn-success">
                                UnComplete
                           </button>
                          @else
                          <button type="submit" class="btn btn-sm btn-success">
                            Complete
                       </button>
                            @endif
                           
                        </form></td>
                    </tr>
                    @endforeach
                  
                </tbody>
            </table>
        </div>
    </div>
</div>