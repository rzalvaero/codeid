<?php 
								foreach ($showData as $row) {
								?>
								<li>
								<a href="single.html">
									<div class="banner-1">
										<img src="<?php echo $row['image'] ?>" class="img-responsive" alt="">
										<div class="banner-bottom">
											<h4><?php echo $row['title'] ?></h4>
											<p><?php echo $row['showTime'] ?></p>
										</div>
									</div>
									</a>
								</li>
								<?php } ?>