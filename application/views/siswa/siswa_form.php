<?php
$form = array(
    'nis' => array(
        'name'=>'nis',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('nis', isset($form_value['nis']) ? $form_value['nis'] : '')
    ),
    'nama'    => array(
        'name'=>'nama',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('nama', isset($form_value['nama']) ? $form_value['nama'] : '')
    ),    
    'submit'   => array(
        'name'=>'submit',
        'id'=>'submit',
        'value'=>'Simpan'
    )
);
?>

<h2><?php echo $breadcrumb ?></h2>

<!-- pesan start -->
<?php if (! empty($pesan)) : ?>
    <div class="pesan">
        <?php echo $pesan; ?>
    </div>
<?php endif ?>
<!-- pesan end -->

<!-- form start -->
<?php echo form_open($form_action); ?>
	<p>
        <?php echo form_label('NIS', 'nis'); ?>
        <?php echo form_input($form['nis']); ?>
	</p>
	<?php echo form_error('nis', '<p class="field_error">', '</p>');?>
	
	<p>
        <?php echo form_label('Nama', 'nama'); ?>
        <?php echo form_input($form['nama']); ?>
	</p>
	<?php echo form_error('nama', '<p class="field_error">', '</p>');?>	

	<p>
        <?php echo form_label('Kelas', 'id_kelas'); ?>
        <?php echo form_dropdown('id_kelas', $option_kelas, set_value('id_kelas', isset($form_value['id_kelas']) ? $form_value['id_kelas'] : '')); ?>
	</p>
	<?php echo form_error('id_kelas', '<p class="field_error">', '</p>');?>

	<p>
		<?php echo form_submit($form['submit']); ?>
        <?php echo anchor('siswa','Batal', array('class' => 'cancel')) ?>
	</p>
<?php echo form_close(); ?>
<!-- form start -->

<?php
/* End of file siswa_form.php */
/* Location: ./application/views/kelas/siswa_form.php */
?>