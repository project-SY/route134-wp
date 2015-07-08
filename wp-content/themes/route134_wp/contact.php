<?php
/*
Template Name:contact
*/
?>
<?php include('header.php'); ?>
	<div class="content-width clearfix">
		<div class="content-column">
			<div id="contact">
				<div id="pankuzu" class="border-btm-gray">
					ぱんくずリストが入ります。
				</div>
				<h2>お問い合わせ</h2>
				<p class="discription">Route134へのお問い合わせページです。</p>
				<h3>Route134に関するお問い合わせ</h3>
				<form class="contact-form">
					<p><input type="text" name="name" maxlength="255" placeholder="name"></p>
					<p><input type="text" name="email" maxlength="255" placeholder="email"></p>
					<p><input type="text" name="subject" maxlength="255" placeholder="subject"></p>
					<p>
						<textarea name="message" rows="6" maxlength="255" placeholder="message"></textarea>
					</p>
					<p>
						<input type="submit" class="button" value="submit" >
					</p>
				</form>
			</div>
			<!-- priacy end -->
		</div>
		<!-- content-column end -->
	</div>
	<!-- content-width end -->
<?php include('footer.php'); ?>