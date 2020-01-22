
		<!--END MENU SECTION-->
		<!--START HOME-BACKGROUND SECTION -->
		<div class="home-background">
			<div class=container>
				<div class="home-background-head-text">
					<h1><?php echo $perpus->NAMA_P ?></h1>
					<p>Lorem Ipsum is simply dummy text of the printing</p>
					<button class="btn btn-lg first-btn" type="button">Let's Start Reading </button>
					<div class="arrow-down">
						<i class="fa fa-angle-down"></i>
					</div>
				</div>
			</div>
		</div>
		<!--END BA-GROUND BACKGROUND SECTION -->

		<!--START HOME-PAGE-SECTION-THREE SECTION -->
		<div class="home-page-section-three wrapper">
			<div class="container">
				<div class="new-releases">
					<div class="home-page-section-three-head">
						<h2 class="main-color">Buku Baru</h2>
						<span class="first-line"></span>
					</div>
					<div class="parts">
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
							                    <div class="book-tags book-tag-blacky">Format:
							                    	<a href="book.html" class="book-tag book-tag-blacky">eBook</a>, <a href="book.html" class="book-tag book-tag-blacky">Softcover</a>.
							                    </div>
							                    <div class="book-tags book-tag-blacky">Categories:
							                    	<a href="books.html" class="book-tag book-tag-blacky"><?php echo $b->KATEGORI ?></a>
							                    </div>
						                    </div>
						                    <span class="line-blacky"></span>
											<a href="book.html" class="book-price main-color">Price:
												<span class="price-number-after">10$</span>
											</a>
					                    </div>
									</div>
								</div>
							<?php endforeach; ?>
							<!--END BOOK PART -->

						</div>
					</div>
					<div class="book-cart-btn">
						<a class="btn btn-lg new-releases-view-all-btn" href="books.html">view all <i class="fa fa-angle-right"></i></a>
					</div>
				</div>

			</div>
		</div>
		<!--END HOME-PAGE-SECTION-THREE SECTION -->
		<!--START HOME-PAGE-SECTION-FOUR SECTION -->
		<div class="home-page-section-four wrapper">
			<div class="container">
				<div class="bestsellers">
					<div class="home-page-section-four-head">
						<h2 class="second-color">Buku Best Seller</h2>
						<span class="second-line"></span>
					</div>
					<div class="parts">
						<div class="row">
							<!--START BOOK PART -->
							<div class="book-part col-xs-12 col-sm-6 col-md-3">
								<div class="book-cart">
								    <img src="images/image-200x250.jpg" alt="Design & Web design">
								  	<div class="icons">
								  		<a><i class="fa fa-shopping-cart" aria-hidden="true"></i></a><a><i class="fa fa-star" aria-hidden="true"></i></a><a><i class="fa fa-share-alt" aria-hidden="true"></i></a>
								  	</div>
								    <div class="divy">
					                    <div class="book-desc">
					                        <a href="book.html" class="head head-blacky">Design & Web design</a>
					                        <span class="line-blacky"></span>
						                    <div class="book-tags book-tag-blacky">Author:
						                    	<a href="author-profile.html" class="book-tag book-tag-blacky"> Ahmed Hamdy</a>.
						                    </div>
						                    <div class="book-tags book-tag-blacky">Format:
						                    	<a href="book.html" class="book-tag book-tag-blacky">eBook</a>, <a href="book.html" class="book-tag book-tag-blacky">Softcover</a>.
						                    </div>
						                    <div class="book-tags book-tag-blacky">Categories:
						                    	<a href="books.html" class="book-tag book-tag-blacky">Adventures</a>, <a href="books.html" class="book-tag book-tag-blacky">Action</a>, <a href="books.html" class="book-tag book-tag-blacky">Action</a>.
						                    </div>
					                    </div>
					                    <span class="line-blacky"></span>
										<a href="book.html" class="book-price main-color">Price:
											<span class="price-number-after">10$</span>
										</a>
				                    </div>
								</div>
							</div>
							<!--END BOOK PART -->
						</div>
					</div>
					<div class="book-cart-btn">
						<a class="btn btn-lg bestsellers-view-all-btn" href="books.html">view all <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--END HOME-PAGE-SECTION-FOUR SECTION -->

		<!--END HOME-PAGE-SECTION-SIX SECTION -->
		<!--START HOME-PAGE-SECTION-SEVEN SECTION -->
		<!-- <div class="home-page-section-seven wrapper">
			<div class="container">
				<div class="ournews">
					<div class="home-page-section-seven-head">
						<h2 class="main-color">Our News</h2>
						<span class="first-line"></span>
					</div>
					<div class="accordian">
					    <ul>
							<li>
								<div class="image_title">
									<h3>Turkey</h3>
									<i>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."</i>
									<a href="blog-post-page.html" class="ournews-accordian-btn">Find out more </a>
								</div>
								<img src="images/image-640x425.jpg" alt="Istanbul Mescid"/>
							</li>
							<li>
								<div class="image_title">
									<h3>Turkey</h3>
									<i>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."</i>
									<a href="blog-post-page.html" class="ournews-accordian-btn">Find out more </a>
								</div>
								<img src="images/image-640x425.jpg" alt="Ayasofya Mescid"/>
							</li>
							<li>
								<div class="image_title">
									<h3>Egypt</h3>
									<i>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."</i>
									<a href="blog-post-page.html" class="ournews-accordian-btn">Find out more </a>
								</div>
								<img src="images/image-640x425.jpg" alt="Temple wall"/>
							</li>
							<li>
								<div class="image_title">
									<h3>Egypt</h3>
									<i>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."</i>
									<a href="blog-post-page.html" class="ournews-accordian-btn">Find out more </a>
								</div>
								<img src="images/image-640x425.jpg" alt="Karnak Temple"/>
							</li>
							<li>
								<div class="image_title">
									<h3>Egypt</h3>
									<i>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."</i>
									<a href="blog-post-page.html" class="ournews-accordian-btn">Find out more </a>
								</div>
								<img src="images/image-640x425.jpg" alt="Pyramids"/>
							</li>
						</ul>
					</div>
					<div class="book-cart-btn">
						<a class="btn btn-lg ournews-view-all-btn" href="blog-post-page.html">view all <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div> -->
		<!--END HOME-PAGE-SECTION-SEVEN SECTION -->
		<!-- // -->

        <!--END HOME-PAGE-OUR-CLIENTS SECTION -->
