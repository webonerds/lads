

<?php
		 mysql_connect("localhost","root","password");
		 mysql_select_db("ads_engine_db");
		 $q1=mysql_query("SELECT * FROM `user`");
		 while($res=mysql_fetch_array($q1))
		 {?>
           <tr>
             <td><?php echo $res['firstname'];?></td>
             <td><?php echo $res['lastname'];?></td>
             </tr>
           <?php } ?>
         </table>
         <a href="#"> Recent User</a>
         




<?php
mysql_connect("localhost","root","password");
mysql_select_db("ads_engine_db");
$nm=$_POST['address'];
?>