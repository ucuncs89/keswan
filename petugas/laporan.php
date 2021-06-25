<?php $thisPage = "Laporan"; ?>
<?php include 'header.php'; ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">list</i> </a>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Pilih Data Laporan</a></h4>
                                    <div class="toolbar">
                                    <form method="Post" name="pilihlaporan">
                                    <div class="form-group">
                                        <label class="control-label">Jenis Laporan Layanan<small>*</small></label>
                                        <select class="form-control" name="jenis_laporan"  required="true" aria-required="true">
                                            <option value="kesehatan">Periksa Kesehatan Hewan</option>
                                            <option value="inseminasi">Inseminasi Buatan</option>
                                            <option value="kelahiran">Periksa Kelahiran Buatan</option>
                                            <option value="vaksinasi">Vaksinasi</option>
                                        </select>
                                        <span class="material-input"></span>
                                        <div class="form-group">
                                        <label class="control-label">Dari Tanggal<small>*</small></label>
                                        <input type="date"name="dari_tanggal" required="required" aria-required="true" class="form-control">
                                        <span class="material-input"></span>
                                        <div class="form-group">
                                        <label class="control-label">Sampai Tanggal<small>*</small></label>
                                        <input type="date"name="sampai_tanggal" required="required" aria-required="true" class="form-control">
                                        <span class="material-input"></span>
                                        <div class="pull-right">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    </form>         
                                    </div>
                                    
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
<?php include 'footer.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $jenis_laporan = $_POST['jenis_laporan'];
    $dari_tanggal = $_POST['dari_tanggal'];
    $sampai_tanggal = $_POST['sampai_tanggal'];
    if ($jenis_laporan=='kesehatan') {
echo("<script language='javascript'>
    window.location.href='printkesehatan.php?id_petugas=$id_petugas&dari_tanggal=$dari_tanggal&sampai_tanggal=$sampai_tanggal';
    </script>");
    }
    if ($jenis_laporan=='inseminasi') {
echo("<script language='javascript'>
    window.location.href='printinseminasi.php?id_petugas=$id_petugas&dari_tanggal=$dari_tanggal&sampai_tanggal=$sampai_tanggal';
    </script>");
    }
    if ($jenis_laporan=='kelahiran') {
echo("<script language='javascript'>
    window.location.href='printkelahiran.php?id_petugas=$id_petugas&dari_tanggal=$dari_tanggal&sampai_tanggal=$sampai_tanggal';
    </script>");
    }
    if ($jenis_laporan=='vaksinasi') {
echo("<script language='javascript'>
    window.location.href='printvaksinasi.php?id_petugas=$id_petugas&dari_tanggal=$dari_tanggal&sampai_tanggal=$sampai_tanggal';
    </script>");
    }

}
?>