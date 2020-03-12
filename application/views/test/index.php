<!DOCTYPE html>
<html lang="en">

<body id="page-top">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    </head>

    <body>

    <?php $this->load->view("layouts/nav_bar.php") ?>
        <div class="wrapper">
            <div class="container">
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>

                    <?php endif; ?>
                    <div class="container">
                        <a href="<?php echo site_url('Test/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-stripped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                    <!-- <th>Name Customers</th>
                                    <th>Address</th>
                                    <th>Tlp</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $customer) : ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $customer->id ?>
                                        </td>
                                        <td width="150">
                                            <?php echo $customer->nama ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo site_url('Test/edit/' . $customer->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i></a>

                                            <a href="<?php echo site_url('Test/delete/' . $customer->id) ?>" class="btn btn-small"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- /#wrapper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
</body>

</html>