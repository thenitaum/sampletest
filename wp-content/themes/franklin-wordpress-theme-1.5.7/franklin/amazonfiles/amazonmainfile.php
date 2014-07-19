<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
</script>
<script type="text/javascript">
var themepath = '<?php echo get_template_directory_uri();?>';
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/amazonfiles/ama_functions.js">
</script>
<style>
.res-container {
	width: 165px;
	height: auto;
	border: 1px solid #cfcfcf;
	padding: 10px;
	text-align: center;
	float: left;
	margin-left: 10px;
	margin-top: 10px;
}
.res-container h2 {
	padding: 0px;
	margin: 0 0 10px 0;
	height: 75px;
}
.res-container h2 a {
	color: #000;
	font-size: 16px;
}
#search-bar {
	width: 100%;
	/*background: #d3d3d3;*/
	/*border-bottom: 1px solid #000;*/
	/*margin-bottom: 30px;*/
}
#search-bar input, select {
	width: 50%;
	font-size: 15px;
	font-weight: bold;
	border: 0px dashed #000;
	padding: 10px;
}
.browsepage input
{
	width: 50% !important;
}
#search-bar select {
	width: 57% !important;
}
#page {
	/*width: 20px !important;*/
}
#results, #search-bar {
/*padding-top: 20px;
      padding-left: 30px;*/
}
#search-link {
	font-size: 25px;
	font-weight: bold;
	display:inline;
}
#add-link {
	font-size: 25px;
	font-weight: bold;
	display:none;
}
span.caption {
	font-size: 15px;
	font-weight: bold;
	width: 34%;
	display:inline-block;
}
.divportion {
	width: 100%;
	height: 45px;
}
.divportion50 {
	width: 50%;
	height: 45px;
	float: left;
}
.maindatacontainer {
/*	background-color: #FFF;
		border:1px solid;*/	
}
</style>
<?php /*?><div class="maindatacontainer entry block entry-block"><?php */?>
  <div id="ajaxprocessing" style="display:none; text-align:center; margin-bottom:10px;"><img src="<?php echo get_template_directory_uri(); ?>/amazonfiles/processing.gif" /></div>
  <div id="search-bar">
    <div class="divportion">
      <div class="divportion50"> <span class="caption" style="margin-left: 2px !important">Search</span>
        <input type="text" name="search" id="search">
      </div>
      <div class="divportion50"> <span class="caption">Category</span>
        <select name="category" id="category">
          <!-- <option value="Blended">ALL</option>-->
          <option value="All">ALL</option>
          <option value="Books">Books</option>
          <option value="DVD">DVD</option>
          <option value="Apparel">Apparel</option>
          <option value="Automotive">Automotive</option>
          <option value="Electronics">Electronics</option>
          <option value="GourmetFood">GourmetFood</option>
          <option value="Kitchen">Kitchen</option>
          <option value="Music">Music</option>
          <option value="PCHardware">PCHardware</option>
          <option value="PetSupplies">PetSupplies</option>
          <option value="Software">Software</option>
          <option value="SoftwareVideoGames">SoftwareVideoGames</option>
          <option value="SportingGoods">SportingGoods</option>
          <option value="Tools">Tools</option>
          <option value="Toys">Toys</option>
          <option value="VHS">VHS</option>
          <option value="VideoGames">VideoGames</option>
        </select>
      </div>
    </div>
    <div class="divportion">
      <div class="divportion50"><span class="caption">Country</span>
        <select name="country" id="country">
          <?php /*?><option value="de">DE</option><?php */?>
          <option value="com">USA</option>
          <?php /*?><option value="co.uk">ENG</option>
          <option value="ca">CA</option>
          <option value="fr">FR</option>
          <option value="co.jp">JP</option>
          <option value="it">IT</option>
          <option value="cn">CN</option>
          <option value="es">ES</option><?php */?>
        </select>
      </div>
      <div class="divportion50"> <span class="caption">Browse page</span>
        <input type="text" name="page" class="browsepage" id="page" value="1">
      </div>
    </div>
    <div class="divportion" style="margin-top:20px;">
      <div class="divportion50"><a href="javascript:void(0)" class="button" id="search-link">Search</a> </div>
      <?php /*?><div class="divportion50"><a href="javascript:void(0)" class="button" id="add-link">Upload Selected</a> </div><?php */?>
    </div>
    <div style="clear:both;"> </div>
  </div>
  <hr/>
  <div id="ajaxprocessingproduct" style="display:none; text-align:center; margin-bottom:10px;"><img src="<?php echo get_template_directory_uri(); ?>/amazonfiles/processing.gif" /></div>
  <div id="results"></div>
  <div style="clear:both;"></div>
<?php /*?></div><?php */?>
