<!-- Slider -->
<link rel="stylesheet" href="slider/ism/css/my-slider.css" />
<script src="slider/ism/js/ism-2.2.min.js"></script>

<div class="ism-slider" data-play_type="loop" data-image_fx="zoompan" id="my-slider">
	<ol>
	
			<?php include 'config/config.php'; ?>
			<?php
			$slidesql = "SELECT * FROM pageslide ORDER BY id DESC";
			$result = mysqli_query($conn, $slidesql);

			if (mysqli_num_rows($result) > 0) {
				while ($image = mysqli_fetch_assoc($result)) {
			?>
					<li>
						<img src="admin/Imageslide/<?= $image['image'] ?>">
					</li>

			<?php	}
			}		?>

	</ol>
</div>
<!-- Slider END -->