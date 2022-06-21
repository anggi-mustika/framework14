<div class="container p-5">
    <a href="<?= base_url('cv_dua');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit CV : </h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('cv_dua/update');?>">
                <div class="form-group">
                    <label for="">Nama </label>
                    <input type="text" value="" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="" name="alamat" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">TTL</label>
                    <input type="text" value="" name="TTL" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Hobi</label>
                    <input type="text" value="" name="hobi" required class="form-control">
                </div>
                <input type="hidden" value="" name="id">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>