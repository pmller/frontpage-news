<?php foreach($pages->findByTitle('Neuigkeiten')->children()->visible()->flip()->limit(2) as $article): ?>
<div class="neuigkeit">
	<h3><?php echo html($article->title()) ?></h3>
	<p><?php echo excerpt($article->text(), 100) ?></p>
	<span class="neuigkeiten-datum"><?php echo html($article->datum()) ?></span>
	<a href="<?php echo $article->url() ?>"><button class="neuigkeiten-weiterlesen">weiterlesen</button></a>
</div>
<?php endforeach ?>
