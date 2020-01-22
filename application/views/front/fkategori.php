<style type="text/css">
.categories-page-background {
	background-image: url('<?php echo base_url()."assets/images/kategori.jpg"?>'); 
}
</style>
		<!--START CATEGORIES-PAGE-BACKGROUND SECTION -->
		<div class="categories-page-background pages-background">
			<h1>Kategori Buku</h1>
		</div>
		<!--END CATEGORIES-PAGE-BACKGROUND SECTION -->

		<!--START CATEGORIES-PAGE-CONTENT SECTION -->
		<div class="categories-page-content parts wrapper">
			<div class="container">
				<div class="categories-page-content-head">
					<h2 class="main-color">Kategori Buku</h2>
					<span class="first-line"></span>
				</div>
				<div class="row">
					<!--START CATEGORY PART -->
					<?php foreach ($kategori as $k): ?>
					<div class="category-part col-xs-12 col-sm-6 col-md-3">
						<div class="category-cart">
						    <img src="<?php echo base_url()."assets/images/kategori/images.jpg" ?>" alt="Animals & Pets">
							<div class="category-divy">
			                    <span class="line-blacky"></span>
			                    <div class="category-desc">
			                        <a href="<?php echo base_url()."books" ?>" class="category-head head-blacky"><?php echo $k->KATEGORI ?></a>
			                    </div>
			                </div>
						</div>
					</div>

					<?php endforeach; ?>
					<!--END CATEGORY PART -->

				</div>
			</div>
		</div>
		<!--END CATEGORIES-PAGE-CONTENT SECTION -->
