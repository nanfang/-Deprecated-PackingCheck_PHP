<?php include 'base.php' ?>
<?php startblock('content') ?>
<p>
    <button class="btn btn-large btn-primary">
        Create New Packing List
    </button>
</p>
<ul class="thumbnails">
    <? for ($i = 1; $i <= 10; $i++) { ?>
    <li class="span3">
        <a href="/items.php" class="thumbnail">
            <img src="http://placehold.it/300x200" alt="">

            <div class="caption">
                <h3>Go Hiking</h3>
            </div>
        </a>
    </li>
    <? } ?>
</ul>
<?php endblock() ?>

