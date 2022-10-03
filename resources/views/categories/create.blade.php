<x-master>


<x-slot:title>
       Create_category
        </x-slot>
<form action="{{route('categories.store')}}" method="POST">
   <!-- @csrf  -->
   @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name"  placeholder="Enter name">

  </div>

  <div class="form-check">
    <input name="is_active" type="checkbox" class="form-check-input" id="is_active">
    <label  class="form-check-label" for="is_active">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-master>