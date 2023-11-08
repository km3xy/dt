这个样式必须放到form标签下面

<fieldset data-role="controlgroup" data-type="horizontal">

<h2>


<p><h3>_ng前区指定位数 : 
    
    
<input style="font-size:30px;color:#FF0000" type="text" name="b_ng[]" id

="b1" value= <?php echo mt_rand(5,7);?>   ng-model="lastName">

<br>

//随机value值html嵌入php随机

  <label>
     
  <input type="checkbox" 
  
name="c[1]" id="c" value=<?php echo mt_rand(5,7);?> ><?php echo mt_rand(5,7);?>

 </label>


  <label>
     
  <input type="checkbox" 
  
name="c[1]" id="c" value=<?php echo mt_rand(5,7);?> ><?php echo mt_rand(5,7);?>

  </label>  



//随机value值


  <label>
     
  <input type="checkbox" 
  
name="c[1]" id="c" value="1">1= 


<?php echo mt_rand(1,35);?>


 </label>


 <label>
     
  <input type="checkbox"           name="c[2]" id="c" value="2">2=
  
  <?php echo mt_rand(1,35);?>

  
  
  

 </label>



 <label>
     
  <input type="checkbox"           name="c[3]" id="c" value="3">3=
  
  
<?php echo mt_rand(1,35);?>

  

 </label>



 <label>
     
  <input type="checkbox"           name="c[4]" id="c" value="4">4=
  
  
<?php echo mt_rand(1,35);?>

  

 </label>


 <label>
     
  <input type="checkbox"           name="c[5]" id="c" value="5">5=
  
  
<?php echo mt_rand(1,35);?>

  

 </label>   






  



  








