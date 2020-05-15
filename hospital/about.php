<style>
.container{
  display: flex;
  flex-dirextion: row;
  flex-wrap: wrap;
  justify-content: center;
}
.container img{
  border-radius:4px;
  padding: 10px;
  margin-left:auto;
  margin-right:auto;
  max-width: 90%;
}
.flexCard {
  flex: 1 0 21%;
  max-width: 320px;
  background-color: rgba(255,255,255,0.50);
}
.flexCard + .flexCard{
  margin:10px;
}
.flexCard:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  background-color: rgba(255,255,255,0.85);
}
.flexContent{
  text-align: center;
  padding: 2px 16px;
}
img{
  max-width:300px;
  max-height:500px;
}
</style>

<div class="container">

  <div class="flexCard" style="margin:12px">
    <img alt="Picture of Alex" src="https://cs.colostate.edu:4444/~kaszyale/ct310/assets/img/Alex.png"/>
      <div class="flexContent">
        <h1>Alex <br>Kaszynski</h1>
        <p>Computer Science Major at Colorado State University<br></br>Email: <br><a style="color:#3e6378;"href="mailto:kaszyale@colostate.edu" target="_blank">kaszyale@colostate.edu</a> <br></br><a style="color:#3e6378;"href="https://cs.colostate.edu:4444/~kaszyale/ct310/index/hospital" target="_blank">Hospital Site</a><br> <a href="https://cs.colostate.edu/~kaszyale/Home.html" style="color:#3e6378" target="_blank">Homepage</a></p>
      </div>
  </div>

  <div class="flexCard">
    <img alt="Picture of Evy" src="https://cs.colostate.edu:4444/~kaszyale/ct310/assets/img/Evy.png">
      <div class="flexContent">
        <h1>Evelyn <br>Stodghill</h1>
        <p>Computer Science Major at Colorado State University<br></br>Email: <br> <a style="color:#3e6378;"href="mailto:estod@colostate.edu" target="_blank">estod@colostate.edu</a> <br></br> <a style="color:#3e6378;"href="https://cs.colostate.edu:4444/~estod/ct310/index/hospital" target="_blank">Hospital Site</a><br><a style="color:#3e6378;"href="https://cs.colostate.edu/~estod/east/index.php" target="_blank">Homepage</a></p>
      </div>
  </div>
      
  <div class="flexCard">
    <img alt="Picture of Fabienne" src="https://cs.colostate.edu:4444/~kaszyale/ct310/assets/img/Fabienne.png" onmouseover="this.src='https://cs.colostate.edu:4444/~kaszyale/ct310/assets/img/Fabienne_alt.png'" onmouseout="this.src='https://cs.colostate.edu:4444/~kaszyale/ct310/assets/img/Fabienne.png'"/>
      <div class="flexContent">
        <h1>Fabienne <br>Young</h1>
        <p>Computer Science Major at Colorado State University<br></br>Email: <br> <a style="color:#3e6378;"href="mailto:fabimayo@colostate.edu" target="_blank">fabimayo@colostate.edu</a> <br></br> <a style="color:#3e6378;"href="https://cs.colostate.edu:4444/~fabimayo/ct310/index/hospital" target="_blank">Hospital Site</a><br><a style="color:#3e6378;"href="https://www.cs.colostate.edu:4444/~fabimayo/other1" target="_blank">Homepage</a></p>
      </div>
  </div>
  
  <div class="flexCard">
    <img alt="Picture of Miguel" src="https://cs.colostate.edu:4444/~kaszyale/ct310/assets/img/Miguel.png" onmouseover="this.src='https://cs.colostate.edu:4444/~kaszyale/ct310/assets/img/Miguel_alt.png'" onmouseout="this.src='https://cs.colostate.edu:4444/~kaszyale/ct310/assets/img/Miguel.png'"/>
      <div class="flexContent">
        <h1>Miguel <br>Guerrero</h1>
        <p>Computer Science Major at Colorado State University<br></br>Email: <br> <a style="color:#3e6378;"href="mailto:miguelgu@colostate.edu" target="_blank">miguelgu@colostate.edu</a> <br></br> <a style="color:#3e6378;"href="https://cs.colostate.edu:4444/~miguelgu/ct310/index/hospital" target="_blank">Hospital Site</a><br><a style="color:#3e6378;"href="https://cs.colostate.edu/~miguelgu/" target="_blank">Homepage</a></p>
      </div>
  </div>

</div>
  
