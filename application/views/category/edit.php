<h1>Update Kategori Barang</h1>
<div class="form-tambah">
    <?php
    echo form_open('category/update');
    ?>
    <p>Nama Kategori</p>
    <?php echo form_error('nama'); ?>
    <input type="hidden" name="id" value="<?php echo $kategori['id'];?>">
    <input type="text" name="nama" class="form-control" value="<?php echo $kategori['nama'];?>"><br>       
    <input type="submit" value="Tambah" class="btn btn-primary">
    <a href='<?= site_url('category'); ?>'><input type="button" value="Cancel" class="btn btn-default"></a>
    <button type="Reset" class="btn btn-default">Reset</button>
    <?php
    form_close();
    ?>
</div>