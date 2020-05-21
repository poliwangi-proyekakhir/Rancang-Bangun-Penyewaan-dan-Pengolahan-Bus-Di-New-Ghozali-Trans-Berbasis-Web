<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="nf-jenis_laporan" class=" form-control-label">Tanggal</label>
                            <input type="text" id="tanggal" name="tanggal" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="nf-jenis_laporan" class=" form-control-label">Jenis Laporan</label>
                            <select name="jenis_laporan" id="jenis_laporan" class="form-control">
                                <option value="1">Pengeluaran</option>
                                <option value="2">Pemasukan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>No.</th>
                            <th>Tanggal Transaksi</th>
                            <th>Jenis Pengeluaran</th>
                            <th>Jumlah Biaya</th>
                            <th>Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>12 Mei 2020</td>
                            <td>Tagihan listrik</td>
                            <td class="text-right">1,000,000</td>
                            <td class="text-right">30,000,000</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>13 Mei 2020</td>
                            <td>Tagihan Air</td>
                            <td class="text-right">1,500,000</td>
                            <td class="text-right">28,500,000</td>
                            </tr>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Jumlah Total</td>
                                <td class="text-right">28,500,000</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
