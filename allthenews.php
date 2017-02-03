<?php if (!isset($subpages)) {
    $subpages = $site->$pages->find('yourblogpage');
} ?>

<?php foreach ($subpages->visible()->flip()->limit(2) as $newsitem): ?>
<div>
	<h3><?php echo html($newsitem->title()) ?></h3>
	<p><?php echo excerpt($newsitem->text(), 100) ?></p>
	<span class="news-date"><?php echo html($newsitem->date()) ?></span>
	<a href="<?php echo $article->url() ?>"><button>read more</button></a>
</div>
<?php endforeach ?>
