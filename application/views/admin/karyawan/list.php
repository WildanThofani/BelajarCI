<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>id</th>
										<th>Name</th>
										<th>Address</th>
										<th>number</th>
										
									</tr>
</thead>
<tbody>
<?php foreach ($karyawan as $karyawan): ?>
<tr>
    <td width="150">
       <?php echo $karyawan->karyawan_id;?>
    </td>

    <td width="150">
       <?php echo $karyawan->karyawan_name;?>
    </td>

    <td width="150">
       <?php echo $karyawan->karyawan_address;?>
    </td>

    <td width="150">
       <?php echo $karyawan->karyawan_number;?>
    </td>
</tr>
<?php endforeach; ?>