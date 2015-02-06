<!DOCTYPE HTML>
<head>
	<title>Email Signature Setup - Destiny Rescue</title>

	<!-- Favicon Image -->
	<link rel="icon" href="http://www.destinyrescue.org/wp-content/themes/theme-destinyrescue/favicon.png" type="image/png" />
    <link rel="shortcut icon" href="http://www.destinyrescue.org/wp-content/themes/theme-destinyrescue/favicon.png" type="image/png" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<div class="page-header">
		<h1><img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/dr-hand.png" alt="Handprint" width="46px" height="46px" style="margin-top:-6px" /> Email Signature Generator</h1>
	</div>

	<!-- SIGNATURE DETAILS -->
	<form id="email-signature-form" action="result.php" method="post" target="_blank" autocomplete="off">
		<br>
		<p>Please use the form below to create your email signature. Follow the instructions at the bottom of this page to add the signature into your email client.</p><br>

		<table class="contact-details" width="94%" cellspacing="8" style="margin: 0 auto;">
			<tr>
				<td width="200px"><label for="full-name">Full Name *</label></td>
				<td colspan="2"><input type="text" name="full-name" placeholder="Tony Kirwan" /></td>
			</tr>
			<tr>
				<td><label for="position">Title/Position *</label></td>
				<td colspan="2"><input type="text" name="position" placeholder="President &amp; Founder" /></td>
			</tr>
			<tr>
				<td><label for="country">Country *</label></td>
				<td colspan="2">
					<select name="country">
						<option selected disabled>-- Select a Country --</option>
						<optgroup label="Funding Nations">
							<option value="Australia">Australia</option>
							<option value="New Zealand">New Zealand</option>
							<option value="United States">United States</option>
						</optgroup>
						<optgroup label="Project Nations">
							<option value="Cambodia">Cambodia</option>
							<option value="India">India</option>
							<option value="Loas">Loas</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Myanmar">Myanmar</option>
							<option value="Philippines">Philippines</option>
							<option value="South Africa">South Africa</option>
							<option value="Thailand-ChiangMai">Thailand (Chiang Mai)</option>
							<option value="Thailand-ChiangRai">Thailand (Chiang Rai)</option>
						</optgroup>
						<optgroup label="Other Locations">
							<option value="International">International Office</option>
						</optgroup>
					</select>
				</td>
			</tr>
			<tr id="mailing-address-field" style="display:none;">
				<td><label for="address">Mailing Address</label></td>
				<td colspan="2"><input type="text" name="address" placeholder="(Optional)" /></td>
			</tr>
			<tr>
				<td><label for="email">Email Address *</label></td>
				<td colspan="2">
					<input class="email-user" type="text" name="email" maxlength="50" placeholder="(Required)" />
					<span class="email-domain">@destinyrescue.org</span>
				</td>
			</tr>
			<tr>
				<td><label for="skype">Skype Name</label></td>
				<td colspan="2"><input type="text" name="skype" placeholder="(Optional)" /></td>
			</tr>
			<tr>
				<td><label for="primary-number">Primary Phone *</label></td>
				<td width="95px">
					<select name="primary-number-type" style="background-position: 92% center;">
						<option value="Phone" selected>Phone</option>
						<option value="Office">Office</option>
						<option value="Mobile">Mobile</option>
						<option value="Fax">Fax</option>
					</select>
				</td>
				<td><input type="text" name="primary-number" placeholder="(Required)" /></td>
			</tr>
			<tr>
				<td><label for="secondary-number">Secondary Phone</label></td>
				<td width="95px">
					<select name="secondary-number-type" style="background-position: 92% center;">
						<option value="Phone">Phone</option>
						<option value="Office">Office</option>
						<option value="Mobile" selected>Mobile</option>
						<option value="Fax">Fax</option>
					</select>
				</td>
				<td><input type="text" name="secondary-number" maxlength="30" placeholder="(Optional)" /></td>
			</tr>
		</table>

		<!-- SIGNATURE PREVIEW -->
		<div class="signature-preview">
			<table style="width:100%;">
				<tr>
					<td style="width:58%; border-right: 4px solid #f47622; padding-right: 1.5%;">
						<table width="100%">
							<tr>
								<td width="40px">
									<img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/dr-hand.png" alt="Handprint" width="46px" height="46px" />
								</td>
								<td>
									<h2 id="full-name" style="font:bold 16px/18px Arial, sans-serif; letter-spacing:-1px; text-transform:uppercase; color:#020202; margin:0; padding:0;">Tony Kirwan</h2>
									<h3 id="position" style="font:bold 14px/16px Arial, sans-serif; letter-spacing:-1px; text-transform:uppercase; color:#e8722c; margin:0; padding:0;">President &amp; Founder</h3>
									<h4 id="location" style="font:normal 11px/14px Arial, sans-serif; color:#e8722c; margin:0; padding:0 0 4px 0;">Destiny Rescue International</h4>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<address id="email-address" style="font: normal 10px/15px Arial, sans-serif; color:#020202;"></address>
									<address id="skype-name" style="font: normal 10px/15px Arial, sans-serif; color:#020202;"></address>
									<address id="phone-number" style="font: normal 10px/15px Arial, sans-serif; color:#020202;"></address>
									<address id="address" style="font: normal 10px/15px Arial, sans-serif; color:#020202;">
										PO Box 251, Muang Chiang Rai 57000, Thailand
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
									<a href="https://www.facebook.com/destinyrescue" target="_blank" title="Facebook" style="text-align: center; display: inline-block; margin: 0px 8px;">
										<img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/facebook.png" alt="Facebook" width="18px" height="18px" />
									</a>
									<a href="https://twitter.com/destinyrescue" target="_blank" title="Twitter" style="text-align: center; display: inline-block; margin: 0px 8px;">
										<img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/twitter.png" alt="Twitter" width="18px" height="18px" />
									</a>
									<a href="http://instagram.com/destiny_rescue" target="_blank" title="Instagram" style="text-align: center; display: inline-block; margin: 0px 8px;">
										<img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/instagram.png" alt="Instagram" width="18px" height="18px" />
									</a>
									<a href="https://vimeo.com/destinyrescue" target="_blank" title="Vimeo" style="text-align: center; display: inline-block; margin: 0px 8px;">
										<img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/vimeo.png" alt="Vimeo" width="18px" height="18px" />
									</a>
									<a href="http://www.linkedin.com/company/destiny-rescue" target="_blank" title="LinkedIn" style="text-align: center; display: inline-block; margin: 0px 8px;">
										<img src="http://intranet.destinyrescue.org/resources/email/signature-generator/images/linkedin.png" alt="LinkedIn" width="18px" height="18px" />
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>

		<table width="100%" cellspacing="8" style="padding-top:20px;">
			<tr>
				<td width="65%">
					<p>In the new window, press <strong>CTL + A</strong> (Windows) or <strong>CMD + A</strong> (Mac) to select the content. <strong>Copy/paste</strong> this content into your email client using one of the links listed below.<p>
				</td>
				<td width="35%">
					<input type="submit" name="create-signature" value="Create Signature" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<br>
					<ul class="client-links">
						<li><a href="http://mydesignpad.com/how-to-install-html-email-signature-for-google-gmail/" target="_blank">Gmail</a></li>
						<li><a href="http://mydesignpad.com/how-to-install-html-email-signature-for-microsoft-outlook-2010-windows/" target="_blank">Outlook</a></li>
						<li><a href="http://mydesignpad.com/create-a-html-email-signature-for-mac-os-x-mountain-lion-10-8/" target="_blank">Mac Mail</a></li>
						<li><a href="http://mydesignpad.com/how-to-create-complex-html-email-signatures-for-mozilla-thunderbird/" target="_blank">Thunderbird</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</form>
</body>

<!-- JavaScript Files Go Here -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/placeholders.js" type="text/javascript"></script>
<script>
	$(function(){

		$('input[name="full-name"]').keyup(function(){
			var full_name = $('input[name="full-name"]').val();
			var position = $('input[name="position"]').val();

			if(full_name != ''){
				$('#full-name').text(full_name);
			}
			else{
				$('#full-name').text('Tony Kirwan');
			}
		});

		$('input[name="position"]').keyup(function(){
			var position = $('input[name="position"]').val();

			if(position != ''){
				$('#position').text(position);
			}
			else{
				$('#position').text('President & Founder');
			}
		});

		$('select[name="country"], select[name="primary-number-type"], select[name="secondary-number-type"]').change(function(){
			input_field_callback();
		});

		$('input[name="address"], input[name="email"], input[name="skype"]').keyup(function(){
			input_field_callback();
			vertical_align_logo();
		});

		$('input[name="primary-number"], input[name="secondary-number"]').keyup(function(){
			input_field_callback();
		});

		//FORM SUBMISSION
		$('#email-signature-form').submit(function(){
			var full_name = $('#email-signature-form input[name="full-name"]').val();
			var position = $('#email-signature-form input[name="position"]').val();
			var country = $('#email-signature-form select[name="country"]').val();
			var mailing_address = $('#email-signature-form select[name="address"]').val();
			var email_address = $('#email-signature-form input[name="email"]').val();

			var primary_number_prefix = $('#email-signature-form select[name="primary-number-type"]').val();
			var primary_number = $('#email-signature-form input[name="primary-number"]').val();
			var secondary_number_prefix = $('#email-signature-form select[name="secondary-number-type"]').val();
			var secondary_number = $('#email-signature-form input[name="secondary-number"]').val();

			if(full_name != '' && position != ''){
				if(country != null){
					if(email_address != ''){
						if(primary_number != ''){
							if(secondary_number == ''){
								return true;
							}
							else{
								if(primary_number_prefix != secondary_number_prefix && primary_number != secondary_number){
									return true;
								}
								else{
									alert('You may not use the same phone number/type twice.');
									return false;
								}
							}
						}
						else{
							alert('Please enter a primary phone number.');
							return false;
						}
					}
					else{
						alert('Please enter an email address.');
						return false;
					}
				}
				else{
					alert('Please select a country.');
					return false;
				}
			}
			else{
				alert('Please fill in your name and job title/position.');
				return false;
			}
		});

		function input_field_callback(){
			var country = $('#email-signature-form select[name="country"]').val();
			var mailing_address = $('#email-signature-form input[name="address"]').val();
			var email_address = $('#email-signature-form input[name="email"]').val();
			var skype_name = $('#email-signature-form input[name="skype"]').val();
			var primary_number_prefix = $('#email-signature-form select[name="primary-number-type"]').val();
			var primary_number = $('#email-signature-form input[name="primary-number"]').val();
			var secondary_number_prefix = $('#email-signature-form select[name="secondary-number-type"]').val();
			var secondary_number = $('#email-signature-form input[name="secondary-number"]').val();

			if(country == 'International' || country == '' || country == null){
				office_name = 'Destiny Rescue International';
				$('#email-signature-form #mailing-address-field').hide();
				$('#location').text(office_name);
				mailing_address = 'PO Box 251, Muang Chiang Rai 57000, Thailand';
			}
			else if(country == 'Thailand-ChiangMai'){
				office_name = 'Destiny Rescue Thailand';
				$('#email-signature-form #mailing-address-field').hide();
				$('#location').text(office_name);
				mailing_address = '360/38-39 Moo 1 Sansai Noi, Sansai Chiang Mai, Thailand';
			}
			else if(country == 'Thailand-ChiangRai'){
				office_name = 'Destiny Rescue Thailand';
				$('#email-signature-form #mailing-address-field').hide();
				$('#location').text(office_name);
				mailing_address = 'PO Box 251, Muang Chiang Rai 57000, Thailand';
			}
			else if(country == 'Australia'){
				office_name = 'Destiny Rescue Australia';
				$('#email-signature-form #mailing-address-field').hide();
				$('#location').text(office_name);
				mailing_address = '5/23 Premier Circuit Warana, QLD 4575 Australia';
			}
			else if(country == 'New Zealand'){
				office_name = 'Destiny Rescue New Zealand';
				$('#email-signature-form #mailing-address-field').hide();
				$('#location').text(office_name);
				mailing_address = 'PO Box 34085, Birkenhead, Auckland, 0746 New Zealand';
			}
			else if(country == 'United States'){
				office_name = 'Destiny Rescue USA';
				$('#email-signature-form #mailing-address-field').hide();
				$('#location').text(office_name);
				mailing_address = 'PO Box 752, North Webster Indiana 46555 USA';
			}
			else if(country == 'Cambodia'){
				office_name = 'Destiny Rescue Cambodia';
				$('#email-signature-form #mailing-address-field').show();
				$('#location').text(office_name);
			}
			else if(country == 'India'){
				office_name = 'Destiny Rescue India';
				$('#email-signature-form #mailing-address-field').show();
				$('#location').text(office_name);
			}
			else if(country == 'Loas'){
				office_name = 'Destiny Rescue Loas';
				$('#email-signature-form #mailing-address-field').show();
				$('#location').text(office_name);
			}
			else if(country == 'Mozambique'){
				office_name = 'Destiny Rescue Mozambique';
				$('#email-signature-form #mailing-address-field').show();
				$('#location').text(office_name);
			}
			else if(country == 'Myanmar'){
				office_name = 'Destiny Rescue Myanmar';
				$('#email-signature-form #mailing-address-field').show();
				$('#location').text(office_name);
			}
			else if(country == 'Philippines'){
				office_name = 'Destiny Rescue Philippines';
				$('#email-signature-form #mailing-address-field').show();
				$('#location').text(office_name);
			}
			else if(country == 'South Africa'){
				office_name = 'Destiny Rescue South Africa';
				$('#email-signature-form #mailing-address-field').show();
				$('#location').text(office_name);
			}

			if(mailing_address != ''){
				$('#address').text(mailing_address);
			}
			else{
				$('#address').text('');
			}

			if(email_address != ''){
				$('#email-address').html('Email: <a href="mailto:' + email_address + '@destinyrescue.org" target="_blank">' + email_address + '@destinyrescue.org</a>');
			}
			else{
				$('#email-address').html('');
			}
			
			if(skype_name != ''){
				$('#skype-name').html('Skype: <a href="skype:' + skype_name + '?userinfo">' + skype_name + '</a>');
			}
			else{
				$('#skype-name').html('');
			}

			if(primary_number != ''){
				if(secondary_number != ''){
					$('#phone-number').html(primary_number_prefix + ': ' + primary_number + ' | ' + secondary_number_prefix + ': ' + secondary_number);
				}
				else{
					$('#phone-number').text(primary_number_prefix + ': ' + primary_number);
				}
			}
		}

		function vertical_align_logo(){
			var outer_height = $('#logo-container').height();
			var inner_height = $('#logo').height();

			var margin_top = (outer_height - inner_height) / 3;
			$('#logo').css('margin-top', margin_top);
		}

	});
</script>

</html>