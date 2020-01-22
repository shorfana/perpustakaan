
</style>

				    <!--START MENU TOGGLE ICON-->
				    <div class="menu-toggle">
					    <div class="one"></div>
					    <div class="two"></div>
					    <div class="three"></div>
				  	</div>
				    <nav>
						<ul class="hidden">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="categories.html">Categories</a></li>
                            <li><a href="books.html">Our Books</a></li>
                            <li><a href="authors.html">Authors</a></li>
                            <li><a href="customer-account.html">Sign In</a></li>
                            <li><a href="store-pages.html">Store's All Pages</a></li>
                        </ul>
					</nav>
					<!--END MENU TOGGLE ICON-->
				</div>
			</div>
		</div>
		<!--END MENU SECTION-->
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
											<img src="images/image-200x250.jpg" alt="Design & Web design">
											<div class="icons">
												<a><i class="fa fa-shopping-cart" aria-hidden="true"></i></a><a><i class="fa fa-star" aria-hidden="true"></i></a><a><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											</div>
											<div class="divy">
																<div class="book-desc">
																		<a href="<?php echo base_url()."home/book/".$b->ID_BUKU ?>" class="head head-blacky"><?php echo $b->TITLE ?></a>
																		<span class="line-blacky"></span>
																	<div class="book-tags book-tag-blacky">Author:
																		<a href="author-profile.html" class="book-tag book-tag-blacky"><?php echo $b->AUTHOR ?></a>.
																	</div>
																	<div class="book-tags book-tag-blacky">Quantity:
																		<a href="book.html" class="book-tag book-tag-blacky"><?php echo $b->QTY ?></a>.
																	</div>
																	<div class="book-tags book-tag-blacky">Categories:
																		<a href="books.html" class="book-tag book-tag-blacky"><?php echo $b->KATEGORI ?></a>
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
