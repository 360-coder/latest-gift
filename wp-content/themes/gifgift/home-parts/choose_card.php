<?php 
//$platformName = 'GifGiftCard_Test'; // RaaS v2 API Platform Name Test
//$platformKey = 'CDyCRNeJOjRfNOJIxwr$wadcE?&GLI@yPMBdSyJySSloQR';

//$platformName = 'gifgift'; // RaaS v2 API Platform Name // Previous Development Platform Identifier
//$platformKey = 'DtVQvvkHlZogP&nGMhnaDFslrlCxKCDpyNm@QcwLkAq'; // Previous Development Platform Key

$platformName = 'gifgift'; // RaaS v2 API Platform Name
$platformKey = 'yOVufLQoFBKOsAfScBXkqNlImWVTTqU!?VNNVCxolaZvHmA'; // RaaS v2 API Platform Key

$client = new RaasLib\RaasClient($platformName, $platformKey);

$catalog = $client->getCatalog();
$results = $catalog->getCatalog();
//echo "<pre>"; print_r($results);
?>



<section class="card-tabs">
 <!-- <section class="gif-tabs card-tabs diff1"> -->
	<?php $post_card = get_terms('post_card'); // get all the post_card



	 ?>
 

	<!-- Tab panes -->
	<div class="tab-content">
 
	<!--	$cars = array(array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );-->
 
		<div class="tab-pane active diff1" id="style-row-seq">    <!--  #800-flowers amazon american-express best-buy game-stop toys-r-us-->
				
				<div class="col-md-12">	
				 
			<?php
			$counter = 1;
			//$brands = array('Amazon','Apple iTunes','Google Play', 'Starbucks','GameStop', 'Best Buy', 'The Home Depot®', 'Gap','Toys', 'Bed Bath & Beyond®', 'Target', 'Old Navy','Barnes & Noble', 'Foot Locker', 'Lowe\'s','Athleta', 'Dick\'s Sporting Goods','Old Navy', 'Banana Republic','L.L.Bean', 'Old Navy','Pottery Barn®', 'Sephora');
			$brands = array();
			$brands = array(array('brands'=>'B916708','prices'=>'25, 50, 75','min'=> '5'),
							array('brands'=>'B891734','prices'=>'5, 10, 15, 20, 25, 50'),
							array('brands'=>'B985731','prices'=>'10, 15, 25, 50, 100'),
							//array('brands'=>'B793513','prices'=>'25, 50, 75','min'=> '5'),
							array('brands'=>'B076101','prices'=>'25, 50, 75','min'=> '5'),
							array('brands'=>'B265539','prices'=>'25, 50, 75','min'=> '5'),
							array('brands'=>'B617220','prices'=>'25, 50, 75','min'=> '5'),
							array('brands'=>'B585681','prices'=>'25, 50, 75','min'=> '10'),
							array('brands'=>'B046367','prices'=>'5, 10, 25, 50, 100'),
							array('brands'=>'B278976','prices'=>'25, 50, 75', 'min'=> '5'),
							array('brands'=>'B435912','prices'=>'25, 50, 75','min'=> '5'),
							array('brands'=>'B768241','prices'=>'25, 50, 75','min'=> '10'),
							array('brands'=>'B313020','prices'=>'25, 50, 75', 'min'=>'5'),
							array('brands'=>'B317391','prices'=>'25, 50'),
							array('brands'=>'B707298','prices'=>'10, 25, 50'),
							array('brands'=>'B433461','prices'=>'25, 50, 75','min'=> '10'),
							array('brands'=>'B331538','prices'=>'25, 50, 100'),
							array('brands'=>'B689017','prices'=>'25, 50, 75','min'=> '10'),
							array('brands'=>'B401839','prices'=>'25, 50, 75'),
							array('brands'=>'B718152','prices'=>'25, 50, 75','min'=> ' 25'),
							array('brands'=>'B421810','prices'=>'25, 50, 75','min'=> '5'),
							array('brands'=>'B672951','prices'=>'25, 50, 75','min'=> '5'),
							array('brands'=>'B663882','prices'=>'25, 50, 75','min'=> '5'),
							array('brands'=>'B209069','prices'=>'25, 50, 75','min'=> '5'),
							array('brands'=>'B230865','prices'=>'25, 50, 75','min'=> '5'));
							
		foreach ($brands as $b) {			
			foreach ($results as $key => $value) {			
				foreach ($value as $key1 => $value1) {							
					if (strpos($value1->brandKey, $b['brands']) !== false) {
						$new =$value1->imageUrls;						
						/*$faceValue = array();
						$minValue = array();
						foreach ($value1->items as $face) {
							$faceValue[].= $face->faceValue;
							$minValue[].= $face->minValue;
						}
						$faceValue = implode(",", $faceValue);
						$faceValue = ($faceValue) ? $faceValue : '25,50,75' ;
						$minValue = implode(",", $minValue);*/
						 ?>
							 <?php if ($counter=='1'){ ?> 
							<div class="nopadding">
							<input  type="radio" value="<?php echo $value1->brandKey;?>" prices="<?php echo $b['prices'];?>" <?php if($b['min']){ ?> min_amount="<?php echo $b['min'];?>" <?php } ?> name="choose_card" id="<?php echo $value1->brandKey ; ?>" class="input-hidden choose_card" />				
								<label for="<?php echo $value1->brandKey ; ?>"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $new['200w-326ppi'];?>">
								</label>					
							</div>

						 <?php
						 }
						 	}
				}
			}
		}$counter++; ?>
			</div>
			<p class="popup-disclaimer">The merchants represented are not sponsors of the rewards or otherwise affiliated with Gifgiftcard.com. The logos and other identifying marks attached are trademarks of and owned by each represented company and/or its affiliates. Please visit each company's website for additional terms and conditions. 
</p>
  <!--<p class="popup-disclaimer"> The Starbucks word mark and the Starbucks Logo are trademarks of Starbucks Corporation. Starbucks is also the owner of the Copyrights in the Starbucks Logo and the Starbucks Card designs. All rights reserved. Starbucks is not a participating partner or sponsor in this offer.</p>-->
  <p class="popup-disclaimer"> <a href="https://www.apple.com/legal/internet-services/itunes/us/terms.html" target="_blank">iTunes®</a> is  a registered trademark of Apple Inc.  All right reserved.  Apple is not a participant in or sponsor of this promotion..</p>


</div>				


  <!--<p class="sent-button"><input value="Next" type="button" onclick="sentbutton()" data-dismiss="modal" class="submit btn btn-info"></p>-->
  
	</div><!-- tab-content -->
 <p class="sent-button">
  <!--<input value="Next" type="button" onclick="sentbutton()" data-dismiss="modal" class="submit btn btn-info">-->
  <a href="#myModal21" onclick="sentbutton()" id="cardchoose" role="button" data-dismiss="modal" class="submit btn btn-info" data-toggle="modal">Next</a>
  </p>
</section><!-- film-tabs -->
<script type="text/javascript">

jQuery('.choose_card').change(function(){
   jQuery('#choose_card').val(jQuery(this).val());

})
</script>
<script>
function init() {
var imgDefer = document.getElementsByTagName('img');
for (var i=0; i<imgDefer.length; i++) {
if(imgDefer[i].getAttribute('data-src')) {
imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>
<script>
jQuery(document).ready(function(){
		


	jQuery("#cardchoose").click(function(event){
            /* var value = jQuery('#textField.amount_text').val();
			var compareValue = $("#amount1").val();
			var compareValue1 = $("#amount").val(); */
		if (jQuery("input[name=choose_card]:checked").val()){
	
			
	}else{
		sweetAlert("Please make a selection");
			event.preventDefault();
				return false;
	}
		

	});
	});
</script>