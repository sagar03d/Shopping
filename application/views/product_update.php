<?php
include('header.php');
if($this->session->userdata('id')!=='')
$id = $this->session->userdata('id');
$res = $this->db->get_where('seller', array('id' => $id))->result_array();
  ?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="<?php echo base_url()?>/public/css/style1.css"/>
  <link rel="stylesheet" href="<?php echo base_url()?>/public/css/style2.css"/>

    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <div class="main">
    <div class="section1">
      <div class="spul">
      <ul>
<li><a href="http://localhost/Shopping/index.php/Shoppy/profile_view">Home</a></li>
<li><a href="#news">Edit Profile</a></li>
<li><a class="active" href="<?php echo base_url()?>index.php/Shoppy/seller_add_item">Add Item</a></li>
<li><a href="<?php echo base_url()?>index.php/Shoppy/analyze_seller">Analyze Account</a></li>
</ul>
</div>
      </div>


      <div class="section2">
  <?php
  if($this->session->userdata('id')!=='')
  $id = $this->session->userdata('id');
   ?>
	<div class="p_main">

    <h1>Add a Item for Sell</h1>
    <?php $a = $this->db->get('product','image')->result_array();
    foreach ($a as $value) {
      $id = $value['id'];
      echo $value['image']." ".$id;
      ?>
    <form action="<?php echo base_url()?>index.php/Shoppy/product_update/<?php echo $id?>" method="post" enctype="multipart/form-data">
    <center>
    <input type="file" placeholder="Image" name="img"><br>
    <input type="Submit" id="submit" name="submit" value="Insert">
    </center>
    </form>
    <?php
    }
    ?>

</div>
</div>


  <form action="<?php echo base_url()?>index.php/Shoppy/image_upload" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id="image_upload" style="display:none">
        <input type="submit" id="sub" name="sub" value="Upload" style="display:none">
      </form>

      <script>
    function ab(){
      $('#image_upload').click();
      $("#sub").css({ 'display': "block" });
    }
    </script>
    <style>
    .section1{
      float: left;
      margin-bottom: -40px;
    }

    .spul ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        border: 1px solid #555;
    }

    .spul li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
    }

  .spul  li {
        text-align: center;
        border-bottom: 1px solid #555;
    }

  .spul  li:last-child {
        border-bottom: none;
    }

  .spul  li a.active {
        background-color: #4CAF50;
        color: white;
    }

  .spul  li a:hover:not(.active) {
        background-color: #555;
        color: white;
    }

    </style>
  </body>

  <br>
<div class="footer">
  <?php
  include('footer.php');
   ?>
</div>
</html>
