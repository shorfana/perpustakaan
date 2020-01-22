<		<!--START BOOK-CONTENT SECTION-->
		<div class="book-content parts wrapper">
			<div class="container">
				<div class="book-content-head">
					<h2 class="main-color">Book Details</h2>
					<span class="first-line"></span>
				</div>
				<div class="row book-content-body">
					<div class="col-md-4">
						<div class="book-img">
							<img src="images/image-500×600.jpg" alt="SOME THINGS TAKE TIME">
						</div>
					</div>
					<div class="col-md-8">
						<div class="book-details">
							<h3><font color="#000"><?php echo $buku_detail->TITLE ?></font></h3>
							<div class="book-tags book-tag-blacky">Author:
								<a href="author-profile.html" class="book-tag book-tag-blacky"><?php echo $buku_detail->AUTHOR ?></a>.
							</div>
							<div class="book-tags book-tag-blacky">Format:
								<a href="#" class="book-tag book-tag-blacky">eBook</a>, <a href="#" class="book-tag book-tag-blacky">Softcover</a>.
							</div>
							<div class="book-tags book-tag-blacky">Categories:
								<a href="books.html" class="book-tag book-tag-blacky"><?php echo $buku_detail->KATEGORI ?></a>.
							</div>
							<div class="book-tags book-tag-blacky">Publisher:
								<span class="price-number-after"><?php echo $buku_detail->PUBLISHER ?></span>
							</div>
							<div class="book-tags book-tag-blacky">Tahun:
								<span class="price-number-after"><?php echo $buku_detail->YEAR ?></span>
							</div>
					        <div class="social-media">
					        	<a class="facebook" href="<?php echo base_url()."baca/buku/".$buku_detail->ID_BUKU ?>"><img src="<?php echo base_url()."assets/images/icon/student.png" ?>" width="50" height="50" title="Baca"></a>
							</div>
							<ul class="nav nav-tabs">
							    <li class="active"><a data-toggle="tab" href="tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#home">Sinopsis</a></li>
							    <li><a data-toggle="tab" href="tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#menu1">Softcover details</a></li>
							    <li><a data-toggle="tab" href="tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#menu2">eBook details</a></li>
							    <li><a data-toggle="tab" href="tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#menu3">Reviews</a></li>
							</ul>
							<div class="tab-content">
								<!--START ABOUT THIS  BOOK-->
							    <div id="home" class="tab-pane tab-pane-about-this-books fade in active">
							        <p><?php echo $buku_detail->SINOPSIS ?></p>
							        <!-- <a class="more">read more<i class="fa fa-angle-down" aria-hidden="true"></i></a> -->
							    </div>
							    <!--END ABOUT THIS  BOOK-->
							    <!--START SOFTCOVER DETAILS-->
							    <div id="menu1" class="tab-pane tab-pane-softcover-details fade">
							    	<div class="row">
							    		<dl class="col-md-6">
							    			<dt>Softcover ISBN</dt>
							    			<dd>00-0-000-0000-0</dd>
							    			<dt>Authors</dt>
							    			<dd>Ahmed Hamdy</dd>
							    			<dt>Publication date</dt>
							    			<dd>March 07, 2017</dd>
							    		</dl>
							    		<dl class="col-md-6">
							    			<dt>Number of pages</dt>
							    			<dd>450</dd>
							    			<dt>Edition Number</dt>
							    			<dd>3</dd>
							    			<dt>Price</dt>
							    			<dd><span class="price-number-after">20$</span></dd>
							    		</dl>
							    	</div>
							    	<div class="softcover-details-btn">
										<a class="btn btn-lg softcover-book-btn" href="cart.html">Buy Softcover <i class="fa fa-angle-right"></i></a>
									</div>
							    </div>
							    <!--END SOFTCOVER DETAILS-->
							    <!--START EBOOKS DETAILS-->
							    <div id="menu2" class="tab-pane tab-pane-ebook-details fade">
							        <div class="row">
							    		<dl class="col-md-6">
							    			<dt>eBook ISBN</dt>
							    			<dd>00-0-000-0000-0</dd>
							    			<dt>Authors</dt>
							    			<dd>Ahmed Hamdy</dd>
							    			<dt>Publication date</dt>
							    			<dd>March 07, 2017</dd>
							    		</dl>
							    		<dl class="col-md-6">
							    			<dt>Number of pages</dt>
							    			<dd>450</dd>
							    			<dt>Edition Number</dt>
							    			<dd>3</dd>
							    			<dt>Price</dt>
							    			<dd><span class="price-number-after">10$</span></dd>
							    		</dl>
							    	</div>
							    	<div class="ebook-details-btn">
										<a class="btn btn-lg ebook-book-btn" href="cart.html">Buy eBook <i class="fa fa-angle-right"></i></a>
									</div>
							    </div>
							    <!--END EBOOKS DETAILS-->
							    <!--START PERSON REVIEWS -->
							    <div id="menu3" class="tab-pane tab-pane-reviews fade">
							    	<!--START PERSON REVIEW -->
							        <div class="person-comment">
										<div class="comment-pic">
											<a href="#">
												<img src="images/image-640x425.jpg" alt="Ahmed Hamdy">
											</a>
										</div>
										<div class="comment-body">
											<h4 class="comment-writer">
												<a href="#">Ahmed Hamdy</a>
											</h4>
											<div class="book-rating"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
											<div class="comment-info">
												<a href="#" class="comment-time post-capitalize"> 20 Jan 2017, 3.00PM</a> <span>-</span> <a href="#" class="reply-button post-capitalize">Reply</a>
											</div>
										</div>
									</div>
									<!--END PERSON REVIEW -->
									<!--START PERSON REVIEW -->
									<div class="person-comment">
										<div class="comment-pic">
											<a href="#">
												<img src="images/image-640x425.jpg" alt="Ahmed Hamdy">
											</a>
										</div>
										<div class="comment-body">
											<h4 class="comment-writer">
												<a href="#">Ahmed Hamdy</a>
											</h4>
											<div class="book-rating">
												<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>
											</div>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
											<div class="comment-info">
												<a href="#" class="comment-time post-capitalize"> 20 Jan 2017, 3.00PM</a> <span>-</span> <a href="#" class="reply-button post-capitalize">Reply</a>
											</div>
										</div>
									</div>
									<!--END PERSON REVIEW -->
									<!--START PERSON REVIEW -->
									<div class="person-comment">
										<div class="comment-pic">
											<a href="#">
												<img src="images/image-640x425.jpg" alt="Ahmed Hamdy">
											</a>
										</div>
										<div class="comment-body">
											<h4 class="comment-writer">
												<a href="#">Ahmed Hamdy</a>
											</h4>
											<div class="book-rating">
												<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
											</div>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
											<div class="comment-info">
												<a href="#" class="comment-time post-capitalize"> 20 Jan 2017, 3.00PM</a> <span>-</span> <a href="#" class="reply-button post-capitalize">Reply</a>
											</div>
										</div>
									</div>
									<!--END PERSON REVIEW -->
									<!--START POST REVIEW -->
									<div class="post-review">
										<div class="subheading">
											<h3 class="post-capitalize">post a review</h3>
											<span></span>
										</div>
										<div class="user-details">
											<form>
					                            <div class="form-group ">
					                            	<h5>Username :</h5>
					                                <input type="text" class="form-control input-block" placeholder="Username">
					                            </div>
					                            <div class="form-group">
					                                <h5>Email :</h5>
					                                <input type="text" class="form-control input-block" placeholder="Email">
					                            </div>
					                            <div class="form-group">
					                                <h5>Phone :</h5>
					                                <input type="text" class="form-control input-block" placeholder="Phone">
					                            </div>
					                            <div class="form-group">
					                                <h5>Review :</h5>
					                                <textarea class="form-control " placeholder="Your Review"></textarea>
					                            </div>
					                            <div class="book-rating">
													<span class="rating-word">Rating: </span><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
												</div>
						                        <button class="btn btn-block btn-lg book-reviews-btn post-capitalize" type="button">submit a review</button>
						                    </form>
					                    </div>
									</div>
									<!--START POST REVIEW -->
							    </div>
							    <!--END PERSON REVIEWS -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--START BOOK-CONTENT SECTION -->
