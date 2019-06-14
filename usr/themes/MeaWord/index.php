<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 ?>
<?php $this->need('header.php');

?>
<body>

<div id="list">
	<?php while($this->next()): ?>
        <div class="articleList container">
		<div class="row">
			<div class="col-md-12">
			    <div class="article">
					<div class="articleHeader">
						<h1 class="articleTitle"><a href="<?php $this->permalink() ?>"><?php $this->content() ?></a></h1>
						<h4 class="aticleSouce"><a><?php echo '  ' . $this->fields->author; ?></a></h4>
					</div>
					<div class="articleFooter clearfix">
						<ul class="articleStatu">
							<li><i class="fa fa-calendar"></i><?php $this->date('Y-m-d'); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php endwhile; ?>
</div>
    <div id="pagination"><?php if(ceil($this->getTotal() / $this->parameter->pageSize)>1)$this->pageLink('加载更多','next');else echo"<span>没有了喵 ╮(๑•́ ₃•̀๑)╭</span>" ?></div>
<?php $this->need('footer.php'); ?>
