document.getElementById("getStudent").addEventListener("click",getstudent);
function getstudent()
{
    const id = document.getElementById("StudentName").value;
    $.ajax({
        method:"POST",
        url: "getstudent.php",
        data: {id:id},
        dataType:"json",
        success: function(data){
            let details = `<ul>
            <li>Roll No: ${data.rollno}</li>
            <li>Name: ${data.name}</li>
            <li>Marks: ${data.marks}</li>
            </ul>`;
            document.getElementById("StudentDetails").innerHTML = details;
        }
    });
}
document.addEventListener("DOMContentLoaded",function()
{
    $.ajax({
        method: "GET",
        url: "getstudent.php",  
        dataType: "json",
        data:null,
        success:function(data)
        {
            let optsio = ``;
            for(var i=0;i<data["student"].length;i++)
            {
                optsio += `<option value=${data["student"][i].id}>${data["student"][i].name}</option>`;
            }
            document.getElementById("StudentName").innerHTML = optsio;
        }
    });
});