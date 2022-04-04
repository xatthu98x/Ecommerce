<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        td{
            padding:20px;
        }
    </style>
  </head>
  <body>
        
      <!-- partial -->
        @include('admin.sidebar')


        @include('admin.navbar')



        

        <!-- partial -->
            

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">



            @if(session()->has('message'))

                <div style="float:right; width:300px" class="alert alert-success">

                <button  type="button" class="close" data-dismiss="alert">x</button>

                {{session()->get('message')}}

                </div>

            @endif





                <table>

                <tr style="background-color:grey">

                    <td>Customer name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Product title</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Status</td>
                    <td>Action</td>
                    

                </tr>

                @foreach($order as $orders)

                <tr align="center" style="background-color:black">
                
                <td>{{$orders->name}}</td>
                <td>{{$orders->phone}}</td>
                <td>{{$orders->address}}</td>
                <td>{{$orders->product_name}}</td>
                <td>{{$orders->price}}</td>
                <td>{{$orders->quantity}}</td>
                <td>{{$orders->status}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('updatestatus', $orders->id)}}">
                        Delivered
                    </a>
                </td>
                </tr>

                @endforeach


                </table>

            </div>
        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>