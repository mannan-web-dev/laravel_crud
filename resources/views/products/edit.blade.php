<x-master>
    <x-slot:title>
          Create Prod
            </x-slot>
            <form  action="{{route('products.update', $productedit->id)}}" method="POST">
           @method('patch')
            @csrf
  <div class="form-group">
    <label for="name">name</label>
    <input name="id_name" type="text" class="form-control" id="name"  placeholder="Enter Name"
    value="{{$productedit->id_name}}">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input name="address" type="text" class="form-control" id="address"  placeholder="Enter address"
    value="{{$productedit->address}}">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input name="phone" type="number" class="form-control" id="phone"  placeholder="Enter phone"
    value="{{$productedit->phone}}">
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input name="email" type="email" class="form-control" id="email"  placeholder="Enter email"
    value="{{$productedit->email}}">

  </div>
  <div class="form-group">
    <label for="department">Department</label>
    <input name="department" type="text" class="form-control" id="department"  placeholder="Enter department"
    value="{{$productedit->department}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </x-master>
