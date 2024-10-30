<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center" id="headerSummary1">
        <p class="card-title mt-2">Jumlah <b>Non ASN</b> Berdasarkan <b>Jenis Kelamin & Usia</b></p>
        <button class="btn fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#summary1" aria-expanded="false" aria-controls="summary1"><span class="bi bi-chevron-down"></span></button>
    </div>
    <div class="card-body collapse show" id="summary1">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" width="100%" align="center">
            <thead align="center" class="table-primary">
                <tr align="center" style="vertical-align: middle;">
                    <th class="text-primary" rowspan="2">No</th>
                    <th class="text-primary" rowspan="2">Usia</th>
                    <th class="text-primary" colspan="2">Jenis Kelamin</th>
                    <th class="text-primary" rowspan="2">Jumlah</th>
                </tr>
                <tr>
                    <th class="text-primary">Laki - Laki</th>
                    <th class="text-primary">Perempuan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $counter = 1;
                    foreach($non_asn as $row){
                        if($row['range'] === 'Jumlah') {
                ?>
                    <tr align="center">
                    <td class="bg-light fw-semibold text-capitalize" colspan="2">Jumlah</td>
                    <td><?= $row['male'] ?></td> 
                    <td><?= $row['female'] ?></td> 
                    <td><?= $row['total'] ?></td> 
                </tr>
                <?php } else { ?>
                <tr align="center">
                    <td><?= $counter++ ?></td>
                    <td><?= $row['range'] ?></td>
                    <td><?= $row['male'] ?></td>
                    <td><?= $row['female'] ?></td>
                    <td><?= $row['total']  ?></td>
                </tr>
                <?php }} ?>
            </tbody>
            </table>
        </div>
    </div>
</div>