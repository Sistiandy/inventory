<h1>Tambah Kategori Barang</h1>
<div class="form-tambah">
    <?php
    $this->load->helper('form');
    echo form_open('kategori/create');
    ?>
    <p>Nama Kategori</p>
    <?php echo form_error('nama'); ?>
    <input type="text" name="nama" class="form-control" placeholder="Text input"><br>       
    <input type="submit" value="Tambah" class="btn btn-primary">
    <a href='<?= site_url('barang'); ?>'><input type="button" value="Cancel" class="btn btn-default"></a>
    <button type="Reset" class="btn btn-default">Reset</button>
    <?php
    form_close();
    ?>
</div>