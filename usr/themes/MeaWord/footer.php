<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<div id="loading" style="display: block;">
	<div id="loading-center">
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>
<?php if (!$this->is('post')) : ?>
	<!--footer-->
	<footer>
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<div class="copyright">
						<span>Powered by Leaf • <a href="https://adomikao.com">Adomikao</a>&nbsp;&nbsp;</span>
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php endif; ?>

<!-- 菜单&侧边栏按钮 -->
<a class="to-top">
	<span class="topicon"><i class="fa fa-angle-up"></i></span>
	<span class="toptext">Top</span>
</a>

<div id="Tip" style="display: none;">
	<div id="Tip-center">
		<h1>没有更多了~</h1>
	</div>
</div>
</body>

</html>