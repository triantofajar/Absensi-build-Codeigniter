<h2>Daftar Siswa</h2>

<!-- pesan flash message start -->
<?php $flash_pesan = $this->session->flashdata('pesan')?>
<?php if (! empty($flash_pesan)) : ?>
    <div class="pesan">
        <?php echo $flash_pesan; ?>
    </div>
<?php endif ?>
<!-- pesan flash message end -->

<!-- pesan start -->
<?php if (! empty($pesan)) : ?>
    <div class="pesan">
        <?php echo $pesan; ?>
    </div>
<?php endif ?>
<!-- pesan end -->

<!-- pagination start -->
<?php if (! empty($pagination)) : ?>
    <div id="pagination">
        <?php echo $pagination; ?>
    </div>
<?php endif ?>
<!-- paginatin end -->

<!-- tabel data start -->
<?php if (! empty($tabel_data)) : ?>
        <?php echo $tabel_data; ?>
<?php endif ?>
<!-- tabel data end -->

<div id="bottom_link">
	<?php echo anchor('siswa/tambah/','Tambah', array('class' => 'add')) ?>
</div>