<div class = 'view'>
    <h1>Panelist Table for Sample Request Number <?php echo $tests[0]['Panelist']['test_id']; ?></h1>
    <table
        <tr>
            <th>Panelist Number</th>
             <th>Same_1</th>
             <th>Same_2</th>
             <th>Odd</th>
        </tr>
       <?php foreach ($tests as $test): ?>
        <tr>
            <td><?php echo ($test['Panelist']['panelist_id']);?></td>      
            <td><?php echo ($test['Panelist']['same_1']);?></td>
            <td><?php echo ($test['Panelist']['same_2']);?></td>
            <td><?php echo ($test['Panelist']['odd']);?></td>        
        </tr>
        <?php endforeach; ?>
        <?php unset($test); ?>
    </table>        
    <ul>
        <li>
            <?php echo $this->Html->link('Close', array('controller' => 'tests',
                                                    'action' => 'index'));?> 
        </li>
        <li>    
            <?php echo $this->Html->link('Add New Test', array('controller' => 'tests',
                                           'action' => 'add'));?>
        </li>
    </ul> 
</div>








