 <h1>in_array()</h1>
    <?php
    $números = array('cero','uno','dos',
                     'cero' => 0,'uno' => 1,'dos' => 2);
    echo '1 tipo indiferente => ',
        in_array(1,$números),'<br />';
    echo '3 tipo indiferente => ',
        in_array(3,$números),'<br />';
    echo '\'1\' mismo tipo => ',
         in_array('1',$números,TRUE),'<br />';
    echo '\'uno\' tipo indiferente => ',
         in_array('uno',$números),'<br />';
    echo '\'tres\' tipo indiferente => <b>',
        in_array('tres',$números),'</b><br />';
    echo '\'tres\' mismo tipo => ',
         in_array('tres',$números,TRUE),'<br />';
    ?>
	 <?php
    $números = array('cero','uno','dos',
                     'cero' => 0,'uno' => 1,'dos' => 2);
    echo '1 tipo indiferente => ',
         var_dump(in_array(1,$números)),'<br />';
    echo '3 tipo indiferente => ',
         var_dump(in_array(3,$números)),'<br />';
    echo '\'1\' mismo tipo => ',
         var_dump(in_array('1',$números,TRUE)),'<br />';
    echo '\'uno\' tipo indiferente => ',
         var_dump(in_array('uno',$números)),'<br />';
    echo '\'tres\' tipo indiferente => <b>',
         var_dump(in_array('tres',$números)),'</b><br />';
    echo '\'tres\' mismo tipo => ',
         var_dump(in_array('tres',$números,TRUE)),'<br />';
    ?>