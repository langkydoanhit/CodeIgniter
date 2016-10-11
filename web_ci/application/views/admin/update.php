<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Register</title>
          <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>public/css/bootstrap.min.css">
          <style type="text/css" media="screen">
               form{
                    width: 500px;
                    margin: 50px auto ;
               }
               legend{
                    color: red ;
               }
               .error{
                    color: red;
               }
          </style>
          </style>
     </head>
     <body>
          
<form action="<?php echo base_url(); ?>user/update/<?php echo $user['id']; ?>" method="post" id="categories">
     <legend>ĐĂNG KÝ THÀNH VIÊN </legend>
     <div class="form-group">
          <label class="form-label">Username:<span class="req">*</span></label>
          <input type="text" class="form-control" name="username" value="<?php echo set_value('username')?>">
          <div class="error" ><?php echo form_error('username')?></div>
     </div>
     <div class="form-group">
          <label for="param_email" class="form-label">Email:<span class="req">*</span></label>
          <input type="text" class="form-control" name="email" value="<?php echo set_value('email')?>">
          <div class="error" ><?php echo form_error('email')?></div>
     </div>   
     <div class="form-group">             
          <label for="param_password" class="form-label">Mật khẩu:<span class="req">*</span></label>
          <input type="password" class="form-control"  name="password">
          <div class="error" ><?php echo form_error('password')?></div>
     </div>           
     <input type="submit" class="button" value="Đăng ký" name='submit'>
</form>
          <script src="<?php echo base_url() ?>public/js/jquery/jquery-1.11.2.min.js"></script>
          <!-- Bootstrap JavaScript -->
          <script src="<?php echo base_url() ?>public/js/vendo/bootstrap.min.js"></script>
     </body>
</html>