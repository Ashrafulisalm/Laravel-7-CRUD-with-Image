<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Contacts</title>
</head>
<body class="container">
<div class="card text-center">
    <div class="card-header">
        Laravel CRUD with Image
        <!-- Button trigger modal -->
        <button type="button" style="float: right" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#contactModal">
            Create Contact
        </button>

    </div>
    <div class="card-body">
        <table class="table ">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{$row->contact->id}}</td>
                        <td>{{$row->contact->name}}</td>
                        <td>{{$row->contact->email}}</td>
                        <td>{{$row->contact->phone}}</td>
                        <td>{{$row->contact->address}}</td>
                        <td><img src="{{\Illuminate\Support\Facades\URL::to($row->image)}}" width="80" height="100"></td>
                        <td>
                            <a href="{{url('')}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{url('')}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="card-footer text-muted">
        By Md. Adhraful Islam
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{url('/contact/add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-md-12">
                            <input type="text" name="name"  placeholder="Enter Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-md-12">
                            <input type="email" name="email"  placeholder="Enter Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Phone</label>
                        <div class="col-md-12">
                            <input type="number" name="phone"  placeholder="Enter Phone" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Address</label>
                        <div class="col-md-12">
                            <textarea type="text" name="address"  placeholder="Enter Address" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Image</label>
                        <div class="col-md-12">
                            <input type="file" name="image"  placeholder="Enter Image" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="{{asset('js/jQuery.js')}}"></script>
</body>
</html>
