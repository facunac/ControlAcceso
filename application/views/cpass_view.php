<html>
     <head>
          <title>Atletico</title>
          <link href="http://<?php echo base_url('/assets/css/bootstrap.css');?>" rel="stylesheet">
          <link href="http://<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
     <body>
           <form role="form"  method="post">
               <table class="table table-striped table-hover">
               <?php for ($i = 0; $i < count($cpasslist); ++$i) { ?>
                    <tr><td><?php echo $cpasslist[$i]->rut; ?></td></tr>
                    <tr><td><?php echo $cpasslist[$i]->nombre." ".$cpasslist[$i]->apellido_p." ".$cpasslist[$i]->apellido_m ; ?></td></tr>
                    <tr><td><?php echo $cpasslist[$i]->colegio; ?></td></tr>
                    <tr><td><?php echo $cpasslist[$i]->prueba; ?></td></tr>
                    <tr><td><?php echo $cpasslist[$i]->estado; ?></td></tr>
               <?php } ?>
                    <tr><td><input type="submit" name="Ok" value="Ok" /></td></tr>
               </table>
	   </form> 
     </body>
</html>
