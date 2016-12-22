<script type="text/javascript"> 
      $(document).ready(function(){
	  		// untuk permulaan, tampilkan content nomor 1 '#slideAwal'
	  		bukaContent($('#slideAwal'),'div1');	
				
	    });
	  </script>	
	  
      <a href="javascript:;" onClick="bukaContent(this,'div1')" id="slideAwal">.</a>
      <a href="javascript:;" onClick="bukaContent(this,'div2')">.</a>
      <a href="javascript:;" onClick="bukaContent(this,'div3')">.</a>
      <a href="javascript:;" onClick="bukaContent(this,'div4')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div5')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div6')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div7')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div8')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div9')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div10')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div11')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div12')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div13')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div14')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div15')">.</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div16')">.</a>
   
<div class="konten">
     <div class="slider">
	 
	 <div id="divContent">
      <div id="div1">
 	     
 	     <img src="<?php echo base_url(); ?>assets/images/shila.jpg" align="left" /> 

      </div>
      <div id="div2">
 	    
 	     <img src="<?php echo base_url(); ?>assets/images/amzah.jpg" align="left" /> 

      </div>
      <div id="div3">
 	     
 	     <img src="<?php echo base_url(); ?>assets/images/amzah.jpg" align="left" /> 

      </div>
      <div id="div4">
 	  
 	     <img src="<?php echo base_url(); ?>assets/images/shila.jpg" align="left" />

      </div>
	  <div id="div5">
 	     
 	     <img src="<?php echo base_url(); ?>assets/images/amzah.jpg" align="left" /> 

      </div>
      <div id="div6">
 	    
 	     <img src="<?php echo base_url(); ?>assets/images/shila.jpg" align="left" /> 

      </div>
      <div id="div7">
 	     
 	     <img src="<?php echo base_url(); ?>assets/images/amzah.jpg" align="left" /> 

      </div>
      <div id="div8">
 	  
 	     <img src="<?php echo base_url(); ?>assets/images/shila.jpg" align="left" />

      </div>
	  <div id="div9">
 	     
 	     <img src="<?php echo base_url(); ?>assets/images/amzah.jpg" align="left" /> 

      </div>
      <div id="div10">
 	    
 	     <img src="<?php echo base_url(); ?>assets/images/shila.jpg" align="left" /> 

      </div>
      <div id="div11">
 	     
 	     <img src="<?php echo base_url(); ?>assets/images/amzah.jpg" align="left" /> 

      </div>
      <div id="div12">
 	  
 	     <img src="<?php echo base_url(); ?>assets/images/shila.jpg" align="left" />

      </div>
	  <div id="div13">
 	     
 	     <img src="<?php echo base_url(); ?>assets/images/amzah.jpg" align="left" /> 

      </div>
      <div id="div14">
 	    
 	     <img src="<?php echo base_url(); ?>assets/images/shila.jpg" align="left" /> 

      </div>
      <div id="div15">
 	     
 	     <img src="<?php echo base_url(); ?>assets/images/amzah.jpg" align="left" /> 

      </div>
      <div id="div16">
 	  
 	     <img src="<?php echo base_url(); ?>assets/images/shila.jpg" align="left" />

      </div>
	 </div>
	 </div>
        <div class="anggota">
       <h3>Berita terbaru</h3>
       <!-- tampilkan list update terbaru  --->
       <ul>
        <?php foreach($artikel as $list) { ?> <!---menampilkan semua isi dari artikel -->
        <li><a href="<?php echo base_url() ?>home/read/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a></li>
        <?php } ?>
      </ul>
 
      <p>&nbsp;</p>
        <p>
        </p>
              </div>
</div>
    <!-- konten bawah -->
  <div class="clearfix"></div>
    <div class="konten">
      <div class="posting">
        <h3>Artikel terbaru</h3>
        
        <?php foreach ($artikel as $list) { ?>
          <div class="ringkasan">
            <h3><a href="<?php echo base_url() ?>home/read/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a></h3>
            <?php echo $list['ringkasan']; ?>
          </div>
        <?php } ?>
 
      </div>
	  <div class="anggota">
	  <h3>Fokus</h3>
	  <img src="<?php echo base_url(); ?>assets/images/shila.jpg" width="350" height="250">
	  </div>
      
</div> <!-- END KONTEN BAWAH -->