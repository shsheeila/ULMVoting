<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Bukti Foto Pemilih</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
                        <th>id-pengguna</th>
						<th>Nama User</th>
						<th>Username</th>
						<th>FOTO</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select c.nama_pengguna, c.username,v.id_bukti,v.id_pengguna,v.foto
              from tb_pengguna c join tb_bukti v on 
              c.id_pengguna=v.id_pengguna");
              while ($data= $sql->fetch_assoc()) {
            ?>
					<tr>
						<td>
                        <?php echo $no++; ?>
						</td>
                        <td>
                        <?php echo $data['id_pengguna'];?>
						<td>
							<?php echo $data['nama_pengguna']; ?>
						</td>
						<td>
							<?php echo $data['username']; ?>
						</td>
	
                        <td align="center">
							<img src="foto_bukti/<?php echo $data['foto']; ?>" width="150px" />
						</td>	
                        <td>
						<a href="?page=bukti-h&kode=<?php echo $data['id_pengguna']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
							</a>
						</td>
						
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->