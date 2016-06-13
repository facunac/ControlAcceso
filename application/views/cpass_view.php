<html>
     <head>
          <title>Atletico</title>
     </head>
     <body>
               <table class="table table-striped table-hover">
               <?php for ($i = 0; $i < count($cpasslist); ++$i) { ?>
                    <tr>
                         <td><?php echo ($i+1); ?></td>
                         <td><?php echo $cpasslist[$i]->rut; ?></td>
                         <td><?php echo $cpasslist[$i]->nombre; ?></td>
                         <td><?php echo $cpasslist[$i]->apellido_p; ?></td>
                         <td><?php echo $cpasslist[$i]->apellido_m; ?></td>
                         <td><?php echo $cpasslist[$i]->ano; ?></td>
                         <td><?php echo $cpasslist[$i]->colegio; ?></td>
                    </tr>
               <?php } ?>
               </table>
     </body>
</html>
