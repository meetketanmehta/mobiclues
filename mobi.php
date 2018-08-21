
<?php

$q=$_GET["model"];
$servername="mobiclues.c3m2ijmhxwrw.ap-south-1.rds.amazonaws.com";
$username="mobiclues";
$password="iitjstartup.m";

$conn=mysqli_connect($servername,$username,$password,'mydb',"3306");
if(!$conn){
die ("connection failed: " . mysqli_error());}


$qry="SELECT * FROM allbrands where Model_Name ='$q' LIMIT 1";
$mysql_result=mysqli_query($conn,$qry) or die("Error in firing query".mysqli_error($conn));
$numberofrows=mysqli_num_rows($mysql_result); 
 if($numberofrows){while($row = (mysqli_fetch_assoc($mysql_result))){
	 $brand=$row["Brand"];
	 $model=$row["Model_Name"];
	 $os=$row["OS"];
	 if($row["Display_Size"]==4 || $row["Display_Size"]==5 || $row["Display_Size"]==6){$display_size=(int)$row["Display_Size"];}
	 else{$display_size=$row["Display_Size"];}
	 $cpu=$row["CPU"];
	 $chipset=$row["Chipset"];
	//if($row["RAM"]>=1){ $ram=(int)$row["RAM"];}
	//else{$ram=1000*$row["RAM"];}
	$rams=$row["RAM"];
	 $rear_camera=$row["Primary_Camera"];
	 $battery=(int)$row["Battery_Capacity"];
	 $battery_removable=$row["Removable_Battery"];
//	if($row["Internal_Storage"]>=1){ $rom=(int)$row["Internal_Storage"];}
	//else{$rom=1000*$row["Internal_Storage"];}
 $roms=$row["Internal_Storage"];
	 $rom_expand=$row["Expandable"];
	 $front_camera=$row["Secondary_Camera"];
	 $wlan=$row["WLAN"];
	 $bluetooth=$row["Bluetooth"];
	 $usb=$row["USB"];
	 $dimension=$row["Dimensions"];
	 $weight=$row["Weight"];
	 $colors=$row["Colors"];
	 $released=$row["Released_In"];
	 $technology=$row["Technology"];
	 $two_g=$row["Column_2G_Band"];
	 $three_g=$row["Column_3G_bands"];
	 $four_g=$row["Column_4G_bands"];
	 $sim_type=$row["SIM_Type"];
	 $sb_ratio=$row["Screen_to_body_Ratio"];
	 $resolution=$row["Resolution"];
	 $pixel_density=$row["Pixel_Density"];
	 $multitouch=$row["Multitouch"];
	 $protection=$row["Protection"];
	 $display_type=$row["Display_Type"];
	 $gpu=$row["GPU"];
	 $slot=$row["Card_Slot"];
	 $flash=$row["Primary_Camera_Flash"];
	 $video=$row["Primary_Camera_Video_Quality"];
	 $other_feature=$row["Primary_Camera_Features"];
	 $secondary_camera_video=$row["Secondary_Camera_Video_Quality"];
	 $battery_type=$row["Battery_Type"];
	 $stand_by=$row["Stand_by"];
	 $talktime=$row["Talk_time"];
	 $fast_charging=$row["Fast_Charging"];
	 $gps=$row["GPS"];
	 $nfc=$row["NFC"];
	 $radio=$row["Radio"];
	 $usb=$row["USB"];
	 $jack=$row["Column_3_5mm_jack"];
	 $finger_print=$row["Fingerprint_Sensor"];
	 $other_sensors=$row["Other_Sensors"];
	 $pixel_density=$row["Pixel_Density"];
	 $primary_led_flash=$row["Primary_Camera_Flash"];
	 $sim_number=(int)$row["No_of_SIM"];
	 $number_of_images=$row["No_of_Image"];
	 $colors=$row["Colors"];
	 
	 
 }}
 /*
 mysqli_close($conn);*/
	?>
	
	
	
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/mobi.css">
<link rel="stylesheet" href="./css/header-footer.css">
<link rel="stylesheet" type="text/css" href="./slick/slick.css">
<link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="moto-g4-play.js"></script>
<link rel="icon" type="image/png" href="./images/latest icon.png" />
<link rel="stylesheet" type="text/css" href="./slick/slick.css">
<link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
<title>MobiClues | <?php echo $brand;?> <?php echo $model;?> Price in India | Be Smart . Buy Smart</title>
<style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }
	
	.slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
</style>
</head>

<body style="background-color:#efeded;margin: 0px;font-family: Arial, Helvetica, sans-serif;">
<?php $ram=explode(", " , $rams); ?>
<?php $rom=explode(", " , $roms); ?> 
<div class="wrapper">
	<div class="header">
	<div class="header-content">
		<img alt="logo" src="./images/new.png" style="display: inline-block;float: left;width:200px;margin-top:-10px;">
		<div class="search">
		<form action="/phonefinder.php?pg_no=1" method="GET">
		<input type="text" name="search" class="searchbar" placeholder = "What are you looking for ?">
		<input type="submit" class="searchbox" value="search">
		</form>
		</div>
		<p><a href="feedback.html" class="feedback"> Feedback </a></p>
	</div>
	</div>

	<script>
	$(document).ready(function(){
	// By default submit is disabled 
	$('.searchbox').prop('disabled', true);

	$('.searchbar').keyup(function() {

		if($(this).val().length !=0 ) {			
			$('.searchbox').prop('disabled', false); 
		} else {
			$( ".searchbar").focus();		
		    $('.searchbox').prop('disabled', true);
		    e.preventDefault();
		}
		
	});
});
	</script>

	
	
	<div class="companies">
		<div class="top-brands">
			<p style="margin-top: 13px;">Top Brands  </p>
		</div>
		<div style="float:left;padding-left: 10px;"> <p style="margin-top: 13px;"><a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Apple"> Apple </a> | <a class="link-companies" href="phonefinder.php?pg_no=%201&brand=Samsung"> Samsung </a> | <a class="link-companies" href="phonefinder.php?pg_no=%201&brand=Sony"> Sony </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Asus"> Asus </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Xiaomi"> Xiaomi </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Lava"> Lava </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Micromax"> Micromax </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Motorola"> Motorola </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=LeEco"> LeEco </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Oppo"> Oppo </a> |<a class="link-companies" href="phonefinder.php?pg_no=%201&brand=Gionee"> Gionee </a> |<a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Microsoft"> Microsoft </a> | <a class="link-companies" href="phonefinder.php?pg_no=%201&brand=Oneplus"> Oneplus </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Htc"> HTC </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Lenovo"> Lenovo </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Lg"> LG </a> | <a class="link-companies" href="/phonefinder.php?pg_no=%201&brand=Vivo"> Vivo </a></p>
	</div>
	</div>

	<div class="path">
		<p> <a class="path" href="/"> All Mobiles </a> > <a class="path" href="/phonefinder.php?pg_no=1&brand=<?php echo $brand;?>"> <?php echo $brand;?> Mobiles </a> >  <?php echo $model; ?> </p>	
	</div>
	
	<div class="short">
		<div class="title">
		<h3 class="title-text"><?php echo $brand ;?> <?php echo $model; ?> </h3>
		</div>
		
		<div class="short-left">
			<div class="photos">
			<img id="largephoto" src="/photos/<?php echo $brand;echo '/';echo $model;?>/1.jpg" style="max-height:350px;max-width:320px;margin-top:40px;">
			</div>
			
			<div class="regular slider photoslist">
			<?php
			for( $x=1; $x <= $number_of_images;$x++){
			echo'<div class="photo-options" onmouseenter="zoomimage(';echo"$x"-1;echo')" style="margin-left:6px;margin-right:6px;"><img class="smallphoto" src="./photos/'; echo $brand; echo '/'; echo $model; echo'/';echo"$x";echo'.jpg" style="height:40px;width:auto;margin:auto;margin-top:4px;"></div>';
			}?>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(document).on('ready', function() {
		$(".regular").slick({
        dots:false,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll:5
		});
		});
		</script>
		
		<div class="short-right">
			<div class="best-price">
				<p class="best-price-text"> Best Price: <span class="price-color"> &#8377 N/A (Lowest Price XYZ) </span> </p>
			</div>
			<div class="variantslist">
				<div class="variants">
				
					<p class="variants-title"> COLOURS <span class="colorclear"> Clear </span> </p>
					
					<?php $colour=explode( ", " , $colors );?>
					
					<div style="margin-left:20px; margin-right:10px;">
					<?php
					$x=0;
					while(isset($colour[$x])){
					echo'<div class="colours-circle" onclick="showcolour(';echo"$x";echo')" style="background-color:';echo"$colour[$x]";echo';"><span class="tooltiptext">';echo"$colour[$x]";echo'</span>  </div>';
					$x++;
					}
					?>
					</div>
					
				</div>
				
				
				<div class="variants">
				
					<p class="variants-title" style="margin-left:12px;"> STORAGE </p>
					
					<div style="margin-left:20px; margin-right:10px;">
					<?php
					$x=0;
					while(isset($rom[$x]) && $rom[$x]!="null"){
					echo'<div class="size-box">'; if($rom[$x]!="half"){echo (int)"$rom[$x]"; echo 'GB';}else{echo'512 MB';} echo '</div>';
					$x++;
					} 
					?>
					</div>
				</div>
				
				
			
				<div class="variants" style="border:none;">
			
					<p class="variants-title" style="margin-left:12px;"> RAM </p>
					
						<div style="margin-left:20px;  margin-right:10px;">
					<?php
					$x=0;
					while(isset($ram[$x])&& $ram[$x]!="null"){
					echo'<div class="size-box">';echo(int)"$ram[$x]"; echo 'GB </div>';
					$x++;
					}
					?>
					</div>
				</div>
			</div>
			
			<div class="best-price-store">
				<div class="store-photo">
					<img class="store-logo" src="./images/logos/flipkart_logo.jpg">
				</div>
				<div class="delivery" style="margin-left:35px;">
					<p><span class="price-color"> &#8377 N/A</span> </p>
					<p class="shipping"><span class="free-color"> FREE </span> Shipping </p>
				</div>
				<div class="gotostore" style="margin-left:35px;margin-top:20px;"><span class="go-to-store">Go To Store</span></div>
			</div>
			<div class="price-line"></div>
			<div class="best-price-store" style="border-bottom:1px solid #E0DDDD;">
				<div class="store-photo" style="width:110px;">
					<img class="store-logo" src="./images/logos/amazon_logo.jpg">
				</div>
				<div class="delivery" style="margin-left:35px;">
					<p><span class="price-color"> &#8377 N/A</span> </p>
					<p class="shipping"><span class="free-color"> FREE </span> Shipping </p>
				</div>
				<div class="gotostore" style="margin-left:35px;margin-top:20px;"><span class="go-to-store">Go To Store</span></div>
			</div>
			
			
			<div class="keyspecs">
				<p style="margin-top:10px;font-weight:500;color:#373737;padding-left: 10px;font-size:20px;">Key Specs</p> 
				<ul class="keyspecs-list">
				<li> <span class="highlight"> <?php echo $brand;?> <?php echo $model;?> </span><?php if($os){echo'runs on'; } ?><span class="highlight"> <?php echo $os;?></span>. </li>
				<li> It has <span class="highlight"> <?php echo $display_size; echo  ' inch';?>  </span> <?php if($display_size){echo'Display';} ?> <?php if($pixel_density){echo '  with Pixel Density';}?> <span class="highlight"> <?php echo $pixel_density;?> </span>.</li>
				
				<?php if($chipset || $cpu){echo'<li> '. 'The Smartphone is powered by';} ?> <span class="highlight">   <?php if($chipset!="null"){echo $chipset;}?> <?php if($cpu){echo $cpu;}?> </span> <?php if($chipset || $cpu){echo 'processor.';} ?> </li>
				 <?php if($front_camera || $rear_camera){echo'<li>'. 'The Device has';} ?> <span class="highlight"> <?php echo $rear_camera?>  </span> <?php echo'Rear Camera';?> <?php if($primary_led_flash){echo 'with';}?> <span class="highlight"> <?php echo $primary_led_flash;?> </span> <?php  if($front_camera){echo 'AND';}?> <span class="highlight"> <?php echo $front_camera?> </span> <?php if($front_camera){echo 'Front Camera.';}?></li>
				<li> It has <span class="highlight"> <?php echo (int)$ram[0].' GB'; ?>  Ram</span> and <span class="highlight"> <?php echo (int)$rom[0].' GB';?> Internal Storage </span> which is <span class="highlight"> expandable <?php echo $rom_expand;?>  </span>. </li>
				<li> It comes with <span class="highlight"> <?php echo $battery.' mAH battery';?> </span>  which <span class="highlight"> <?php if($battery_removable=="No"){echo "can not" ;} else{echo "can ";}?>  </span>be removed . </li>
				<li> The Smartphone has connectivity options of <span class="highlight"> <?php if($wlan){echo $wlan.',';}?> </span>  <span class="highlight">  <?php echo'Bluetooth'. $bluetooth;?> </span> <span class="highlight">  <?php if($usb){echo' and '. $usb;}?> </span> .</li>
				<?php if($finger_print !="No"){echo ' <li> '.'It also has '; }?> <span class="highlight"> <?php if($finger_print !='No'){echo'Fingerprint sensor';} ?> </span>.</li> 				
				</ul>
			</div>
			
		</div>
	</div>
	
	<div class="compare-price">
		<div class="title">
		<h3 class="title-text">  <?php echo $brand ;?> <?php echo $model;?>  Price in India </h3>
		</div>
		
			<div class="variantslist">
				<div class="variants">
					<p class="variants-title"> COLOURS <span class="colorclear"> Clear </span> </p>
					<div style="margin-left:20px;">
					<?php
					$x=0;
					while(isset($colour[$x])){
					echo'<div class="colours-circle" onclick="showcolour(';echo"$x";echo')" style="background-color:';echo"$colour[$x]";echo';"><span class="tooltiptext">';echo"$colour[$x]";echo'</span>  </div>';
					$x++;
					}
					?>
					</div>
					
				</div>
				<div class="variants">
					<p class="variants-title" style="margin-left:12px;"> STORAGE </p>
					
					<?php
					$x=0;
					while(isset($rom[$x])){
					echo'<div class="size-box">'; echo (int)"$rom[$x]"; echo 'GB </div>';
					$x++;
					} 
					?>
				</div>
				<div class="variants" style="border:none;">
					<p class="variants-title" style="margin-left:12px;"> RAM </p>
					
					<?php
					$x=0;
					while(isset($ram[$x])){
					echo'<div class="size-box">';echo(int)"$ram[$x]"; echo 'GB </div>';
					$x++;
					}
					?>
					
				</div>
			</div>
			

			<div class="storeprices">
				<div style="height:70px;">
				<div class="store-photo" style="margin-left:50px;">
					<img class="store-logo" src="./images/logos/flipkart_logo.jpg">
				</div>
				<div class="delivery">
					<p class="cod" style="margin-top:15px;"> 3-5 Days Delivery </p>
					<p class="cod" style="margin-top:-5px;"> COD : Available </p>
				</div>
				<div class="delivery" style="margin-left:10px;">
					<p><span class="price-color"> &#8377 N/A</span> </p>
					<p class="shipping"><span class="free-color"> FREE </span> Shipping </p>
				</div>
				<div class="gotostore"><span class="go-to-store">Go To Store</span></div>
				<div class="expand" onclick="slider(0)"> Show Details <i class="fa fa-angle-double-down"> </i></div>
				<div class="dexpand" onclick="slider(0)" style="display:none;"> Hide Details <i class="fa fa-angle-double-up"> </i></div>
				</div>
				<div class="store-details">
				<div class="store-details-photo">
					<img class="store-logo" src="./images/logos/flipkart_logo.jpg" style="margin-top:30px;">
					<div class="rating"> Rating : 4.5/5 </div>
					<div class="review"> Read all 5120 reviews </div>
				</div>
				<div class="store-details-photo" style="width:250px;">
					<p class="store-details-list"> EMI : Available </p>
					<p class="store-details-list"> COD : Available </p>
					<p class="store-details-list"> 5-7 Days Delivery</p>
					<p class="store-details-list"> 10 Days <span class="hoverable" style="font-weight:normal;"> Return Policy </span> </p>
				</div>
				<div class="variant-options">
				<p class="variant-option-title"> COLOUR OPTIONS </p>
					<div class="color-options-left">
					
					<?php
					$x=0;
					while(isset($colour[$x]) && $x<4){
					echo'<p class="color-options"> <span class="check">';echo "$colour[$x]";echo'</span> : <span class="price-color hoverable"> &#8377 N/A </span> </p>';
					$x++;
					
					}
					?>
					
					</div>
					<div class="color-options-left">
					
					<?php
					$x=4;
					while(isset($colour[$x])){
					echo'<p class="color-options"> <span class="check">';echo "$colour[$x]";echo'</span> : <span class="price-color hoverable"> &#8377 N/A </span> </p>';
					$x++;
					
					}
					?>
					
					</div>
				</div>
				</div>
			</div>
			
			

			<div class="storeprices">
				<div style="height:70px;">
				<div class="store-photo" style="margin-left:50px;">
					<img class="store-logo" src="./images/logos/snapdeal_logo.jpg">
				</div>
				<div class="delivery">
					<p class="cod" style="margin-top:15px;"> 3-5 Days Delivery </p>
					<p class="cod" style="margin-top:-5px;"> COD : Available </p>
				</div>
				<div class="delivery" style="margin-left:10px;">
					<p><span class="price-color"> &#8377 N/A</span> </p>
					<p class="shipping"><span class="free-color"> FREE </span> Shipping </p>
				</div>
				<div class="gotostore"><span class="go-to-store">Go To Store</span></div>
				<div class="expand" onclick="slider(1)"> Show Details <i class="fa fa-angle-double-down"> </i></div>
				<div class="dexpand" onclick="slider(1)" style="display:none;"> Hide Details <i class="fa fa-angle-double-up"> </i></div>
				</div>
				<div class="store-details">
				<div class="store-details-photo">
					<img class="store-logo" src="./images/logos/snapdeal_logo.jpg" style="margin-top:30px;">
					<div class="rating"> Rating : 4.5/5 </div>
					<div class="review"> Read all 5120 reviews </div>
				</div>
				<div class="store-details-photo" style="width:250px;">
					<p class="store-details-list"> EMI : Available </p>
					<p class="store-details-list"> COD : Available </p>
					<p class="store-details-list"> 5-7 Days Delivery</p>
					<p class="store-details-list"> 10 Days <span class="hoverable" style="font-weight:normal;"> Return Policy </span></p>
				</div>
				<div class="variant-options">
				<p class="variant-option-title"> COLOUR OPTIONS </p>
					<div class="color-options-left">
					<?php
					$x=0;
					while(isset($colour[$x]) && $x<4){
					echo'<p class="color-options"> <span class="check">';echo "$colour[$x]";echo'</span> : <span class="price-color hoverable"> &#8377 N/A </span> </p>';
					$x++;
					
					}
					?>
					</div>
					<div class="color-options-left">
					<?php
					$x=4;
					while(isset($colour[$x])){
					echo'<p class="color-options"> <span class="check">';echo "$colour[$x]";echo'</span> : <span class="price-color hoverable"> &#8377 N/A </span> </p>';
					$x++;
					
					}
					?>
					</div>
				</div>
				</div>
			</div>
	

			<div class="storeprices">
				<div style="height:70px;">
				<div class="store-photo" style="margin-left:50px;">
					<img class="store-logo" src="./images/logos/tata-cliq_logo.jpg">
				</div>
				<div class="delivery">
					<p class="cod" style="margin-top:15px;"> 3-5 Days Delivery </p>
					<p class="cod" style="margin-top:-5px;"> COD : Available </p>
				</div>
				<div class="delivery" style="margin-left:10px;">
					<p><span class="price-color"> &#8377 N/A</span> </p>
					<p class="shipping"><span class="free-color"> FREE </span> Shipping </p>
				</div>
				<div class="gotostore"><span class="go-to-store">Go To Store</span></div>
				<div class="expand" onclick="slider(2)"> Show Details <i class="fa fa-angle-double-down"> </i></div>
				<div class="dexpand" onclick="slider(2)" style="display:none;"> Hide Details <i class="fa fa-angle-double-up"> </i></div>
				</div>
				<div class="store-details">
				<div class="store-details-photo">
					<img class="store-logo" src="./images/logos/tata-cliq_logo.jpg" style="margin-top:30px;">
					<div class="rating"> Rating : 4.5/5 </div>
					<div class="review"> Read all 5120 reviews </div>
				</div>
				<div class="store-details-photo" style="width:250px;">
					<p class="store-details-list"> EMI : Available </p>
					<p class="store-details-list"> COD : Available </p>
					<p class="store-details-list"> 5-7 Days Delivery</p>
					<p class="store-details-list"> 10 Days <span class="hoverable" style="font-weight:normal;"> Return Policy </span> </p>
				</div>
				<div class="variant-options">
				<p class="variant-option-title"> COLOUR OPTIONS </p>
					<div class="color-options-left">
					<?php
					$x=0;
					while(isset($colour[$x]) && $x<4){
					echo'<p class="color-options"> <span class="check">';echo "$colour[$x]";echo'</span> : <span class="price-color hoverable"> &#8377 N/A </span> </p>';
					$x++;
					
					}
					?>
					</div>
					<div class="color-options-left">
					<?php
					$x=4;
					while(isset($colour[$x])){
					echo'<p class="color-options"> <span class="check">';echo "$colour[$x]";echo'</span> : <span class="price-color hoverable"> &#8377 N/A </span> </p>';
					$x++;
					
					}
					?>
					</div>
				</div>
				</div>
			</div>
	

			<div class="storeprices">
				<div style="height:70px;">
				<div class="store-photo" style="margin-left:50px;">
					<img class="store-logo" src="./images/logos/amazon_logo.jpg">
				</div>
				<div class="delivery">
					<p class="cod" style="margin-top:15px;"> 3-5 Days Delivery </p>
					<p class="cod" style="margin-top:-5px;"> COD : Available </p>
				</div>
				<div class="delivery" style="margin-left:10px;">
					<p><span class="price-color"> &#8377 N/A</span> </p>
					<p class="shipping"><span class="free-color"> FREE </span> Shipping </p>
				</div>
				<div class="gotostore"><span class="go-to-store">Go To Store</span></div>
				<div class="expand" onclick="slider(3)"> Show Details <i class="fa fa-angle-double-down"> </i></div>
				<div class="dexpand" onclick="slider(3)" style="display:none;"> Hide Details <i class="fa fa-angle-double-up"> </i></div>
				</div>
				<div class="store-details">
				<div class="store-details-photo">
					<img class="store-logo" src="./images/logos/amazon_logo.jpg" style="margin-top:30px;">
					<div class="rating"> Rating : 4.5/5 </div>
					<div class="review"> Read all 5120 reviews </div>
				</div>
				<div class="store-details-photo" style="width:250px;">
					<p class="store-details-list"> EMI : Available </p>
					<p class="store-details-list"> COD : Available </p>
					<p class="store-details-list"> 5-7 Days Delivery</p>
					<p class="store-details-list"> 10 Days <span class="hoverable" style="font-weight:normal;"> Return Policy </span></p>
				</div>
				<div class="variant-options">
				<p class="variant-option-title"> COLOUR OPTIONS </p>
					<div class="color-options-left">
					<?php
					$x=0;
					while(isset($colour[$x]) && $x<4){
					echo'<p class="color-options"> <span class="check">';echo "$colour[$x]";echo'</span> : <span class="price-color hoverable"> &#8377 N/A </span> </p>';
					$x++;
					
					}
					?>
					</div>
					<div class="color-options-left">
					<?php
					$x=4;
					while(isset($colour[$x]) ){
					echo'<p class="color-options"> <span class="check">';echo "$colour[$x]";echo'</span> : <span class="price-color hoverable"> &#8377 N/A </span> </p>';
					$x++;
					
					}
					?>
					</div>
				</div>
				</div>
			</div>

			<div class="storeprices">
				<div style="height:70px;">
				<div class="store-photo" style="margin-left:50px;">
					<img class="store-logo" src="./images/logos/ebay_logo.jpg">
				</div>
				<div class="delivery">
					<p class="cod" style="margin-top:15px;"> 3-5 Days Delivery </p>
					<p class="cod" style="margin-top:-5px;"> COD : Available </p>
				</div>
				<div class="delivery" style="margin-left:10px;">
					<p><span class="price-color"> &#8377 N/A</span> </p>
					<p class="shipping"><span class="free-color"> FREE </span> Shipping </p>
				</div>
				<div class="gotostore"><span class="go-to-store">Go To Store</span></div>
				<div class="expand" onclick="slider(4)"> Show Details <i class="fa fa-angle-double-down"> </i></div>
				<div class="dexpand" onclick="slider(4)" style="display:none;"> Hide Details <i class="fa fa-angle-double-up"> </i></div>
				</div>
				<div class="store-details">
				<div class="store-details-photo">
					<img class="store-logo" src="./images/logos/ebay_logo.jpg" style="margin-top:30px;">
					<div class="rating"> Rating : 4.5/5 </div>
					<div class="review"> Read all 5120 reviews </div>
				</div>
				<div class="store-details-photo" style="width:250px;">
					<p class="store-details-list"> EMI : Available </p>
					<p class="store-details-list"> COD : Available </p>
					<p class="store-details-list"> 5-7 Days Delivery</p>
					<p class="store-details-list"> 10 Days <span class="hoverable" style="font-weight:normal;"> Return Policy </span> </p>
				</div>
				<div class="variant-options">
				<p class="variant-option-title"> COLOUR OPTIONS </p>
					<div class="color-options-left">
					<?php
					$x=0;
					while(isset($colour[$x]) && $x<4){
					echo'<p class="color-options"> <span class="check">';echo "$colour[$x]";echo'</span> : <span class="price-color hoverable"> &#8377 N/A </span> </p>';
					$x++;
					
					}
					?>
					</div>
					<div class="color-options-left">
					<?php
					$x=4;
					while(isset($colour[$x]) ){
					echo'<p class="color-options"> <span class="check">';echo "$colour[$x]";echo'</span> : <span class="price-color hoverable"> &#8377 N/A </span> </p>';
					$x++;
					
					}
					?>
					</div>
				</div>
				</div>
			</div>

		<div class="note">
			<p> Please confirm Price before purchase at the landing page.  <span style="margin-left:520px;">Found Error? <span class="report"> Report Here </span> </span>  </p>
		</div>
	</div>
	
	<div id="id01" class="modal">
		<div class="reportdetails animate">
		<p class="reportdetails-title"> Report Error in details of <?php echo $brand;?> <?php echo $model;?> <span class="cancel"> X </span></p>
		<div>
		<form>
			<div class="reportoptions">
			<div class="titleleft">Error in :</div>
			<div class="rightoption">
				<select class="errorin">
				<option value="volvo">Price</option>
				<option value="saab">Specification</option>
				</select>
			</div>
			</div>
			<div class="reportoptions" class="storesoption" style="margin-top:5px;">
			<div class="titleleft">Store :</div>
			<div class="rightoption">
				<select class="errorin">
				<option value="Flipkart">Flipkart</option>
				<option value="Amazon">Amazon</option>
				<option value="Snapdeal">Snapdeal</option>
				<option value="Ebay">Ebay</option>
				<option value="Tata Cliq">Tata Cliq</option>
				</select>
			</div>
			</div>
			<div class="reportoptions" style="margin-top:5px;">
			<div class="titleleft">Details :</div>
			<div class="rightoption">
				<textarea class="textarea" name="message" rows="7" cols="35"></textarea>
			</div>
			</div>
			<div class="prevnext">
				<div class="firstlast" style="margin-left:370px;margin-top:20px;"> Submit </div>
			</div>
		</form>
		</div>
		</div>
	</div>
	
	<script>
		var photoopt = document.getElementsByClassName("photo-options");
		var smallimg = document.getElementsByClassName("smallphoto");
		var largeimg = document.getElementById("largephoto");
		
		function zoomimage(n){
			var x = smallimg[n].src;
			largeimg.src = x;
			for(var i=0;i<14;++i){
			photoopt[i].style.border = "1px solid #E0DDDD";
			}
			photoopt[n].style.border = "1px solid #FD4E0C";
		}
	
		$(document).ready(function(){
			$(".report").click(function(){
				$(".modal").css("display","block");
			});
		});
		
		$(document).ready(function(){
			$(".cancel").click(function(){
				$(".modal").css("display","none");
			});
		});
		
		var modal = document.getElementById('id01');
		window.onclick = function(event) {
		if (event.target == modal) {
        modal.style.display = "none";}}
		
		var exp = $(".expand").toArray();
		var dexp = $(".dexpand").toArray();
		var show = $(".store-details").toArray();
		var border = $(".storeprices").toArray();
		function slider(n){
		$( show[n] ).slideToggle();
		$( exp[n] ).toggle();
		$( dexp[n] ).toggle();
		}
		
		var tooltip = document.getElementsByClassName("tooltiptext");
		var coloropt = document.getElementsByClassName("color-options");
		var checkcolor = document.getElementsByClassName("check");
		var colorcirc = document.getElementsByClassName("colours-circle");
		
		function showcolour(n){
			for(var i=0;i<coloropt.length;++i){
			if(tooltip[n].innerHTML == checkcolor[i].innerHTML){
			coloropt[i].style.display = "block";}
			else {
			coloropt[i].style.display = "none";}
			}
			
			for(var i=0;i<colorcirc.length;++i){
			colorcirc[i].style.border = "1.5px solid white"}
			
			colorcirc[n].style.border = "1.5px solid #59A1F2";
			colorcirc[n+8].style.border = "1.5px solid #59A1F2";
			
			$(".colorclear").css("display","inline-block");
		}
		
		$(document).ready(function(){
			$(".colorclear").click(function(){
				$(".colorclear").css("display","none");
				
				for(var i=0;i<colorcirc.length;++i){
				colorcirc[i].style.border = "1.5px solid white";}
				
				for(var i=0;i<coloropt.length;++i){
				coloropt[i].style.display = "block";}
			});
		});
	</script>
	
	<div class="add">
	<img src="flipkart-iphone-ad.jpg" style="max-width:998px;">
	</div>
	
	<div class="fullspecs">
		<div class="title">
		<h3 class="title-text">  <?php echo $brand ;?> <?php echo $model;?>  </h3>
		</div>
		
		<div class="content-title">
		GENERAL
		</div>
		
		<table class="fullspecs-table">
		<tr class="brand">
			<td> Brand </td>
			<td class="answer"> <?php echo $brand;?> </td>
		</tr>
		<tr class="model name">
			<td> Model Name </td>
			<td class="answer"><?php echo $model;?> </td>
		</tr>
		<tr class="released on">
			<td> Released on </td>
			<td class="answer"> <?php echo $released;?> </td>
		</tr>
		<tr class="dimension">
			<td> Dimension </td>
			<td> <?php echo $dimension;?> </td>
		</tr>
		<tr class="weight">
			<td> Weight </td>
			<td> <?php echo $weight;?> </td>
		</tr>
		<tr class="colours">
			<td> Colours </td>
			<td class="answer"><?php echo $colors;?></td>
		</tr>
		</table>
		
		<div class="content-title">
		NETWORK
		</div>
		<table class="fullspecs-table">
		<tr class="technology">
			<td> Technology </td>
			<td class="answer"> <?php echo $technology;?> </td>
		</tr>
		<tr class="2g">
			<td> 2G </td>
			<td class="answer"> <?php echo $two_g;?> </td>
		</tr>
		<tr class="3g">
			<td> 3G </td>
			<td class="answer"> <?php echo $three_g;?> </td>
		</tr>
		<tr class="4g">
			<td> 4G </td>
			<td> <?php echo $four_g;?> </td>
		</tr>
		<tr class="sim type">
			<td> SIM Type </td>
			<td> <?php echo $sim_type;?></td>
		</tr>
		</table>
		
		<div class="content-title">
		DISPLAY
		</div>
		<table class="fullspecs-table">
		<tr class="display size">
			<td> Display Size </td>
			<td class="answer"> <?php echo $display_size;?> inches </td>
		</tr>
		<tr class="screen to body">
			<td> Screen-to-body Ratio </td>
			<td class="answer"> <?php echo $sb_ratio;?> </td>
		</tr>
		<tr class="resolution">
			<td> Resolution </td>
			<td class="answer"><?php echo $resolution;?> </td>
		</tr>
		<tr class="pixel density">
			<td> Pixel Density </td>
			<td> <?php echo $pixel_density;?></td>
		</tr>
		<tr class="multitouch">
			<td>Multitouch</td>
			<td> <?php echo $multitouch;?></td>
		</tr>
		<tr class="protection">
			<td>Protection</td>
			<td> <?php echo $protection;?>  </td>
		</tr>
		<tr class="display type">
			<td>Display Type</td>
			<td> <?php echo $display_type;?> </td>
		</tr>
		</table>
		
		
		<div class="content-title">
		SOFTWARE
		</div>
		<table class="fullspecs-table">
		<tr class="operating system">
			<td> Operating System </td>
			<td class="answer"> <?php echo $os;?></td>
		</tr>
		</table>
		
		<div class="content-title">
		PERFORMANCE
		</div>
		<table class="fullspecs-table">
		<tr class="chipset">
			<td> Chipset </td>
			<td class="answer"><?php echo $chipset;?></td>
		</tr>
		<tr class="cpu">
			<td>CPU</td>
			<td class="answer"><?php echo $cpu;?></td>
		</tr>
		<tr class="gpu">
			<td> GPU </td>
			<td class="answer"><?php echo $gpu;?></td>
		</tr>
		<tr class="ram">
			<td> RAM </td>
			<td class="answer"> <?php echo (int)$ram[0].' GB';?> </td>
		</tr>
		</table>
		
		<div class="content-title">
		STORAGE
		</div>
		<table class="fullspecs-table">
		<tr class="internal storage">
			<td> Internal Storage </td>
			<td class="answer"> <?php echo (int)$rom[0].' GB';?> </td>
		</tr>
		<tr class="expandable">
			<td>Expandable</td>
			<td class="answer"><?php echo $rom_expand;?></td>
		</tr>
		<tr class="slot type">
			<td>Slot Type</td>
			<td class="answer"><?php echo $slot;?></td>
		</tr>
		</table>
		
		<div class="content-title">
		PRIMARY CAMERA
		</div>
		<table class="fullspecs-table">
		<tr class="primary camera">
			<td> Primary Camera </td>
			<td class="answer"><?php echo $rear_camera;?> </td>
		</tr>
		<tr class="aperture">
			<td> Aperture </td>
			<td class="answer"> null </td>
		</tr>
		<tr class="flash">
			<td>Flash</td>
			<td class="answer"><?php echo $flash;?></td>
		</tr>
		<tr class="primary camera video">
			<td> Video </td>
			<td class="answer"><?php echo $video;?></td>
		</tr>
		<tr class="other features">
			<td> Other Features </td>
			<td class="answer"> <?php echo $other_feature;?></td>
		</tr>
		</table>
		
		<div class="content-title">
		SECONDARY CAMERA
		</div>
		<table class="fullspecs-table">
		<tr class="secondary camera">
			<td> Secondary Camera </td>
			<td class="answer"><?php echo $front_camera;?></td>
		</tr>
		<tr class="secondary camera video">
			<td> Video </td>
			<td class="answer"> <?php echo $secondary_camera_video;?> </td>
		</tr>
		</table>
		
		<div class="content-title">
		BATTERY
		</div>
		<table class="fullspecs-table">
		<tr class="capacity">
			<td> Capacity </td>
			<td class="answer"> <?php echo $battery; ?> mAH</td>
		</tr>
		<tr class="type">
			<td> Type </td>
			<td class="answer"> <?php echo $battery_type;?> </td>
		</tr>
		<tr class="removable">
			<td>Removable</td>
			<td class="answer"> <?php echo $battery_removable;?></td>
		</tr>
		<tr class="stand-by">
			<td> Stand-by </td>
			<td class="answer"> <?php echo $stand_by;?></td>
		</tr>
		<tr class="talktime">
			<td> Talktime </td>
			<td class="answer"> <?php echo $talktime;?></td>
		</tr>
		<tr class="fast charging">
			<td> Fast Charging </td>
			<td class="answer"> <?php echo $fast_charging;?></td>
		</tr>
		</table>
		
		<div class="content-title">
		CONNECTIVITY
		</div>
		<table class="fullspecs-table">
		<tr class="wlan">
			<td> WLAN </td>
			<td class="answer"><?php echo $wlan;?></td>
		</tr>
		<tr class="bluetooth">
			<td>Bluetooth </td>
			<td class="answer"><?php echo $bluetooth;?></td>
		</tr>
		<tr class="gps">
			<td>Gps</td>
			<td class="answer"><?php echo $gps;?></td>
		</tr>
		<tr class="nfc">
			<td> NFC </td>
			<td class="answer"> <?php echo $nfc;?></td>
		</tr>
		<tr class="radio">
			<td> Radio </td>
			<td class="answer"> <?php echo $radio;?></td>
		</tr>
		<tr class="usb">
			<td> USB </td>
			<td class="answer"> <?php echo $usb;?></td>
		</tr>
		<tr class="3.5mm jack">
			<td> 3.5 mm Audio Jack </td>
			<td class="answer"><?php echo $jack;?></td>
		</tr>
		</table>
		
		<div class="content-title">
		SENSORS
		</div>
		<table class="fullspecs-table">
		<tr class="fingerprint sensor">
			<td>Fingerprint Sensor </td>
			<td class="answer"><?php echo $finger_print;?></td>
		</tr>
		<tr class="other sensors">
			<td> Other Sensors </td>
			<td class="answer"><?php echo $other_sensors;?> </td>
		</tr>
		</table>
		<div class="note">
			<p><span style="margin-left:820px;">Found Error? <span class="report"> Report Here </span> </span>  </p>
		</div>
	</div>
	
	<div class="suggestionbox" style="margin-top:20px;margin-bottom:20px;height:350px;">
	<h4 style="margin-left:20px;"> Other Mobiles in Price Range of <?php echo $brand;?> <?php echo $model;?>  </h4>
	<hr>
		<div class="suggestionlinks">
			<ul>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			<li class="suggestionlist">Samsung Galaxy S8 + </li>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			</ul>
		</div>
		<div class="suggestionlinks">
			<ul>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			<li class="suggestionlist">Samsung Galaxy S8</li>
			</ul>
		</div>
	</div>
	
	<div class="suggestionbox" style="margin-top:10px;margin-bottom:20px;height:270px;">
	<h4 style="margin-left:20px;">You may also like to View</h4>
	<hr>
		<div class="suggestionlinks">
			<ul>
			<li class="suggestionlist"><?php echo $brand; ?> Mobile Phones</li>
			<li class="suggestionlist">Mobiles with <?php echo $ram; ?> GB RAM</li>
			<li class="suggestionlist">Phones with similar Display Size</li>
			<li class="suggestionlist">Mobiles with 4G</li>
			</ul>
		</div>
		<div class="suggestionlinks">
			<ul>
			<li class="suggestionlist">Phones with <?php echo $rear_camera; ?> Primary Camera</li>
			<li class="suggestionlist">Mobiles with <?php echo $front_camera;?>  Secondary Camera</li>
			<li class="suggestionlist"><?php echo $sim_number;?> SIM Mobiles</li>
			<li class="suggestionlist">Other Mobiles <?php if($finger_print !="No"){echo 'with';} else {echo 'without';}?> Fingerprint Sensor</li>
			</ul>
		</div>
	</div>
	
	<div class="suggestionbox" style="margin-top:10px;margin-bottom:20px;height:245px;">
	<h4 style="margin-left:20px;">Top Brands</h4>
	<hr>
		
		<a style="text-decoration:none;" href="/phonefinder.php?pg_no=%201&brand=Samsung" >
		<div class="brand-box" style="margin-left:30px;">
		<img src="/images/logos/samsung_logo.jpg" style="margin-top:5px;">
		<p style="margin-top:5px;"> Samsung Mobiles </p>
		</div>
		</a>
		
		<a style="text-decoration:none;" href="/phonefinder.php?pg_no=%201&brand=Apple" >
		<div class="brand-box">
		<img src="images/logos/apple_logo.jpg"  style="margin-top:5px;">
		<p style="margin-top:5px;"> Apple Mobiles </p>
		</div>
		</a>
		
		<a style="text-decoration:none;" href="/phonefinder.php?pg_no=%201&brand=Micromax" >
		<div class="brand-box">
		<img src="images/logos/micromax_logo.jpg"  style="margin-top:5px;">
		<p style="margin-top:5px;"> Micromax Mobiles </p>
		</div>
		</a>
		
		<a style="text-decoration:none;" href="/phonefinder.php?pg_no=%201&brand=Oppo" >
		<div class="brand-box">
		<img src="images/logos/oppo_logo.jpg"  style="margin-top:5px;">
		<p style="margin-top:5px;"> Oppo Mobiles </p>
		</div>
		</a>
		
		<a style="text-decoration:none;" href="/phonefinder.php?pg_no=%201&brand=Vivo" >
		<div class="brand-box">
		<img src="images/logos/vivo_logo.jpg"  style="margin-top:5px;">
		<p style="margin-top:5px;"> Vivo Mobiles </p>
		</div>
		</a>
		
		<a style="text-decoration:none;" href="/phonefinder.php?pg_no=%201&brand=Xiaomi" >
		<div class="brand-box">
		<img src="images/logos/xiaomi_logo.jpg"  style="margin-top:5px;">
		<p style="margin-top:5px;"> Xiaomi Mobiles </p>
		</div>
		</a>
		
	</div>
	
	
	<div class="newsletter">
		<div style="height:120px;margin-top:40px;">
		<p style="font-size:24px;"> Subscribe to our Newsletter </p>
		<p style="font-size:15px;margin-top:-20px;"> and never miss another offer !! </p>
		<p style="font-size:15px;margin-top:-10px;"> also get updates on new Launches !! </p>
		<input type="text" class="email"  placeholder="Email Address"> <div class="subscribe"> Subscribe </div>
		</div>
	
	</div>
	
	
	<div class="footer">

	<div style="height:310px;">
	
		
		<div class="quicklinks">
		<h4 class="quicklinks-title"> Popular Mobiles </h4>
		<div class="popularmobileslist">
			<p class="popularmobilesname"> Apple iPhone 7 </p>
			<p class="popularmobilesname"> Motorola Moto G4 Play </p>
			<p class="popularmobilesname"> Vivo V5s </p>
			<p class="popularmobilesname"> Oppo F1s </p>
			<p class="popularmobilesname"> Sony Xperia Z5 Premium </p>
			<p class="popularmobilesname"> Apple iPhone 7 Plus</p>
		</div>
		<div class="popularmobileslist">
			<p class="popularmobilesname"> Apple iPhone 7 </p>
			<p class="popularmobilesname"> Motorola Moto G4 Play </p>
			<p class="popularmobilesname"> Vivo V5s </p>
			<p class="popularmobilesname"> Oppo F1s </p>
			<p class="popularmobilesname"> Sony Xperia Z5 Premium </p>
			<p class="popularmobilesname"> Apple iPhone 7 Plus</p>
		</div>
		</div>
		
		
		<div class="quicklinks" style="margin-left:70px;width:480px;height:150px;">
		<h4 class="quicklinks-title" style="width:150px;"> Genuine Products </h4>
		<div class="footerboxcontent"><img src="./images/footer/genuine.png" style="height:100px;margin:10px 25px;"></div><div class="footerboxcontent" style="width:250px;"> <p style="margin-top:30px;"> We only list 100% Genuine Products on our site. So just compare and shop without any worries. </p></div>
		</div>
		
		<div class="quicklinks" style="margin-left:70px;width:480px;height:150px;">
		<h4 class="quicklinks-title" style="width:150px;"> Genuine Products </h4>
		<div class="footerboxcontent"><img src="./images/footer/hidden.png" style="height:90px;margin:15px 35px;"></div><div class="footerboxcontent" style="width:250px;"> <p style="margin-top:30px;"> Our service is 100% FREE. No extra charges will be collected for using our service. </p></div>
		</div>
		
		
		
	</div>	
		<div style="height:80px;margin-top:20px;">
		<div class="quicklinks" style="width:300px;margin-left:175px;margin-top:30px;float:left;height:70px;">
		<h4 class="quicklinks-title" style="margin-left:0px;width:130px;"> Connect with us </h4>
		<i class="fa fa-facebook social" style="margin-left:0px;"></i>  <i class="fa fa-twitter social"></i>  <i class="fa fa-linkedin social"></i>
		</div>
		<div class="quicklinks" style="width:660px;margin-left:50px;margin-top:30px;float:left;height:70px;">
		<h4 class="quicklinks-title" style="margin-left:0px;width:100px;"> Quick Links </h4>
		<p class="quicklinkstext"> <span style="cursor:pointer;"> Home </span> <span style="margin-left:40px;"> </span>|<span style="margin-left:40px;"> </span><span style="cursor:pointer;"> Contact us </span> <span style="margin-left:40px;"> </span>|<span style="margin-left:40px;"> </span><span style="cursor:pointer;"> Terms of Service </span> </p>
		</div>
		</div>
		
		<div class="india">
		<div class="indiatext"><h5 style="font-weight:normal;"> Made with </h5></div>
		<div class="indiatext"><img src="./images/footer/heart.png" style="height:16px;margin-top:20px;margin-left:5px;margin-right:5px;"></div>
		<div class="indiatext"><h5 style="font-weight:normal;"> in </h5></div>
		<div class="indiatext"><img src="./images/footer/indiaflag.png" style="height:16px;margin-top:20px;margin-left:10px;margin-right:5px;"></div>
		</div>
		
	</div>
</div>


</body>
</html>
