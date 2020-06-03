<div class="card card-primary">
  	<div class="card-header">
    	<h3 class="card-title">Input data pemilih</h3>
  	</div>
  	<div class="col-4">
	  <form role="form" method="post" action="<?php echo base_url('pemilih/simpan') ?>">
	    <div class="card-body">
	      <div class="form-group">
	        <label for="nik">NIK</label>
	        <input type="text" class="form-control" id="nik" name="nik" placeholder="Input NIK">
	      </div>
	      <div class="form-group">
	        <label for="nama">Nama</label>
	        <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
	      </div>
	      <div class="form-group">
	        <label for="alamat">Alamat</label>
	        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="2"></textarea>
	      </div>
	      <div class="form-group">
	        <label for="status">Status</label>
	        <select name="status" class="form-control" id="status">
	        	<option value="PELAPOR">PELAPOR</option>
	        	<option value="PEMILIH">PEMILIH</option>
	        </select>
	      </div>
	      <div class="form-group">
	        <label for="jorong">Jorong</label>
	        <input type="text" class="form-control" id="jorong" name="jorong" placeholder="Input Jorong">
	      </div>
	      <div class="form-group">
	        <label for="nagari">Nagari</label>
	        <input type="text" class="form-control" id="nagari" name="nagari" placeholder="Input Nagari">
	      </div>
	      <div class="form-group">
	        <label for="kecamatan">Kecamatan</label>
	        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Input Kecamatan">
	      </div>
	    </div>
	    <div class="card-footer">
	      <button type="submit" class="btn btn-primary">Submit</button>
	    </div>
	  </form>
	</div>
	<div class="col-12">
		<table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Jorong</th>
            <th>Nagari</th>
            <th>Kecamatan</th>
          </tr>
          </thead>
          <tbody>
	          <tr>
	            <td>Other browsers</td>
	            <td>All others</td>
	            <td>-</td>
	            <td>-</td>
	            <td>U</td>
	          </tr>
          </tbody>
        </table>
	</div>
</div>