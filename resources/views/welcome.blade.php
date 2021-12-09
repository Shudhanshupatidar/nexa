<!DOCTYPE html>
<html>

<head>
    <title>Import Export</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
 

</head>

<body>
    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                Import Export Testing
            </div>
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import Data</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export Data</a>

                </form>
            </div>
        </div>

<div class="my-2 py-3"></div>

        <table id="table" class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Name</th>
            <th class="text-center">Age</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Mobile</th>
            <th class="text-center">Address</th>
            <th class="text-center">Waard No</th>
            <th class="text-center">Disease</th>
        </tr>
    </thead>
    <tbody>

    @foreach($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->age }}</td>
            <td>{{ $item->gender }}</td>
            <td>{{ $item->mobile }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->ward_no }}</td>
            <td>{{ $item->disease }}</td>
        </tr>
        @endforeach

    </tbody>
</table>


    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>

</html>