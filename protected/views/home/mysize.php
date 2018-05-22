<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - My Size';
?>

<?php
Yii::app()->clientScript->registerScript('heights', "
function height(){
	var x = $('#height option:selected').val();
	$.ajax({
		url : '".Yii::app()->getBaseUrl(true)."/home/weights/'+x,
		dataType : 'json',
		success : function(data){
			$('#weights').html(data.weights);
			$('#asize').html(data.size);
			$('#ashoulder').html(data.shoulder);
			$('#asleeve').html(data.sleeve);
			$('#awaist').html(data.waist);
		}
	});	
}
height();
$('#height').change(function(){
	height();
});
function weight(){
	var x = $('#weights option:selected').val();
	$.ajax({
		url : '".Yii::app()->getBaseUrl(true)."/home/weightsinfo/'+x,
		dataType : 'json',
		success : function(data){
			$('#asize').html(data.size);
			$('#ashoulder').html(data.shoulder);
			$('#asleeve').html(data.sleeve);
			$('#awaist').html(data.waist);
		}
	});	
}
weight();
$('#weights').change(function(){
	weight();
});
");
?>

<div class="wrapper">
<h3 class="main-title">What is my size ?</h3>


<div class="container">
<div class="my-size">
<p class="parag6">Lorem ipsum dolor sit amet, etiam non in nibh, elementum elit volutpat diam et eu aliquet, et adipiscing rhoncus orci mattis enim. Euismod dolor auctor phasellus vitae, aliquam officia fusce. Dolor libero ac sollicitudin proin a, tellus orci suspendisse aptent. Nonummy sodales, ullamcorper per in interdum facilisis pellentesque. Class rutrum. Purus aenean quam ornare nisl, interdum erat blandit lorem pulvinar praesentium aliquam.</p>



<div class="size-chart">

<p class="s-ch">Size Chart</p>

<table class="table">
              <thead>
                <tr>
                  <th class="size">Sizes</th>
                  <th>XXS</th>
                  <th>XS</th>
                  <th>S</th>
                  <th>M</th>
                  <th>L</th>
                  <th>XL</th>
                  <th>2XL</th>
                  <th>3XL</th>
                  <th>4XL</th>
                  <th>5XL</th>
                  <th>6XL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="size">USA Sizing</td>
                  <td>30-32</td>
                  <td>34</td>
                  <td>36-38</td>
                  <td>40</td>
                  <td>42-44</td>
                  <td>46</td>
                  <td>48-50</td>
                  <td>52</td>
                  <td>54-56</td>
                  <td>58</td>
                  <td>60-62</td>
                  
                </tr>
                <tr>
                  <td class="size">Europe Siziing</td>
                  <td>38-40</td>
                  <td>42-44</td>
                  <td>46-48</td>
                  <td>50-52</td>
                  <td>54-56</td>
                  <td>58-60</td>
                  <td>62-64</td>
                  <td>66</td>
                  <td>68-70</td>
                  <td>72-74</td>
                  <td>76-78</td>
                </tr>
               
              </tbody>
            </table>
            
            <button class="btn inches" type="button">inches</button>
             <button class="btn stone" type="button">stone</button>
             
             
             
</div><!--end size-chart-->


              <label class="size-label" for="inputEmail">Please select your height</label>
             
                <select id="height" class="size-select">
                  <?php if($heights){ ?>
                  <?php foreach($heights as $height){ ?>
                  <option value="<?php echo $height->id; ?>"><?php echo $height->title; ?></option>
                  <?php } ?>
                  <?php } ?>
                </select>
             
              
              
              
              <label class="size-label" for="inputEmail">Please select your weight</label>
              
                <select class="size-select" id="weights">
            </select>
             
              
              
           
            </form>
            
            
            <div class="result2">
            <p>For Your Height and your Weight We Suggest a size: <span id='asize'>Small</span></p>
            </div><!--end result-->
            
            <div class="row2" style="margin-bottom:5px;">
            </div>
            
            <div class="shirt1">
            
            <p class="messer"><span id='asleeve'>40.6 cm</span>Measurement of SLEEVE from shoulder to cuff</p>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/shirt1.png' />
            
            </div><!--end shirt1-->
            
            <div class="shirt2">
            
           
            <div class="shit-m">
             <p class="messer2"><span id='ashoulder'>40.6 cm</span>Measurement of jacket from shoulder to shoulder</p>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/shirt2.png' />
            <p class="messer3"><span id='awaist'>58.4 cm</span>Measurement of jacket from neck tobottom of waist.</p>
            </div><!--end shirt-m-->
            </div><!--end shirt2-->
            
            <div class="row1">
            <button type="submit" class="btn des-jacket">Design my jacket</button>
            
            </div><!--end row1-->
            
</div><!--end my-size-->






</div><!--end container-->
</div><!--end wrapper-->
