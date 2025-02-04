<?= $this->extend('admin/layout/index'); ?>
<?= $this->section('admin-content'); ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= base_url('data-barang'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Barang</h1>
    </div>

    <?= $this->include('admin/layout/alert'); ?>

    <div class="section-body">
        <h2 class="section-title">Edit Item</h2>
        <p class="section-lead">
            Di halaman ini Anda dapat membuat item baru dan mengisi semua bidang.
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Menulis item</h4>
                    </div>
                    <div class="card-body">
                        <form action="/Admin/Barang/edit" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <?php echo form_hidden('id', $barang['id']); ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="nama" value="<?= $barang['nama']; ?>">
                                </div>
                            </div>
                            <div class=" form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote-simple" name="deskripsi" style="display: none;"><?= $barang['deskripsi']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="harga" value="<?= $barang['harga']; ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="kategori_id" class="form-control">
                                        <!-- Looping data tabel -->
                                        <option>Kategori barang...</option>
                                        <?php foreach ($kategori as $key) : ?>
                                            <option value="<?= $key['id']; ?>"><?= $key['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class=" form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="stok" value="<?= $barang['stok']; ?>">
                                </div>
                            </div>
                            <div class=" form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Berat</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="berat" value="<?= $barang['berat']; ?>">
                                </div>
                            </div>
                            <div class=" form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="d-flex flex-wrap">
                                        <?php foreach ($gambar as $key) : ?>
                                            <img style="width: 140px; margin:0 20px 10px 0; height: 140px;" src="<?= base_url(); ?>/img/<?= $key['nama']; ?>" alt="">
                                        <?php endforeach; ?>
                                    </div>
                                    <input class="form-control-file" id="images" type="file" name="images[]" multiple>
                                    <div style="display: flex;" id="preview-images"></div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary  mr-3" type="submit">Simpan</button>
                                    <a href="<?= base_url('data-barang'); ?>" class="btn btn-secondary">Kembali</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>

<?= $this->section('admin-script'); ?>
<script>
    $(document).ready(function() {
        $("#images").change(function() {
            $("#preview-images").empty();
            var total_file = document.getElementById("images").files.length;
            for (var i = 0; i < total_file; i++) {
                $("#preview-images").append("<img style='margin:10px 20px 10px 0;' src='" + URL.createObjectURL(event.target.files[i]) + "' height='140' width='140'><br>");
            }
        });
    });
</script>
<?= $this->endSection(); ?>