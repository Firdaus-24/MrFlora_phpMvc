<div class="container">
    <div class="row">
        <div class="col text-center mt-3 mb-3">
            <h3>Daftar Barang</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mb-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalBarang">
                Tambah
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead class="bg-secondary text-light">
                    <tr>
                        <td>ID</td>
                        <td>Nama</td>
                        <td>Stok</td>
                        <td>Harga</td>
                        <td>Supplier</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['barang'] as $n) : ?>
                        <tr>
                            <td><?= $n['Brg_Id']; ?></td>
                            <td><?= $n['Brg_Name']; ?></td>
                            <td><?= $n['Brg_Harga']; ?></td>
                            <td><?= $n['Brg_Stok']; ?></td>
                            <td><?= $n['Brg_Stok']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalBarang" tabindex="-1" aria-labelledby="modalBarangLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBarangLabel">Form Tambah Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- content -->
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" require autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga" name="harga" require autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="stok" name="stok" require autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Supplier" class="col-sm-2 col-form-label">Supplier</label>
                    <select class="col-sm-10 form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <!-- end content -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>