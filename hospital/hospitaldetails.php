<style>
.blah{
  background-color: rgba(255,255,255,0.50);
  border-color: rgba(255,255,255,0.85)
  margin-left:auto;
  margin-right:auto;
  width: 90%;
}
</style>
<div class="changeToBlah">
    <form method="POST" style="padding:10px;%">
        <label>MPN:&nbsp;</label>
        <input type="text" name="mpn"><br>
        <input type="submit" value="Submit">
    </form>
</div>
<div class ="row">
  <div class = "col-12" style="margin-left:auto;margin-right:auto;width: 75%;height: 500px;overflow: scroll;">
    <table id = "detailTable" style="width:100%;height:100%;margin-top:0px;background-color: rgba(255,255,255,0.50);border-color: rgba(255,255,255,0.85);border-width:2px">
      <thead class = "thead-dark">
      <tr class="sorter-header">
      <th title="case insensitive sort" class="ascending">MPN</th>
      <th title="case insensitive sort" class="ascending">Name</th>
      <th title="sort numerically" class="is-number">Street Address</th>
      <th>State</th>
      <th>Zip Code</th>
      </tr>
      </thead>
      <body>
      <tbody>
      
<?php


    //\\foreach($mpn_return as $row){
      //  echo $row;
//}

//This loop makes sure there are no repeats of hospitals in the list that is printed on the page
        $stack = array();
    foreach ($mpn_return as $r){
         echo "<tr class = 'indexed'>\n";
        if(!in_array($r, $stack)){
        array_push($stack, $r);
        }
        }
//This loop prints all elements in the no repeat list
        foreach ($stack as $row){
			$i = 0;
            foreach($row as $item){
				if ($i == 0) {
					$uri = Uri::base() . 'index.php/hospital/hospitaldetails/' . $row['Provider_State'] + $row["Provider_Zip_Code"];
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
	<nav aria-label="Page navigation">
	<ul class = "pagination justify-content-sm-center">
		<?php	
			if($start > 0){
				$prev_path = Uri::base() . 'index/hospital/hospitaldetails/' . max($start - 20, 0);
				echo '<li class = "page-item"><a class="page-link" href="' . $prev_path . '">Previous</a><li>';
			}
			?>
		<?php
			$next_path = Uri::base() . 'index/hospital/hospitaldetails/' . ($start + 20);
			echo '<li class = "page-item"><a class = "page-link" href="' . $next_path . '">Next</a></li>';
			?>
	</ul>
	</nav>
</body>

?>
