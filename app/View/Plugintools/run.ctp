<!--<?php ini_set('max_execution_time', 300); //300 seconds = 5 minutes ?>-->
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?>
			</li>
                        <li><?php echo $this->Html->link (__('Plugintools','/'), array('controller'=>'Plugintools','action'=>'index')); ?></li>
			<li class="active">Run</li>
		</ol>
	</div>
</div>
    <p><?php echo h ($selN = $selectedPlugins['Plugintool']['name']); ?></p>
    <?php  ?>
                
        <?php?>
<table  class="table table-bordered">
<thead>
    <tr>
        <th>Plugins that have same functions</th>
        <th>Function names</th>
    </tr>
</thead>
<tbody>       
    <tr>
        <td> <?php
            foreach($funcs as $func){
                foreach($func['f'] as $f_name1 ){                   
                    if(in_array($f_name1,$selectedFunctions)){
                       foreach($func['p'] as $pNames){
                        $plugin_names[] = $pNames;
                        $pluginUnique = array_unique($plugin_names);
                       }
                    }
                }
            }
            foreach($pluginUnique as $plu){
               // var_dump($plu);
                           if ($pNames != $selN ){
                    echo $plu."<br>";
                           }
            }?>
        </td>    
        <td>
    <?php foreach($selectedPlugins['Functionality'] as $selectedPlugin): ?>    
  <ul><li> <?php echo $sel = $selectedPlugin['function_name']?></li></ul>
    <?php endforeach; ?>
        </td>    
    </tr>
    
</tbody>
 
</table>


        
