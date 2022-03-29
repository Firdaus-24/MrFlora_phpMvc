<div class="container">
    <div class="row">
        <div class="col">
            <h3>Daftar Barang</h3>
            <ul>
                <?php foreach ($data['Brg_Nama'] as $n) : ?>
                    <li><?= $n['Brg_Nama']; ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>