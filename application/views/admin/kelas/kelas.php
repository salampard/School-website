<div class="col-md-12 nopadding-all marginTop60px">
	<table class="table table-bordered">
			<tr class="success">
				<td colspan="4"><h3 align="center">Kelas</h3></td>
			</tr>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th colspan="2" class="alignCenter">
					<a href="<?= base_url('adminKelas/insertKelas'); ?>"><span class="glyphicon glyphicon-plus"></span></a>
				</th>
			</tr>
			<?php  
				if($kelas) :
				$no = 1;
				foreach($kelas as $r) :
			?>
			<tr>
				<td width="10"><?= $no; ?></td>
				<td><?= $r->kelas; ?></td>
				<td  width="10"><a hover="blue" href="<?= base_url('adminKelas/editKelas/'.$r->kelas_id); ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
				<td  width="10"><a hover="red" href="<?= base_url('adminKelas/deleteKelas/'.$r->kelas_id); ?>"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
			</tr>
			<?php $no++; endforeach; else :?>
			<tr>
				<td colspan="4" class="notFound">Data kosong</td>
			</tr>
			<?php endif; ?>
	</table>
</div>