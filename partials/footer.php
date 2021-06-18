<footer>
	<svg id="wavify_footer">
		<path id="wave">
	</svg>
	<div id="footer-desktop">
		<div class="footer-wrap">
			<div class="inner-wrap">
				<div id="section_footer">
				 <div id="section_footer_links">
					<div class="contact-section">
						<a href="#" class="button">Contact me</a>
						<div class="modal-overlay">
						<div class="modal-wrapper">
						<label class="close" for=""></label>
						<h2 id="modal-title">Send me a message</h2>
						<form  action="partials/process-mail.php" class="message-form" method="POST">
							<div class="row">
								<div class="input-box col-sm-5 col-12">
									<label for="" class="input-label">First Name</label>
									<input type="text" class="input-text" name="prenom">
									<hr class="underline">
									<hr class="underline-focus">
								</div>
								<div class="input-box col-sm-5 col-12">
									<label for="" class="input-label">Last Name</label>
									<input type="text" class="input-text" name="nom">
									<hr class="underline">
									<hr class="underline-focus">
								</div>
							</div>
							<div class="input-box">
								<label for="" class="input-label">E-mail</label>
								<input type="text" class="input-text" name="email">
								<hr class="underline">
								<hr class="underline-focus">
							</div>
							<div class="input-box">
								<label for="" class="input-label">Object</label>
								<input type="text" class="input-text" name="objet">
								<hr class="underline">
								<hr class="underline-focus">
							</div>
							<div class="input-box textarea">
								<label for="" class="input-label">Message</label>
								<textarea class="input-text" name="message"></textarea>
								<hr class="underline">
								<hr class="underline-focus">
							</div>
							<div class="input-button">
								<button id="button-styley" class="btn btn-info" type="submit" name="envoi">Send</button>
							</div>
						</form>
						</div>
						</div>
					</div>
					</div>
					<div class="row">
						<div class="body-social col-12">
							<div class="social_links">
							<a href="https://github.com/Anthony5997" target="_blank">
								<span class="fa-stack fa-lg ig combo">
								<i class="fab fa-github fa-stack-1x fa-inverse icon" style="color:white;" ></i>
								</span>
							</a>
							<a href="https://www.linkedin.com/in/anthony-rita-b23889178/" target="_blank">
								<span class="fa-stack fa-lg fb combo">
								<i class="fab fa-circle fa-stack-2x circle" style="color:white;"></i>
								<i class="fab fa-linkedin fa-stack-1x fa-inverse icon" style="color:white;"></i>
								</span>
							</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer-mobile">
		<div class="footer-wrap">
			<div class="inner-wrap">
				<div id="section_footer-m">
					<div id="section_footer_links-m">
						<div class="section-footer-linksplit">
							<div class="contact-section">
								<a href="#" class="button">Contact me</a>
								<div class="modal-overlay">
									<div class="modal-wrapper">
										<label class="close" for=""></label>
										<h2 id="modal-title">Send me a message</h2>
										<form class="message-form" method="POST" action="partials/process-mail.php">
											<div class="row">
												<div class="input-box col-sm-5 col-12">
													<label for="" class="input-label">First Name</label>
													<input type="text" class="input-text" name="prenom">
													<hr class="underline">
													<hr class="underline-focus">
												</div>
												<div class="input-box col-sm-5 col-12">
													<label for="" class="input-label">Last Name</label>
													<input type="text" class="input-text" name="nom">
													<hr class="underline">
													<hr class="underline-focus">
												</div>
											</div>
											<div class="input-box">
												<label for="" class="input-label">E-mail</label>
												<input type="text" class="input-text" name="email">
												<hr class="underline">
												<hr class="underline-focus">
											</div>
											<div class="input-box">
												<label for="" class="input-label">Object</label>
												<input type="text" class="input-text" name="objet">
												<hr class="underline">
												<hr class="underline-focus">
											</div>
											<div class="input-box textarea">
												<label for="" class="input-label">Message</label>
												<textarea class="input-text" name="message"></textarea>
												<hr class="underline">
												<hr class="underline-focus">
											</div>
											<div class="input-button">
												<button id="button-styley" class="btn btn-info" type="submit" name="envoi">Send</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php include('partials/footer-scripts.php');?>
</footer>