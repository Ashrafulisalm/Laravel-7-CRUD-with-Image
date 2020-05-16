<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <title>Contacts</title>
</head>
<body class="container">
<div class="card">
    <div class="card-header">
        Laravel CRUD with Image
    </div>
    <div class="card-body">
        <!--Edit Modal -->
        <div class="" id="editModal" tabindex="-1" role="dialog"  aria-hidden="">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{url('/contacts/update/'.$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name"  value="{{$data->name}}" placeholder="Enter Name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-md-12">
                                    <input type="email" name="email" value="{{$data->email}}"  placeholder="Enter Email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-md-12">
                                    <input type="number" name="phone" value="{{$data->phone}}" placeholder="Enter Phone" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-md-12">
                                    <textarea type="text" name="address" placeholder="Enter Address" class="form-control">{{$data->address}} </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Image</label>
                                <div class="col-md-12">
                                    <input type="hidden" name="Old_image" value="{{$data->image}}" placeholder="Enter Image" class="form-control">
                                    <input type="file" name="image" placeholder="Enter Image" class="form-control">
                                    <h6>{{$data->image}}</h6>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="card-footer text-muted">
        By Md. Adhraful Islam
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="{{asset('js/jQuery.js')}}"></script>
<script type="text/javascript"></script>
</body>
</html>
