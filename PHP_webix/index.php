<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php
         include 'header.php';
         ?>

<script>
      <!--webix.ui({
               //rows:[{ 
                 //    id:"my_input2",
                   //  view: "text",
                     
                       
              //});
              webix.ui({
                  {view:"pager", id:"pagerA",
		animate:{
			direction:"top"
		},
		size:1,
		group:2
	        },{
                id:"my_input",  
                view:"datatable",
                editable:true,
                autoConfig:true,
                ScrollY:true,
                pager: "pagerA",
                url: "getData.php",
                save: "saveData.php",
                css: "my_style",
                undo:true,
                autoheight:true,
                autowidth: true,
                on: {
                  onItemClick: function (id) {
                   this.editRow(id);
                   }
                }
          //}]
  
  });
  // $$("my_input2").attachEvent("onChange", function(newv, oldv){
    //  webix.message("Value changed from: "+oldv+" to: "+newv);//
   //});
 
      </script>     

        <?php
           include "footer.php";
          // put your code here
        ?>

    
