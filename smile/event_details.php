<?php
require("constants.php");
include("header.php");
if (isset($_GET["event_id"]) && $_GET["event_id"] != "") {
    
    //populate
}
?>   
    <div class="container"> 
<div id="fh5co-course">

    <div class="row">

        <!-- <div class='col-md-6 animate-box'> 		 -->
                        <!-- <div class='course'>
						<a href='#' class='course-img' style='background-image: url(images/project-1.jpg);'>
						</a>
						<div class='desc'>
							<h3><a href='#'>Web Master</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamust ab aliquam dolor eius.</p>
							<span><a href='#' class='btn btn-primary btn-sm btn-course'>Take A Course</a></span>
						</div>
					</div> -->
        <!-- </div>     -->
        

        
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
   
   <script type="text/javascript"> 
       var url = '<?php echo GET_DATA_URL ?>' ;
       var org_id = '<?php echo ORG ?>';
       var event_id = '<?php echo $_GET["event_id"] ?>';
       
 
       function setevents(){ 
        var page = 'events';
         $.ajax({ 
           method: "get", 
           url: url ,
           data: {org_id: org_id ,
           page:page ,
           event_id:event_id
           }
         }).done(function( data ) { 
           var result= $.parseJSON(data); 
           var string = '';
   
          /* from result create a string of data and append to the div */
           $.each( result, function( key, value ) { 
              var status =  value['status'];
               if (status == 'A'){
                   status = "Active";
            string += "<div class='col-md-12 animate-box'>\
            <div class='course'>\
						<a href='event_details.php?event_id="+value['event_id']+"' class='course-img' style='background-image: url(" + value['event_thumbnail'] + ");'>"+
					    "</a>\
					    <br>\
						<div class='desc'>\
							<h3><a href='event_details.php?event_id="+value['event_id']+"'>"+ value['event_title'] + "</a></h3>\
							<br>\
							<p>"+ value['event_desc'] + "</p>";
			if (value['event_format']!="")			string +=	"<br><span><b>Format :</b> "+value['event_format']+"</span>";
			if (value['event_addDetails']!="")		string +=	"<br><span><b>Details  :</b> "+value['event_addDetails']+"</span>";
            
			if (value['event_date']!="")			string +=	"<br><span><b>Date :</b> "+value['event_date']+"</span>";
			if (value['event_email']!="")			string +=	"<br><span><b>Email :</b> "+value['event_email']+"</span>";
			if (value['event_phone']!="")			string +=	"<br><span><b>Phone :</b> "+value['event_phone']+"</span>";
			if (value['event_reglink']!="")			string +=	"<br><span><a href='https://"+value['event_reglink']+"' class='btn btn-primary btn-sm btn-course'>Register Here</a></span>";
                

			string +=		"</div>\
				</div>\
                </div>";
              } else{
                   status ="Inactive";
               }
                       }); 
            // //   }
                 string += '</div>\
                 </div>\
                 </div>'; 
              $("#fh5co-course").html(string); 
          }); 
   }
  
  
  $.ajax({
   url:setevents(),
   success:function(){
   setfooter();
}
})
   </script>



<?php
include("footer.php");
?>