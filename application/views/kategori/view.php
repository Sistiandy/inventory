<body>
    <h1>Daftar Kategori</h1>
    <div>
        <div class="tombol-tambah">
            <a href='<?= site_url('kategori/create'); ?>'><img src="<?php echo base_url() ?>/media/images/add.png "></a>
        </div>
        <div id="table">
            <table class="table table-bordered" align="center">
                <tr class="info">
                    <td class="controls" id="no" align="center">No</td>
                    <td class="controls" id="nama" align="center">Nama</td>                    
                    <td class="controls" id="aksi" align="center">Aksi</td>
                </tr>
                <?php
                if (!empty($view_kategori)) {
                    $no = 1;
                    foreach ($view_kategori as $row) {
                        ?>
                        <tr class="isi">
                            <td id="no"><?php echo $no; ?></td>
                            <td id="nama"><?php echo $row->nama; ?></td>
                            <td id="action"> <a href="<?php echo site_url('kategori/update/'. $row->id); ?>"><img src="<?php echo base_url(); ?>media/images/edit-icon.png" /></a> | <a href="<?php echo site_url('kategori/delete/' . $row->id); ?>" onclick="return confirm('Apakah Anda Yakin?');"><img src="<?php echo base_url(); ?>media/images/delete.png" /></a></td>
                        </tr>
                        <?php
                        $no++;
                    }
                } else {
                            ?>
                        <tr id="row">
                            <td colspan="6" align="center">Data Kosong</td>
                        </tr>
                        <?
                        }
                        ?>   
                        
            </table>
        </div>
    </div>
</body>