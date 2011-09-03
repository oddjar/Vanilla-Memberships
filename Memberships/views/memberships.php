<?php if (!defined('APPLICATION')) exit(); ?>
<h1><?php echo T($this->Data['Title']); ?></h1>
<div class="Info">
   <?php echo T('Assign & edit memberships below.'); ?>
</div>
<?php 
if (C('Plugins.Memberships.Enabled')) {
   echo "<h3>".T('Active Memberships'). " (". count($this->MemberList) . ")</h3>\n";
?>
	<table id="Users" class="AltColumns">
	   <thead>
	      <tr>
	         <th>Username</th>
	         <th class="Alt">Email</th>
	         <th>Current Group</th>
	         <th class="Alt">Options</th>
	      </tr>
	   </thead>
	   <tbody>
      <?php foreach ($this->MemberList as $item) { ?>
            <tr>
			      <td><?php echo $item['Name']; ?></td>
			      <td class="Alt"><?php echo $item['Email']; ?></td>
			      <td class="Alt"><?php echo $item['GroupName']; ?></td>
			      <td><?php echo Anchor(T('Edit'), 'plugin/memberships/edit/'.$item['UserID'], 'Popup SmallButton');?></td>
			</tr>
   <?php
      }
   ?>
	</tbody>
	</table>
<?php } 
?>