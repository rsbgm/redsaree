				<div class="bodyDesignPage">
					<?php $i = 0; $ii = 0;
					while ($i < count($categoryDesigns[$category])) {
						$ii = 0;
						while ($ii < 3) { ?>
							<a href="?category=<?php echo $category; ?>&page=view&design=<?php echo $categoryDesigns[$category][$i]; ?>"><img src="images/<?php echo $category.'/'.$categoryDesigns[$category][$i].'_'.$designColors[$categoryDesigns[$category][$i]][0]; ?>_200.jpg" class="shoebox fLeft" /></a>
							<?php $ii++; $i+=2;
							if ($i == count($categoryDesigns[$category])) break;
						} ?>
						<div class="clearer"></div>
					<?php } ?>
				</div>

