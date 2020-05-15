<style>
.tableSorter{
    margin-left:auto;
    margin-right:auto;
    width: 75%;
    height: 500px;
    overflow: scroll;
}
</style>
<div class = "row">
    <div class = "col-12" style="margin-left:auto;margin-right:auto;width: 75%;height: 500px;overflow: scroll;">
      <table id = "drgTABLE" style="width:100%;height:100%;margin-top:0px;background-color: rgba(255,255,255,0.50);">
    <thead class = "thead-dark">
    <tr>
    <th>DRG Number</th>
    <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach ($drg_data as $row){
            echo "<tr>\n";
			$i = 0;
			foreach($row as $item){
				if($i ==0){
					$l = Uri::base() . "index.php/hospital/action_drglist/" . $row["DRG_Number"] + $row['DRG_Definition'];
					$link = '<a href="' . $l . '">' . $item . "</a>";
					echo "<td>" . $link . "</td>\n";
				}
				else{
					echo "<td>" . $item, "</td>\n";

				}
				$i++;
			}
			echo "</tr>\n";            
	}
    ?>
	</tbody>
	</table>
</div>
</div>
<div class = "col-4">
	<nav aria-label="Page navigation">
	<ul class = "pagination justify-content-sm-center">
		<?php	
			if($start > 0){
				$prev_path = Uri::base() . 'index/hospital/drglist/' . max($start - 20, 0);
				echo '<li class = "page-item"><a class="page-link" href="' . $prev_path . '">Previous</a><li>';
			}
			?>
		<?php
			$next_path = Uri::base() . 'index/hospital/drglist/' . ($start + 20);
			echo '<li class = "page-item"><a class = "page-link" href="' . $next_path . '">Next</a></li>';
			?>
	</ul>
	</nav>
