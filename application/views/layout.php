
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo base_url() ?>docs-assets/ico/favicon.png">

        <title>Inventory</title>


        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>media/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() ?>media/css/style.css" rel="stylesheet">

    </head>

    <body>
        <div class="container">
            <div class="header">
                    <ul class="nav nav-pills pull-right">
                        <li class="active"><a href="<?php echo site_url('home') ?>">Home</a></li>
                        <li><a href="<?php echo site_url('barang') ?>">Barang</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                    <h3 class="text-muted">App. Inventory</h3>
                </div>
                <hr>
            <div class="col-kiri">
                <?php isset($isi) ? $this->load->view($isi) : null; ?>
            </div>
            <div class="col-tengah">
                <?php isset($page) ? $this->load->view($page) : null; ?>
            </div>
            <div class="col-kanan">

            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
