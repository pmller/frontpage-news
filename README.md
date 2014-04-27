frontpage-news
==============

An easy way to call some of your news or blog items on the front page (or any other for that matter) in kirby.

## How to call it up

You can use the snippet with just a simple bit of code after putting it into the snippets folder.

```
<?php snippet('newsblock') ?>
```
## How to set up a newsitem

In addition to the fields "title" and "text" the newsitem should also have a field "date" (with rather obvious content) for this to work properly. Or of course you can remove the date out of the snippet if you don't want to have it in there.