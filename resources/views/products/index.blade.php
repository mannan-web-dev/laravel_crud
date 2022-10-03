<x-master>
    <x-slot:title>
           Product_list
            </x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Product List</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>


                    <a href="{{route('products.create')}}">
                    <button type="button" class="btn btn-sm btn-outline-secondary ">
                        <span data-feather="plus"></span>
                       Add New
                    </button>
                    </a>
                </div>
            </div>




            <div class="container mt-3">
      <table class="table table-bordered table-sm">

     @if (session('message'))
      <p  class="text-success">
     {{session('message')}}
      </p>
      @endif

        <thead>
          <tr>
            <th>SL</th>
            <th>name</th>
            <th>Address</th>
            <th>Cell Phone</th>
            <th>Eamil</th>
            <th>Department</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
 @php $id=1 @endphp
   @foreach ($pdata as $Product )

          <tr>
            <td>{{$id++}}</td>
            <td>{{$Product->id_name}}</td>
            <td>{{$Product->address}}</td>
            <td>{{$Product->phone}}</td>
            <td>{{$Product->email}}</td>
            <td>{{$Product->department}}</td>
        <td>
            <a  class="btn btn-info" href="{{route ('products.show', ['id'=> $Product->id])}}">Show</a>

         <a class="btn btn-info" href="{{route ('products.edit', ['id'=>$Product->id])}}">Edit</a>


            <a class="btn btn-info" href="{{route ('products.delete', ['id'=>$Product->id])}}">Delete</a>

          </td>
          </tr>

          @endforeach

        </tbody>


      </table>
    </div>


    </body>
    </html>


    </x-master>
