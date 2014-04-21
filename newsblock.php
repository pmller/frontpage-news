<?php foreach($pages->findByTitle('News')->children()->visible()->flip()->limit(2) as $article): ?>
<div class="latest-news">
	<h3><?php echo html($article->title()) ?></h3>
	<p><?php echo excerpt($article->text(), 100) ?></p>
	<span class="news-date"><?php echo html($article->date()) ?></span>
	<a href="<?php echo $article->url() ?>"><button class="read-on">read more</button></a>
</div>
<?php endforeach ?>
