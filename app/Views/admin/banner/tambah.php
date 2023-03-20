<?= $this->extend('admin/layout/index'); ?>
<?= $this->section('admin-content'); ?>


<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= base_url('data-banner'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Banner Baru</h1>
    </div>

    <?= $this->include('admin/layout/alert'); ?>

    <div class="section-body">
        <h2 class="section-title">Membuat item baru</h2>
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
                        <form action="/Admin/Banner/add" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="meta_text">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                                <div class="col-sm-12 col-md-7">
                                    <input class="form-control-file" id="images" type="file" name="image">
                                    <div style="display: flex;" id="preview-images"></div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" type="submit">Tambah</button>
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
                $("#preview-images").append("<img style='margin :10px;' src='" + URL.createObjectURL(event.target.files[i]) + "' height='200' width='auto'><br>");
            }
        });
    });
</script>
<?= $this->endSection(); ?>