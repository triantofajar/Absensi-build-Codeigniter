<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" href="<?php echo base_url('asset/images/favicon.png');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/reset.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css');?>" />

    <title>Error 404: Halaman Tidak Ditemukan.</title>
</head>

<body>

    <div id="masthead">
        <?php $this->load->view('masthead'); ?>
    </div>

    <div id="main">
        <h2 id="error_header" class="error_header">Error 404</h2>
        <p class="error_content">Halaman Tidak Ditemukan.</p>
        <?php echo 'Kembali ke ' . anchor(base_url(),'halaman utama'); ?>
    </div>

    <div id="footer">
        <?php $this->load->view('footer'); ?>
    </div>

</body>
</html>