<div class="container">
	<h2 class="text-center"><?=$title ?></h2>
</div>
<div class="container">
	<?php foreach($post as $post) : ?>
		<?php if($post['id'] % 2 == 0) : ?>
			<h3><?php echo $post['title'];?></h3>
				<div class="row">
					<div class="col-md-3">
						<img class="post-thumb" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>">
					</div>
					<div class="col-md-9">
						<small class="post-date">Posted on: <?php echo $post['created_at'];?> in <strong><kbd><?php echo $post['name'];?></kbd></strong></small><br>
						<?php echo word_limiter($post['body'],40); ?>
						<p class="readmore"><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
					</div>
				</div><hr>
		<?php else : ?>
			<h3><?php echo $post['title'];?></h3>
			<div class="row">
					<div class="col-md-9">
						<small class="post-date">Posted on: <?php echo $post['created_at'];?> in <strong><kbd><?php echo $post['name'];?></kbd></strong></small><br>
						<?php echo word_limiter($post['body'],40); ?>
						<p class="readmore"><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
					</div>
					
					<div class="col-md-3">
						<img class="post-thumb" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>">
					</div>
				</div><hr>
			<?php endif?>
	<?php endforeach; ?>
	<div class="pagination-links">
		<?php echo $this->pagination->create_links();?>
	</div>
</div>
