<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('laporan/cetak_laporan_pinjam'); ?>" class="btn btn-primary mb-3"><i
                    class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('laporan/laporan_pinjam_pdf'); ?>" class="btn btn-warning mb-3"><i
                    class="far fa-file-pdf"></i> Bownload PDF</a>
            <a href="<?= base_url('laporan/export_excel_pinjam'); ?>" class="btn btn-success mb-3"><i
                    class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Anggota</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role id</th>
                </thead>
                <tbody>
                    <?php
 $a = 1;
 foreach ($user as $l) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $l['nama']; ?></td>
                        <td><?= $l['alamat']; ?></td>
                        <td><?= $l['email']; ?></td>
                        <td><?= $l['role_id']; ?></td>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->