<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/reset.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/calendar.css');?>" />
    <script type="text/javascript" src="<?php echo base_url('asset/js/calendar.js'); ?>"></script>

    <title><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></title>
</head>

<body id="<?php echo isset($modul) ? $modul : ''; ?>">

    <div id="masthead">
        <?php $this->load->view('masthead'); ?>
        
    </div>
        <br><br>
    <div id="navigation">
        <?php $this->load->view('navigation'); ?>
    </div>
        
    <div id="main">
        <?php $this->load->view($main_view); ?>
    </div>

    <div id="footer">
        <?php $this->load->view('footer'); ?>
    </div>

</body>
</html>