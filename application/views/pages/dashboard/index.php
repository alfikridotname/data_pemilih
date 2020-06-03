<!-- Default box -->
<div class="card">
  <div class="card-body">
    Selamat Datang <?php echo $this->session->userdata('nama'); ?>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
<div class="row">
	<div class="col-3">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?php echo $jml; ?></h3>

            <p>Data Pemilih</p>
          </div>
          <div class="icon">
            <i class="icon ion-ios-people-outline"></i>
          </div>
        </div>
      </div>

      <div class="col-3">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?php echo $jml_pelapor; ?></h3>

            <p>Data Pelapor</p>
          </div>
          <div class="icon">
            <i class="icon ion-ios-people-outline"></i>
          </div>
        </div>
      </div>

</div>