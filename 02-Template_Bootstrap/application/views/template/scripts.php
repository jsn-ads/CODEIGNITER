        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="<?= BASE_URL();?>public/js/bootstrap.min.js"></script>
		<script src="<?= BASE_URL();?>public/js/owl.carousel.min.js"></script>
		<!-- <script src="<?= BASE_URL();?>public/js/cbpAnimatedHeader.js"></script> -->
		<script src="<?= BASE_URL();?>public/js/theme-scripts.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="<?= BASE_URL();?>public/js/ie10-viewport-bug-workaround.js"></script>

		<?php if(isset($scripts)):?>
			<?php foreach($scripts as $item):?>
				<?php $script = base_url().'public/js/'.$item; ?>
				<script src="<?= $script?>" type="text/javascript"></script>
			<?php endforeach;?>
		<?php endif;?>
	</body>
</html>