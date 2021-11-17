<?= $this->extend('main/layout') ?>

<?= $this->section('judul') ?>
Form Tambah Kategori
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<!-- Data Kategori -->
<?= form_button('', '<i class="fa fa-arrow-left"></i> Kembali', [
    'class' => 'btn btn-warning',
    'onclick' => "location.href=('" . site_url('kategori/index') . "')"
]) ?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<?= form_open('kategori/simpandata') ?>

<div class="form-group">
    <label for="namakategori">Nama Kategori</label>
    <?= form_input('namakategori', '', [
        'class' => 'form-control',
        'id' => 'namakategori',
        'autofocus' => true,
        'placeholder' => 'Isi Nama Kategori'
    ]) ?>

    <?= session()->getFlashdata('errorNamaKategori'); ?>

</div>

<div class="form-group">
    <?= form_submit("", "Simpan", [
        'class' => 'btn btn-success'
    ]) ?>
</div>

<?= form_close(); ?>

<?= $this->endSection('isi') ?>