<?php
	$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
?>

<?php if ($paginator->getLastPage() > 1): ?>
	<ul class="pagination">
		<li>
			<?php echo $presenter->render(); ?>
		</li>
	</ul>
<?php endif; ?>