<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-md mt-4">
    <h2>Tambah Data</h2>
    <form>
        <div class="mb-3">
            <label for="judulVideo" class="form-label">Judul video</label>
            <input type="text" class="form-control" id="judulVideo" aria-describedby="judulHelp">
        </div>
        <div class="mb-3">
            <label for="namaChannel" class="form-label">Nama channel</label>
            <input type="text" class="form-control" id="namaChannel" aria-describedby="namachannelHelp">
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3">URL</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Select category</option>
            <option value="programming">Programming</option>
            <option value="west-songs">West songs</option>
            <option value="japanese-songs">Japanese songs</option>
        </select>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection(); ?>