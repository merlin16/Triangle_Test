<table 
    <tr>
        <th>Panelist Number</th>
         <th>Same_1</th>
         <th>Same_2</th>
         <th>Odd</th>
    </tr>
   <?php foreach ($panelists as $value): ?>
    <tr>
        <td><?php echo h($value['Panelist']['panelist_id']);?></td>      
        <td><?php echo h($value['Panelist']['same_1']);?></td>
        <td><?php echo h($value['Panelist']['same_2']);?></td>
        <td><?php echo h($value['Panelist']['odd']);?></td>        
    </tr>
    <?php endforeach; ?>
    <?php unset($value); ?>    
</table>

<!--Needs be fixed to create the table for the total panelists entered