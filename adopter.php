<?php
	include 'includes/header.php';
?>

<div class="container">
	<section id="adopter">
		<div class="row">
			<div class="side_nav col-md-3">
				<div class="link row">
					<ul>
						<li>
							<a href="#">Notre histoire</a>
<!--							<span><img src="assets/images/help_css/liste_puce_img.png" alt=""></span>-->
						</li>
						<li>
							<a href="#">Notre action sur le terrain</a>
<!--							<span><img src="assets/images/help_css/liste_puce_img.png" alt=""></span>-->
						</li>
						<li>
							<a href="#">Les trappages</a>
<!--							<span><img src="assets/images/help_css/liste_puce_img.png" alt=""></span>-->
						</li>
						<li>
							<a href="#">Les sauvetages</a>
<!--							<span><img src="assets/images/help_css/liste_puce_img.png" alt=""></span>-->
						</li>
						<li>
							<a href="#">es stérilisations</a>
<!--							<span><img src="assets/images/help_css/liste_puce_img.png" alt=""></span>-->
						</li>
						<li>
							<a href="#">Les soins quotidiens</a>
<!--							<span><img src="assets/images/help_css/liste_puce_img.png" alt=""></span>-->
						</li>
						<li>
							<a href="#">Ils font parti de l'asso'</a>
<!--							<span><img src="assets/images/help_css/liste_puce_img.png" alt=""></span>-->
						</li>
					</ul>			
				</div>
				<div class="logo row">
					<div class="col-md-3">
						<img src="assets/images/faire_un_don.jpg" alt="logo">
					</div>
					<div class="col-md-3">
						<img src="assets/images/faire_un_don.jpg" alt="logo">
					</div>
					<div class="col-md-3">
						<img src="assets/images/faire_un_don.jpg" alt="logo">
					</div>
					<div class="col-md-3">
						<img src="assets/images/faire_un_don.jpg" alt="logo">
					</div>
				</div>
			</div>

			<div class="block_patchwork col-md-9">
				<div class="row">
				<?php for ($i=0; $i < 20; $i++): ?>
					<div class="col-md-4">
						<div class="test_img">
							<div class="hovereffect">
								<img class="img-responsive" style="z-index: 0;" src="assets/images/img_slider/chat_1.jpg" alt="img_chat">
								<div class="overlay">
									<h4>Gyda</h4>
									<p>Ne vous fiez pas à mon premier abord timide, je suis une vrai petite coquine...</p>
		           					<a href="#">link here</a>	
								</div>
	           				</div>
						</div>
					</div>
				<?php endfor; ?>
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, quisquam velit rem ipsam quasi, quae voluptatibus eaque exercitationem animi ratione dolor distinctio accusantium nihil, nostrum dicta deleniti beatae voluptas quibusdam.</p>
					</div>

				</div>
			</div>
		</div>
	</section>	
</div>

<?php
	include 'includes/footer.php';
?>

<script>
	height_adopter();
	
</script>