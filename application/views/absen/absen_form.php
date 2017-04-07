<?php
$form = array(
    'nis' => array(
        'name'=>'nis',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('nis', isset($form_value['nis']) ? $form_value['nis'] : '')
    ),
    'tanggal'    => array(
        'name'=>'tanggal',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('tanggal', isset($form_value['tanggal']) ? $form_value['tanggal'] : ''),
        'onclick' => "displayDatePicker('tanggal')"
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
    <?php echo form_label('Tanggal (dd-mm-yyyy)', 'tanggal'); ?>
    <?php echo form_input($form['tanggal']); ?>
    <a href="javascript:void(0);" onclick="displayDatePicker('tanggal');"><img src="<?php echo base_url('asset/images/icon_calendar.png'); ?>" alt="calendar" border="0"></a>
</p>
<?php echo form_error('tanggal', '<p class="field_error">', '</p>');?>

<p>
    <?php echo form_label('Absen', 'absen'); ?>
    <?php echo form_radio('absen', 'S', set_radio('absen', 'S',isset($form_value['absen']) && $form_value['absen'] == 'S' ? TRUE : FALSE)); ?> ( Sakit )
    <?php echo form_radio('absen', 'I', set_radio('absen', 'I',isset($form_value['absen']) && $form_value['absen'] == 'I' ? TRUE : FALSE)); ?> ( Ijin )
    <?php echo form_radio('absen', 'A', set_radio('absen', 'A',isset($form_value['absen']) && $form_value['absen'] == 'A' ? TRUE : FALSE)); ?> ( Alpha )
    <?php echo form_radio('absen', 'T', set_radio('absen', 'T',isset($form_value['absen']) && $form_value['absen'] == 'T' ? TRUE : FALSE)); ?> ( Terlambat )
</p>
<?php echo form_error('absen', '<p class="field_error">', '</p>');?>

<p>
    <?php echo form_submit($form['submit']); ?>
    <?php echo anchor('absen','Batal', array('class' => 'cancel')) ?>
</p>
<?php echo form_close(); ?>
<!-- form end -->

<?php
/* End of file absen_form.php */
/* Location: ./application/views/kelas/absen_form.php */
?>