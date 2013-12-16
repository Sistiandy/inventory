<h1>Tambah Produk</h1>
<div class="form-tambah">

    <?php
    $this->load->helper('form');
    echo form_open('product/create');
    ?>
    <p>Nama Produk</p>
    <?php echo form_error('nama'); ?>
    <input type="text" name="nama" class="form-control" placeholder="Text input"><br>       
    <p>Spesifikasi</p>
    <input type="text" name="spesifikasi" class="form-control" placeholder="Text input"><br>
    <p>Harga</p>
    <?php echo form_error('harga'); ?>
    <input type="text" name="harga" class="form-control" placeholder="Text input"><br>
    <p>Kategori</p>
    <?php echo form_error('kategori'); ?>
    <select name="kategori" class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
    </select><br>
    <input type="submit" value="Tambah" class="btn btn-primary">
    <a href='<?= site_url('product'); ?>'><input type="button" value="Cancel" class="btn btn-default"></a>
    <button type="Reset" class="btn btn-default">Reset</button>
    <?php
    form_close();
    ?>
</div>