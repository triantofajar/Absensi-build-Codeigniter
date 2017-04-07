
<ul id="menu_tab">	
	<li id="tab_absen"><?php echo anchor('absen', 'Absensi Siswa');?></li>
	<li id="tab_rekap"><?php echo anchor('rekap', 'Rekap Absen Siswa');?></li>
	<li id="tab_siswa"><?php echo anchor('siswa', 'Daftar Siswa');?></li>
	<li id="tab_semester"><?php echo anchor('semester', 'Semester');?></li>
	<li id="tab_kelas"><?php echo anchor('kelas', 'Kelas');?></li>
	<li id="tab_logout"><?php echo anchor('logout', 'Logout', array('onclick' => "return confirm('Anda Yakin Keluar ?')"));?></li>
</ul>