<center class="kelasC"><h2>Program <span>Keahlian</span></h2></center>
<div class="container">
	<div class="kelas cf">
		<ul>
		<?php if($kelas) : foreach($kelas as $r) : ?>
			<li>
				<div class="col-md-4">
					<div class="logo">
						<?php if(!empty(trim($r->url_logo))) : ?>
						<img src="<?= $r->url_logo; ?>" alt="">
						<?php else: ?>
						<img src="<?= base_url('assets/img/noImage.png'); ?>">
						<?php endif; ?>
					</div>
					<div class="thumbnail">
					    <div class="caption">
					        <h3><?= $r->kelas; ?></h3>
					        <p><?= substr($r->keterangan, 0,100); ?> ...</p>
					        <a target="_blank" href="<?= base_url('kelas/kelasDetail/'.$r->kelas_id); ?>">Selengkapnya <span class="glyphicon glyphicon-arrow-right"></span></a>
					    </div>
					</div>
				</div>
			</li>
		<?php endforeach; endif; ?>
		</ul>

	</div>
</div>