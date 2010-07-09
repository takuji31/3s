<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title> <?= $slide['title'] ?> | <?= $study['name'] ?> | Study</title>
    <link media="all" rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link media="all" rel="stylesheet" href="/css/slide.css" type="text/css" />
    <?= $html->css('/syntax/css/prettify') ?>
    <?= $javascript->link('/syntax/js/prettify') ?>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1 id="slide_title"><?= $slide['title'] ?></h1>
        </div>
        <div id="main_content">
            <?= $hatena->render($slide['body']) ?>
        </div>
        <div id="footer">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/studies/show/<?= $study['rid'] ?>">Index</a>
                </li>
                <li>
                    <?= $paginator->hasPrev() ? $paginator->first('First') : '<span class="first">First</span>' ?>
                </li>
                <li>
                    <?= $paginator->prev('Prev'); ?>
                </li>
                <li>
                    <?= $paginator->next('Next'); ?>
                </li>
                <li>
                    <?= $paginator->hasNext() ? $paginator->last('Last'): '<span class="last">Last</span>' ?>
                </li>
            </ul>
            <div class="pager_counter"><?= $paginator->counter('%page% / %pages%') ?></div>
        </div>
    </div>
</body>
</html>
