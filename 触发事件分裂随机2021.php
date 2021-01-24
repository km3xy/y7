02.11 20:39
触发事件分裂随机2021


<h1>您选的前区范围码是____<span id="y1">_____</span></h1>

   </label>
 
 
 
<h1>您选的前区范围码是____<span id="y2">_____</span></h1>

   </label>
 
 
 
 
<h1>您选的前区范围码是____<span id="y3">_____</span></h1>

   </label>
   
   
   
   
<h1>您选的前区范围码是____<span id="y4">_____</span></h1>

   </label>
   
   
   
 
<h1>您选的前区范围码是____<span id="y5">_____</span></h1>

   </label>
 
 

   <label>
 


<h1>您选的后区范围码是____<span id="spanId2">_____</span></h1>

   </label>
 




<h1>您选的后区范围码是____<span id="spanId3">_____</span></h1>



   </label>
 



<?php


error_reporting(E_ALL^E_NOTICE^E_WARNING);     //php关闭错误报告


/*

注释――必须把php代码放到 form标签内

点击提交按钮不跳转


*/



echo "<br>";


echo "分裂随机后―――>随机的前区号码";



echo "<br>";



$arr=$_POST['a'];   


$x1=mt_rand(5,5);




echo "<br>";


$array_name5=array_rand($arr,$x1);   


//sort($array_name5);

$join5=join("     ", $array_name5);


echo $join5;


echo "<br>";


echo "<br>";



echo "分裂随机后―――>随机的后区号码";


echo "<br>";




$arr2=$_POST['b'];   



$b1=mt_rand(2,2);


echo "<br>";






$array_name2=array_rand($arr2,$b1);   


//sort($array_name2);

$join2=join("     ", $array_name2);


echo $join2;





 ?>



<br>

<hr>

<br>

<a href="5from2dlt5from2.php" target="_blank"  style="font-size:38px;">点我，返回复选框，独立版主页</a>


    </form>
    
    
<script>
        $(function () {
            $("input[id=abc").click(function () {
                var arr = [];
                $("input[id=abc").each(function () {
                    if(this.checked){
                        arr.push(this.value);
                    }else{
                        var index = arr.indexOf(this.value);
                        if(index != -1){
                            arr[index] = "";
                        }
                    }
                });
                
    
    
                
var  y=Math.floor(Math.random()*35+0); 

            
var  y3="、"; 

                
                
var colorsxy = ['y1','y2','y3','y4','y5'];



var xy = colorsxy[(Math.floor(Math.random() * (colorsxy.length)))]

var y2="+";

                
                $("#"+xy).text(arr.join(",")+y2+y+y3);
   
            })
        });
</script>
    
    
<script>
        $(function () {
            $("input[id=abu").click(function () {
                var arr = [];
                $("input[id=abu").each(function () {
                    if(this.checked){
                        arr.push(this.value);
                    }else{
                        var index = arr.indexOf(this.value);
                        if(index != -1){
                            arr[index] = "";
                        }
                    }
                });
                
                
                
var  yy=Math.floor(Math.random()*12+0); 

            
var  y3="、"; 

               
                
var colorsyx = ['spanId2','spanId3'];


var xyz = colorsyx[(Math.floor(Math.random() * (colorsyx.length)))]


var y2="+";

                
                $("#"+xyz).text(arr.join(",")+y2+yy+y3);
                

            })
        });



</script>
    
    

    
  </div>
</div>
​
</body>
</html>
​
