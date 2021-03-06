<div class="sidebar-default">
    <div class="sidebar-block" id="sidebar-graph">
        <div class="sidebar-inner">
            <?php if (isset($stats)) : ?>
            <p>
                You saved <span class="ns-today"><?php print $stats['saved']['today']; ?></span>
                marks today and archived <span class="na-today"><?php print $stats['archived']['today']; ?></span>.
            </p>
            <?php endif; ?>
        </div>
    </div>
    <?php if (isset($stats) && $stats['marks']['ages ago'] > 0) : ?>
    <div class="sidebar-block">
        <div class="sidebar-inner">
            <p>You have <span class="ns-year"><?php print $stats['marks']['ages ago']; ?></span> marks that are over 1 year old. Want to tidy up a bit?</p>
            <a href="/marks/ages-ago" class="btn">View Marks</a>
            <button data-action="dismiss_this">Do Nothing</button>
            <button data-action="archive_all">Archive All</button>
        </div>
    </div>
    <?php endif; ?>
    <div class="sidebar-block">
        <div class="sidebar-inner">
            <a href="javascript:(function()%7Bf%3D%27<?php print getFullUrl(); ?>/mark/add%3Furl%3D%27%2BencodeURIComponent(window.location.href)%2B%27%26title%3D%27%2BencodeURIComponent(document.title)%2B%27%26v%3D6%26%27%3Ba%3Dfunction()%7Bif(!window.open(f%2B%27noui%3D1%26jump%3Ddoclose%27,%27nilaiv2%27,%27location%3D1,links%3D0,scrollbars%3D0,toolbar%3D0,width%3D594,height%3D485%27))location.href%3Df%2B%27jump%3Dyes%27%7D%3Bif(/Firefox/.test(navigator.userAgent))%7BsetTimeout(a,0)%7Delse%7Ba()%7D%7D)()" class="btn">Unmark+</a>
            <p class="clear sidenote">To add Marks, drag this button into your bookmark toolbar.  <a href="http://help.unmark.it/bookmarklet" target="_blank">Learn how</a>.</p>
        </div>
    </div>
    <?php $this->load->view('layouts/sidebar/sidebar_notices'); ?>
</div>

<div id="mark-info-dump" class="sidebar-mark-info"></div>
