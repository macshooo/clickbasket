<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>ClickBasket Change Password Request</title>
		<style media="all" type="text/css">
		td, p, h1, h3, a {
			font-family: Helvetica, Arial, sans-serif;
		}
		a.bodylink {
			color: #8f98a0;
		}
		a.bodylink:hover {
			color: #ffffff;
		}
		.ds_flag {
			font-size: 10px;
			color: #111111;
			height: 18px;
			line-height: 19px;
			padding: 4px 0 4px 18px;
			white-space: nowrap;
		}
	</style>
</head>
<body bgcolor="" LINK="#6d93b8" ALINK="#9DB7D0" VLINK="#6d93b8" TEXT="#d7d7d7" style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #d7d7d7;">
<table style="width: 538px; background-color: #393836;" align="center" cellspacing="0" cellpadding="0">
	<tr>
		<td style=" height: 65px; background-color: #000000; border-bottom: 1px solid #4d4b48;">
			<a href="<?= base_url(); ?>"><img src="<?php echo base_url('assets/images/email/header.png'); ?>" width="538" height="65" alt="ClickBasket"></a>
		</td>
	</tr>
	<tr>
	<td bgcolor="#365271">
		<table width="470" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-left: 5px; padding-right: 5px;">


			<tr bgcolor="#365271">
				<td style="padding-top: 32px;">
					<span style="font-size: 24px; color: #66c0f4; font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
						Hello <?php echo $vendordata->vendor_fname; ?>,
					</span>
					<br><br>
					<span style="font-size: 18px; color: #c6d4df; font-family: Arial, Helvetica, sans-serif;">
						Welcome to ClickBasket! In order to access your acount, you have to verify it first.
						<br> <br>
						Please click the link below to verify your account and change your password:
						<br><br><br>
						<center>
							<a style="color:#FF5722;" target="__new" href="<?= base_url(); ?>login/confirmAccount?vendor_key=<?php echo $vendordata->vendor_key; ?>&confirmation=true&vendor_id=<?php echo $vendordata->vendor_id; ?>">
								VERIFY ACCOUNT
							</a>
						</center>
<br><br><br>
					</span>
				</td>
			</tr>


		</table>
	</td>
	</tr>
	<tr style="background-color: #172233;">
		<td style="padding: 12px 24px;">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td style=" font-size: 11px; color: #595959; padding-left: 12px;">
						&copy; ClickBasket.  Cebu City, Philippines.<br>
						All rights reserved. All trademarks are property of their respective owners in the Philippines
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>
