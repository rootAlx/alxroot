<?php $corFooter = get_theme_mod( 'set_corFundoFooter','#3f85f4');
$cortexto         = get_theme_mod( 'set_corTextoFooter','white'); 
?>
<footer class="page-footer" style="background-color: <?php echo  $corFooter;?>; color: <?php echo $cortexto; ?>;">

  <div class="row">
    
    <div class="col s12 m12 l12">
     <?php get_sidebar('footer');?>


   </div>

   <div class="col s12 m12 l12">
     <?php get_sidebar('footer1');?>


   </div>

   <div class="col s12 m12 l12">
     <?php get_sidebar('footer2');?>


   </div>
 </div>


 <div class="footer-copyright center" style="color: <?php echo $cortexto; ?>;">
  <div class="container">
    © <?php echo date("Y"); ?>   <?php echo get_theme_mod( 'set_tituloFooter');?>
    
  </div>
</footer>


<?php wp_footer(); ?>
<?php
echo jquery();
echo materializev01002();
echo meuEstiloJs();
?> 

</body>
</html>