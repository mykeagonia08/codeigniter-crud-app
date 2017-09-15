<html>
    <head>
        <title>CodeIgniter Tutorial</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="w3-light-grey">

        <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
            <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
            <span class="w3-bar-item w3-right">Logo</span>
        </div>

        <?php $this->load->view('templates/sidebar');?>
        
        <div class="w3-main" style="margin-left:300px;margin-top:43px;">