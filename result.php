<?php 
	$full_name = $_POST['full-name'];
	$position = $_POST['position'];
	$country = $_POST['country'];
	$email_address = $_POST['email'];
	$primary_number_prefix = $_POST['primary-number-type'];
	$secondary_number_prefix = $_POST['secondary-number-type'];
	$primary_number = $_POST['primary-number'];
	$secondary_number = $_POST['secondary-number'];

	if($country == 'International'){
		$office_name = 'Destiny Rescue International';
		$address = 'PO Box 251, Muang Chiang Rai 57000, Thailand';
	}
	else if($country == 'Thailand-ChiangRai'){
		$office_name = 'Destiny Rescue Thailand';
		$address = 'PO Box 251, Muang Chiang Rai 57000, Thailand';
	}
	else if($country == 'Thailand-ChiangMai'){
		$office_name = 'Destiny Rescue Thailand';
		$address = '360/38-39 Moo 1 Sansai Noi, Sansai Chiang Mai, Thailand';
	}
	else if($country == 'Australia'){
		$office_name = 'Destiny Rescue Australia';
		$address = '5/23 Premier Circuit Warana, QLD 4575 Australia';
	}
	else if($country == 'New Zealand'){
		$office_name = 'Destiny Rescue New Zealand';
		$address = 'PO Box 34085, Birkenhead, Auckland, 0746 New Zealand';
	}
	else if($country == 'United States'){
		$office_name = 'Destiny Rescue USA';
		$address = 'PO Box 752, North Webster, Indiana 46555 USA';
	}
?>

<!-- Final Signature -->
<table style="width:550px; font-size:11px; font-family:Arial; margin:0; padding:0;">
	<tr>
		<td style="width:58%; border-right: 4px solid #f47622; padding-right: 1.5%;">
			<table width="100%">
				<tr>
					<td width="40px">
						<img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/dr-hand.png" alt="Handprint" width="46px" height="46px" />
					</td>
					<td>
						<h2 id="full-name" style="font:bold 16px/18px Arial, sans-serif; letter-spacing:-1px; text-transform:uppercase; color:#020202; margin:0; padding:0;"><?php echo $full_name; ?></h2>
						<h3 id="position" style="font:bold 14px/16px Arial, sans-serif; letter-spacing:-1px; text-transform:uppercase; color:#e8722c; margin:0; padding:0;"><?php echo $position; ?></h3>
						<h4 id="location" style="font:normal 11px/14px Arial, sans-serif; color:#e8722c; margin:0; padding:0 0 4px 0;"><?php echo $office_name; ?></h4>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<address id="email-address" style="font: normal 10px/15px Arial, sans-serif; color:#020202;">
							<?php
								if($email_address != ''){
									$print = 'Email: <a href="mailto:'.$email_address.'@destinyrescue.org" target="_blank" style="color:#020202; text-decoration:none;">'.$email_address.'@destinyrescue.org</a>';
									echo $print;
								}
							?>
						</address>
						<address style="font: normal 10px/15px Arial, sans-serif; color:#020202;">
							<?php
								if($secondary_number != ''){
									$print = $primary_number_prefix.': '.$primary_number.' | '.$secondary_number_prefix.': '.$secondary_number;
								}
								else{
									$print = $primary_number_prefix.': '.$primary_number;
								}
								echo $print;
							?>
						</address>
						<address style="font: normal 10px/15px Arial, sans-serif; color:#020202;">
							<?php 
								if($address != ''){
									echo $address;
								}
							?>
						</address>
					</td>
				</tr>
			</table>
		</td>
		<td id="logo-container" style="width:42%; padding-left: 1.5%;">
			<table id="logo" width="100%">
				<tr>
					<td>
						<a style="width:200px; margin:0 auto; display:block;" href="http://destinyrescue.org/" target="_blank" title="Destiny Rescue">
							<img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/dr-logo.png" alt="Destiny Rescue" width="200px" />
						</a>
					</td>
				</tr>
				<tr>
					<td style="text-align: center; padding-top: 8px;">
						<table id="logo" width="100%">
              <tr>
                <td>
                  <a href="https://www.facebook.com/destinyrescue" target="_blank" title="Facebook" style="text-align: center;">
                    <img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/facebook.png" alt="Facebook" width="18px" height="18px" style="text-align:center; margin-left:8px; margin-right:8px;" />
                  </a>
                </td>
                <td>
                  <a href="https://twitter.com/destinyrescue" target="_blank" title="Twitter" style="text-align: center;">
                    <img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/twitter.png" alt="Twitter" width="18px" height="18px" style="text-align:center; margin-left:8px; margin-right:8px;" />
                  </a>
                </td>
                <td>
                  <a href="http://instagram.com/destiny_rescue" target="_blank" title="Instagram" style="text-align: center;">
                    <img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/instagram.png" alt="Instagram" width="18px" height="18px" style="text-align:center; margin-left:8px; margin-right:8px;" />
                  </a>
                </td>
                <td>
                  <a href="https://vimeo.com/destinyrescue" target="_blank" title="Vimeo" style="text-align: center;">
                    <img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/vimeo.png" alt="Vimeo" width="18px" height="18px" style="text-align:center; margin-left:8px; margin-right:8px;" />
                  </a>
                </td>
                <td>
                  <a href="http://www.linkedin.com/company/destiny-rescue" target="_blank" title="LinkedIn" style="text-align: center;">
                    <img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/linkedin.png" alt="LinkedIn" width="18px" height="18px" style="text-align:center; margin-left:8px; margin-right:8px;" />
                  </a>
                </td>
              </tr>
            </table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>