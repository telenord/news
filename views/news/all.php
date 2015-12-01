<?php
foreach($items as $item): ?>
    <h1><?php echo $item->title; ?></h1>
    <div><?php echo $item->text; ?></div>
    <a href = <?php echo 'index.php?ctrl=News&act=One&id=' . $item->id;?> >Прочитать эту новость</a>
    <a href = <?php echo 'views/news/one.php?id=' . $item->id ?> >Прочитать эту новость2</a>
    <a href = <?php echo 'views/news/edit.php?id=' . $item->id;?> >Изменить новость</a>
<? endforeach; ?>
</br>
<a href = <?php echo 'views/news/add.php'?> >Добавить новость</a>