{capture assign="left"}  
  Auth::check();
  <center><img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/6/000/29a/33c/02bf658.jpg" width="150" height="150"></center>
  <div class="well"> 
    Información
  </div>
  
  {/capture}
{capture assign="right"}
  
  <textarea placeholder="¿Qué estás pensando?" rows="3" class="col-sm-12"></textarea>
  <button class="btn pull-right btn-success">Publicar</button>
  
  {/capture}
{capture assign="portada"}
  
  <img src="http://comutricolor.com/wp-content/uploads/2013/10/seleccion-colombia.png">
  
  {/capture}
  
  {include file="../masterpage/template.tpl" layout="two_columns"}