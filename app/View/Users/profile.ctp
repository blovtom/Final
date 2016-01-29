<!DOCTYPE html>
<html>




<div class="panel panel-primary">
  <div class="panel-heading text-center"><h2>Tool Description</h2></div>
  <table class ="table table-bordered"style="width:100%">
  <tr>
    <td>
        <ul>
            <li>This tool uses extracted information from WordPress plugins</li>
            <li>The purpose is to help avoid Potential Plugin Conflicts</li>
            <li>The Database currently holds more than 5000 wordpress plugins.</li>
            <li>It has been categorized into different sections to help with navigation</li>
        </ul>
</p</td>
    <td><a href =https://codex.wordpress.org/Plugins ><strong>Plugins in detail</strong></a></td>    
  </tr>
</table>  
</div>
    
<!--Functions reference-->
<div class="panel panel-primary">
  <div class="panel-heading">Functions</div>
  <table class ="table table-bordered"style="width:100%">
  <tr>
    <td>  <p>This area runs selected Plugins and their Function calls for potential plugin conflicts. <br>
It verifies that each function call is unique.</p></td>
    <td><a href =https://codex.wordpress.org/Function_Reference ><strong>More information about Functions</strong></a></td>    
  </tr>
</table>  
</div>
<!--Hooks reference-->
<div class="panel panel-primary">
  <div class="panel-heading">Hooks</div>
  <table class ="table table-bordered"style="width:100%">
  <tr>
    <td><p>Hooks(also called actions) are provided by WordPress to allow a Plugin to "hook into" the rest of WordPress; They call functions in a plugin<br>
at a specific time and set plugins in motion. Two kinds of hooks are Actions and Filters.A hook callback is a specific type of hook where the user code is going to initiate the library call. </p></td>
    <td><a href =https://codex.wordpress.org/Plugin_API/Action_Reference><strong>More information about Hooks</strong></a></td>    
  </tr>
</table>  
</div>
<!--Hook callback reference-->
<div class="panel panel-primary">
  <div class="panel-heading">Hook callbacks</div>
  <table class ="table table-bordered"style="width:100%">
  <tr>
    <td><p>A hook callback is a specific type of hook where the user code is going to initiate the library call.Sometimes you want to remove a hook callback that another plugin or theme has created, this can improve the performance of an unnecessarily large theme by unhooking some of its unnecessary functionality </p></td>
    <td><a href =https://codex.wordpress.org/Plugin_API/Action_Reference><strong>More information about Hook callbacks</strong></a></td>    
  </tr>
</table>  
</div>

<!--Filters reference-->
<div class="panel panel-primary">
  <div class="panel-heading">Filters</div>
  <table class ="table table-bordered"style="width:100%">
  <tr>
    <td><p>A Filter is a function that is associated with an existing Action by specifying any existing hook. Filters are functions that<br>
WordPress passes data through at certain points in execution.</p></td>
    <td><a href =https://codex.wordpress.org/Plugin_API/Filter_Reference><strong>More information about Filters</strong></a></td>    
  </tr>
</table>  
</div>





<br><br><br>
<?php echo $this->Html->link(__('Return Home'), array('controller'=> 'homepage', 'action' => 'index')); ?>


</html>