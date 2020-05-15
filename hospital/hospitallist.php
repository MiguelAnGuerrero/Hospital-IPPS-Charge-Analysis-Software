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
      <table id = "hospitalTable" style="width:100%;height:100%;margin-top:0px;background-color: rgba(255,255,255,0.50);">
      <thead class = "thead-dark">
      <tr>
      <th>Hospital Name</th>
      <th>State</th>
      <th>MPN</th>
      </tr>
      </thead>
      <body>
      <tbody>
          <?php
    
    //This loop makes sure there are no repeats of hospitals in the list that is printed on the page
        $stack = array();
    foreach ($hospital_data as $r){
        if(!in_array($r, $stack)){
        array_push($stack, $r);
        }
        }
//This loop prints all elements in the no repeat list
        foreach ($stack as $row){
            echo "<tr>\n";
			$i = 0;
            foreach($row as $item){
				if ($i == 0) {
					$uri = Uri::base() . 'index.php/hospital/hospitallist/' . $row['Provider_Id'];
					$link = '<a href="' . $uri . '">' . $item . "</a>";
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
	<nav aria-label="Page navigation example">
	<ul class = "pagination justify-content-sm-center">
		<?php	
			if($start > 0){
				$prev_path = Uri::base() . 'index/hospital/hospitallist/' . max($start - 20, 0);
				echo '<li class = "page-item"><a class="page-link" href="' . $prev_path . '">Previous</a><li>';
			}
			?>
		<?php
			$next_path = Uri::base() . 'index/hospital/hospitallist/' . ($start + 20);
			echo '<li class = "page-item"><a class = "page-link" href="' . $next_path . '">Next</a></li>';
			?>
	</ul>
	</nav>

</body>
