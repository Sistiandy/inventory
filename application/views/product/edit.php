<h1>Update Produk</h1>
<div class="form-tambah">

    <?php
    $this->load->helper('form');
    echo form_open('product/update');
    ?>
    <input type="hidden" name="id" value="<?php echo $barang['id']; ?>"
    <p>Nama Produk</p>
    <?php echo form_error('nama'); ?>
    <input type="text" name="nama" class="form-control" value="<?php echo $barang['nama']; ?>"><br>       
    <p>Spesifikasi</p>
    <input type="text" name="spesifikasi" class="form-control" value="<?php echo $barang['spesifikasi']; ?>"><br>
    <p>Harga</p>
    <?php echo form_error('harga'); ?>
    <input type="text" name="harga" class="form-control" value="<?php echo $barang['harga']; ?>"><br>
    <p>Kategori</p>
    <?php echo form_error('kategori'); ?>
    <select name="kategori" class="form-control">
        <option><?php echo $barang['kategori']; ?></option>
    </select><br>
    <input type="submit" value="Simpan" class="btn btn-primary">
    <a href='<?= site_url('product'); ?>'><input type="button" value="Cancel" class="btn btn-default"></a>
    <button type="Reset" class="btn btn-default">Reset</button>
    <?php
    form_close();
    ?>
</div>