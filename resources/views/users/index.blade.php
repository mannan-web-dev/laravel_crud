<x-master>
    <x-slot:title>
        User List
        </x-slot>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">User Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary" style="margin-right: 7px">Add</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">create</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather=""></span>
                   users
                </button>
            </div>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th>SL:</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mr X</td>
                    <td>
                        <a href="{{url('/users/1')}}">Show</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mr Y</td>
                    <td>
                        <a href="{{ route('user.show', ['id'=> 2]) }}">Show</a>
                    </td>
                </tr>
            </tbody>
        </table>

</x-master>
