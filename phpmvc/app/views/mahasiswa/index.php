<div class="container mt-3">
    <h1 class=display-6>Daftar Mahasiswa</h1>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">NRP</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['mhs'] as $m) : ?>
            <?php $no = 1;?>
                <tr>
                    <th scope="row"><?= $m['id'] ?></th>
                    <td><?= $m['nama'] ?></td>
                    <td><?= $m['nrp'] ?></td>
                    <td><?= $m['email'] ?></td>
                    <td><?= $m['jurusan'] ?></td>
                </tr>
            <?php $no+=1;?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>