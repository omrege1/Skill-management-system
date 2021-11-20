function Generate_cv(){
    let App_name=document.getElementById("Name").value;
    let Template_name1=document.getElementById("Template_name1");
    Template_name1.innerHTML=App_name;
    document.getElementById("Template_name2").innerHTML=App_name;
    document.getElementById("Template_phone_num").innerHTML=document.getElementById("Phone Number").value;
    document.getElementById("Template_email").innerHTML=document.getElementById("Email").value;
    document.getElementById("Template_linkedin").innerHTML=document.getElementById("Linkedin_link").value;
    document.getElementById("Template_github").innerHTML=document.getElementById("Github_link").value;
    document.getElementById("Template_objectives").innerHTML=document.getElementById("Objectives").value;
    document.getElementById("Template_exp").innerHTML=document.getElementById("weField").value;
    document.getElementById("Template_qual").innerHTML=document.getElementById("aqField").value;
    document.getElementById("Template_cert").innerHTML=document.getElementById("certField").value;
  
    
    document.getElementById("Template_Skill1").innerHTML=document.getElementById("Skill1").value;
    document.getElementById("Template_Skill2").innerHTML=document.getElementById("Skill2").value;
    document.getElementById("Template_Skill3").innerHTML=document.getElementById("Skill3").value;
    let img=document.getElementById("profile_pic").files[0];
    let reader=new FileReader();
    reader.readAsDataURL(img);
    reader.onloadend=function(){
        document.getElementById("Template_photo").src=reader.result;
    };
    document.getElementById("resume_form").style.display="none";
    document.getElementById("cv_template").style.display="block";
}
function print_cv(){
    window.print();
}



