<?php
if(!defined('OSTCLIENTINC') || !$faq  || !$faq->isPublished()) die('Access Denied');

$category=$faq->getCategory();

?>
<h1><?php echo __('Frequently Asked Questions');?></h1>
<div id="breadcrumbs">
    <a href="index.php"><?php echo __('All Categories');?></a>
    &raquo; <a href="faq.php?cid=<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></a>
</div>
<div style="width:700;padding-top:2px; float:left;">
<strong style="font-size:16px;"><?php echo $faq->getQuestion() ?></strong>
</div>
<div style="float:right;text-align:right;padding-top:5px;padding-right:5px;"></div>
<div class="clear"></div>
<p>
<?php echo Format::safe_html($faq->getAnswer()); ?>
</p>
<p>
<?php
if($faq->getNumAttachments()) { ?>
 <div><span class="faded"><b><?php echo __('Attachments');?>:</b></span>  <?php echo $faq->getAttachmentsLinks(); ?></div>
<?php
} ?>

<div class="article-meta"><span class="faded"><b><?php echo __('Help Topics');?>:</b></span>
    <?php echo ($topics=$faq->getHelpTopics())?implode(', ',$topics):' '; ?>
</div>
</p>
<hr>
<div class="faded">&nbsp;<?php echo __('Last updated').' '.Format::db_daydatetime($category->getUpdateDate()); ?></div>
