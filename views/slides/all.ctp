<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title><?= $study['name'] ?></title>
<link rel="stylesheet" href="/css/CSSslide.css" type="text/css" />
<?= $html->css('prettify') ?>
<script type="text/javascript" src="/js/CSSslide.js"></script>
<?= ''//$javascript->link('jquery') ?>
<?= ''//$javascript->link('prettify') ?>
<?= ''//$javascript->link('slide_all') ?>
</head>
<body>

<? foreach($slides as $slide){ ?>
<div>
<h2><?= $slide['title'] ?></h2>
<?= strip_tags($hatena->render($slide['body']),'<pre><h3><h4><h5><ul><li><ol>') ?>
</div>
<? } ?>

</body>

</html>
