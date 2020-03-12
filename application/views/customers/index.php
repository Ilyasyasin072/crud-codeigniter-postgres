<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <title>Customers</title>
</head>

<body>
    <?php $this->load->view("layouts/nav_bar.php") ?>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Customers</th>
                            <th>Alamat</th>
                            <th>Nomor Tlp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($customers as $customer) { ?>
                            <tr>
                                <td><?= $customer->id; ?></td>
                                <td><?= $customer->name_customers ?></td>
                                <td><?= $customer->address ?></td>
                                <td><?= $customer->tlp ?></td>
                                <td>
                                    <a href="<?php echo site_url('Customer/edit/'. $customer->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo site_url('Test/delete/') ?>" class="btn btn-small"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <? } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <form action="<?php echo site_url('Customer/addAction') ?>" method="post">
                    <div class="card" style="width: 34rem;">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_customer_id">Nama Customers</label>
                                <input type="text" class="form-control" id="nama_customer_id" name="name_customers" aria-describedby="emailHelp" placeholder="Nama Customers">
                            </div>
                            <div class="form-group">
                                <label for="address_id">Address</label>
                                <input type="text" class="form-control" id="address_id" name="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label for="tlp_id">Nomor Handphone</label>
                                <input type="text" class="form-control" id="tlp_id" name="tlp" placeholder="Address">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>

</html>