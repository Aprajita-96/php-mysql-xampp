"use strict";


$(document).ready(()=>{
    console.log("called");
const table=$("#data_table").DataTable({
    dom:'Bfrtip',
    buttons:[
        {
            text: '<i class="bi bi-printer"></i>',
            titleAttr: 'Print',
            action: (e,dt,node,config)=>{
                alert("Printing")
            }
        },
        {
            text: '<i class="bi bi-save"></i>',
            titleAttr: 'Save',
            action: (e,dt,node,config)=>{
                alert("Saving")
            }
        },
        {
            text: 'New Employee',
            titleAttr: 'New Employee',
            action: (e,dt,node,config)=>{
                alert("Adding")
            }
        }
    ]
})
$("#data_table tbody").on('click','td',function(){
    var data=table.row($this).parent('tr').data();
    if(table.cell(this).index().column==5){
        alert("edit");
    }
    if(table.cell(this).index().column==6){
        alert("delete");
    }
})
    $('.nav ul li:first').add('active');
    $('.tab-content:not(:first)').hide();

    $('.nav ul li a').click(function(e){
        e.preventDefault();
        var content=$(this).attr("href");
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        $(content).show();
        $(content).siblings(".tab-content").hide();
    })
})