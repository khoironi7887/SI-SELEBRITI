<header>
 <div class="akun"><a href="<?php echo base_url(); ?>admin/dashboard/config" title="Update Konfigurasi"><img src="<?php echo base_url(); ?>assets/images/amzah.jpg" width="16" height="16">Anda Tahu ?</a></div>
 <div class="akun"><a href="<?php echo base_url(); ?>admin/update" title="Update Profil"><img src="<?php echo base_url(); ?>assets/images/img/user_red.png" width="16" height="16"> <?php echo $this->session->userdata('username') ?></a></div> 
 <div class="akun"><a href="<?php echo base_url(); ?>admin/login/logout" title="Logout disini"><img src="<?php echo base_url(); ?>assets/images/img/delete.png" width="16" height="16"> Logout</a></div>
 <div class="home"><a href="<?php echo base_url(); ?>" title="Beranda"><img src="<?php echo base_url(); ?>assets/images/img/house_go.png" width="16" height="16">Beranda</a></div>
</header>
<!-- End Header -->