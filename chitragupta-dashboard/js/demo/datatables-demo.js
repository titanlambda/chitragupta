var selected = 1;
function get_subdomain(id){
  $.ajax({
    type:"POST",
    ContentType: "application/json; charset=utf-8",
    url:BASE_URL+"subdomain.php",
    data:{"usage":3,"domain":id},
    success: function(response){
        console.log(response);
       response = JSON.parse(response);
      console.log(response["data"]);
       if(response.error === "false"){
         var data = response.data;
         var len = Object.keys(data).length;
         $("#subdomain-list").empty();
        for(i = 0 ; i < len ; i++){
          var ip = (data[i]["ip_address"]).split(",").join(", ");
          $("#subdomain-list").append(
            "<tr class='hoverable'>"+
            "<td>"+data[i]["subdomain"]+"</td>"+
            "<td>"+ip+"</td>"+
            "</tr>"
            );
        }
        $('#subdomaintable').DataTable();       }
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.table(textStatus);
        console.table(errorThrown);
      }
});
}
function change(id,page){
  $("#"+selected).css({'background':'white','font-weight':'normal','color':'black'});
  $("#"+id).css({'background':'#66BB6A','font-weight':'bold','color':'white'});
  selected = id;
  if(page === 1) get_subdomain(id);
}

function get_domain(page){
  $.ajax({
    type:"POST",
    ContentType: "application/json; charset=utf-8",
    url:BASE_URL+"subdomain.php",
    data:{"usage":2},
    success: function(response){
        console.log(response);
       response = JSON.parse(response);
      console.log(response["data"]);
       if(response.error === "false"){
         var data = response.data;
         selected = data[0]["id"];
         var len = Object.keys(data).length;
         $("#domain-list").empty();
        for(i = 0 ; i < len ; i++){
          $("#domain-list").append(
            "<tr id="+data[i]["id"]+" class='hoverable-domain' style='cursor:pointer'>"+
            "<td onclick='change("+data[i]["id"]+","+page+")'>"+data[i]["name"]+"</td>"+
            "<td><button onClick='delete_domain("+data[i]["id"]+")' class='btn btn-danger'><i class='fas fa-trash-alt'></i></button></td>"+
            "</tr>"
            );
        }
        $('#domaintable').DataTable();
        change(selected,page);
       }
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.table(textStatus);
        console.table(errorThrown);
      }
});
}
function open_domain_dialog(){
  $("#add-domain-modal").modal("show");
}

function add_new_domain(){
  console.log($("#new_domain").val());
  if($("#new_domain").val() == "" || $("#new_domain").val() === undefined || $("#new_domain").val() == null){
    alert("Please enter valid domain name");
  }else{
    $.ajax({
      type:"POST",
      ContentType: "application/json; charset=utf-8",
      url:BASE_URL+"subdomain.php",
      data:{"usage":4,"domain":$("#new_domain").val()},
      success: function(response){
          console.log(response);
         response = JSON.parse(response);
         if(response.error === "false") {
          alert("domain added successfully.")
           setTimeout(()=>{location.reload()},3000)
         }
         else {
          alert("unable to add domain.")
           setTimeout(()=>{location.reload()},3000)
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
          console.table(textStatus);
          console.table(errorThrown);
        }
  });
  }
}
function delete_domain(id){
  $.ajax({
    type:"POST",
    ContentType: "application/json; charset=utf-8",
    url:BASE_URL+"subdomain.php",
    data:{"usage":5,"domain":id},
    success: function(response){
        console.log(response);
       response = JSON.parse(response);
       if(response.error === "false") {
        alert("domain deleted successfully.")
         setTimeout(()=>{location.reload()},3000)
       }
       else {
        alert("unable to delete domain.")
         setTimeout(()=>{location.reload()},3000)
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.table(textStatus);
        console.table(errorThrown);
      }
});
}