<style type="text/css">
.bookspage-background {
	background-image: url('<?php echo base_url()."assets/images/books.jpg" ?>');
}
</style>
		<!--START BOOKSPAGE-BACKGROUND SECTION-->
		<div class="bookspage-background pages-background">
			<h1>	Buku</h1>
		</div>
		<!--END BOOKSPAGE-BACKGROUND SECTION-->

		<!--START BOOKSPAGE-CONTENT Section -->
		<div class="bookspage-content wrapper">
			<div class="container">
				<div class="bookspage-body">
					<div class="bookspage-content-head">
						<h2 class="main-color">Jenis - Jenis Buku</h2>

					</div>
					<div class="parts books-list">
						<div class="row">
							<!--START BOOK PART -->
							<?php foreach ($buku as $b): ?>
								<div class="book-part col-xs-12 col-sm-6 col-md-3">
									<div class="book-cart">
											<img src="<?php echo base_url()."assets/images/buku/".$b->COVER_BUKU ?>" alt="Design & Web design">
											<div class="divy">
																<div class="book-desc">
																		<a href="<?php echo base_url()."home/book/".$b->ID_BUKU ?>" class="head head-blacky"><?php echo $b->TITLE ?></a>
																		<span class="line-blacky"></span>
																	<div class="book-tags book-tag-blacky">Author:
																		<a href="#" class="book-tag book-tag-blacky"><?php echo $b->AUTHOR ?></a>.
																	</div>
																	<div class="book-tags book-tag-blacky">Quantity:
																		<a href="#" class="book-tag book-tag-blacky"><?php echo $b->QTY ?></a>.
																	</div>
																	<div class="book-tags book-tag-blacky">Categories:
																		<a href="#" class="book-tag book-tag-blacky"><?php echo $b->KATEGORI ?></a>
																	</div>
																</div>
																<span class="line-blacky"></span>
															</div>
									</div>
								</div>
						<?php endforeach; ?>
							<!--END BOOK PART -->
						</div>
					</div>
					<!--START PAGE-NUMBER -->

			        <!--END PAGE-NUMBER -->
				</div>
			</div>
		</div>
		<!--END BOOKSPAGE-CONTENT Section -->
