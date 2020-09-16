<?php wp_footer();?>
</body>
	<footer class="footer">
		<div class="footer-content">
		<section class="search_section">
			<form action="/" method="get">
				<!-- <label for="searchField">Search</label> -->
				<input type="text" name="s" id="searchField" value="<?php the_search_query(); ?>" placeholder="Search.." >
				<input type="submit" value="GO" id="search_submit">
			</form>
		</section>
			<p>Copyright &copy; <?php echo date("Y"); ?> | Crystal Exarch Protection Squad</p>
		</div>
	</footer>
</html>

