
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

                <h3 class="text-muted">App. Inventory</h3>
            </div>
            <hr>
            <div class="col-kiri">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="<?php echo site_url('home') ?>">
                            <span class="badge pull-right"></span>
                            Home
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo site_url('barang/index') ?>">
                            Barang
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo site_url('kategori/index') ?>">
                            Kategori
                        </a>
                    </li>
                </ul>
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
