<!DOCTYPE html>
<html lang="en">

<body id="page-top">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>

        <div class="wrapper">
            <div class="container">
                <div class="card-body">

                    <div class="table-responsive">
                        <form action="<?php echo site_url('Test/addAction') ?>" method="post" enctype="multipart/form-data">
                            <form>
                                <div class="form-group">
                                    <label for="name_customers">Name Customers</label>
                                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" placeholder="Enter name_customers">
                                    <small id="nama" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                <!-- </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="address">
                                </div>
                                <div class="form-group">
                                    <label for="tlp">Tlp</label>
                                    <input type="text" class="form-control" id="tlp" name="tlp" placeholder="tlp">
                                </div> -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- /#wrapper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>