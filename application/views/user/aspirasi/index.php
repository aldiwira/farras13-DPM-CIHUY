<div class="box-centering">
	<div class="page-wrapper">
		<div class="page-content">
			<div style="margin-bottom: 30px;">
				<h1>Aspirasi</h1>
			</div>
			<div>
				<p>Untuk memberikan masukan, saran, maupun kritikan, anda dapat menuliskan pada form di bawah ini. Wajib menuliskan identitas anda seperti NIM, Kategori, Organisasi, dan pesan atau aspirasi yang ingin di sampaikan.</p>
			</div>
			<div class="box-centering">
				<div class="box-input">
					<form action="<?= base_url(); ?>aspirasi/sendAspirasi" method="post">
						<div class="form-group">
							<label for="Nama-input">Nama</label>
							<input type="text" name="nama_input" class="form-control form-content" id="nama-input" placeholder="Nama Lengkap" required>
						</div>
						<div class="form-group">
							<label for="nim-input">Nomer Induk Mahasiswa (NIM)</label>
							<input type="text" name="nim_input" class="form-control form-content" id="NIM-input" maxlength="10" placeholder="1*********" required>
						</div>
						<div class="form-group">
							<label for="Kategori-Input">Nama Organisasi Kemahasisawaan Intra</label>
							<select name="oki_input" class="form-control form-content" id="Kategori-input" required <option value="" selected>Pilih Nama Organisasi Kemahasisawaan Intra</option>
								<option value=""></option>
								<?php
								foreach ($oki as $key) { ?>
									<option value="<?= $key->OKI_ID ?>"><?= $key->OKI_NAMA ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="Kategori-Input">Kategori</label>
							<select name="kategori_input" class="form-control form-content" id="Kategori-input" required>
								<option value=""></option>
								<?php foreach ($kategori as $key) { ?>
									<option value="<?= $key->KAT_ID ?>"><?= $key->KAT_NAMA ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="aspirasi-input">Isi Aspirasi anda</label>
							<textarea name="aspirasi_input" class="form-control text-area-input" id="aspirasi-input" required></textarea>
						</div>
						<div class="box-centering">
							<button type="button" class="btn btn-outline-warning btn-input">Clear</button>
							<button type="submit" class="btn btn-primary btn-input">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>