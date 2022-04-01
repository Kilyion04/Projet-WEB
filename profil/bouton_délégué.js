var entreprise = document.getElementById('btn-1');

entreprise.onclick = function() {
    {
        var div_entreprise_1 = document.getElementById('offre');
        if (div_entreprise_1.style.display !== 'none') {
            div_entreprise_1.style.display = 'none';
        }
        else {
            div_entreprise_1.style.display = 'none';}
        }
    {
        var div_entreprise_2 = document.getElementById('avancement');
        if (div_entreprise_2.style.display !== 'none') {
            div_entreprise_2.style.display = 'none';
        }
        else {
            div_entreprise_2.style.display = 'none';}
        }
    {
        var div_entreprise_3 = document.getElementById('promotion');
        if (div_entreprise_3.style.display !== 'none') {
            div_entreprise_3.style.display = 'none';
        }
        else {
            div_entreprise_3.style.display = 'none';
        }
    }  
};

var offre = document.getElementById('btn-2');

offre.onclick = function() {
    {
        var div_offre_1 = document.getElementById('entreprise');
        if (div_offre_1.style.display !== 'none') {
            div_offre_1.style.display = 'none';
        }
        else {
            div_offre_1.style.display = 'none';}
        }
    {
        var div_offre_2 = document.getElementById('avancement');
        if (div_offre_2.style.display !== 'none') {
            div_offre_2.style.display = 'none';
        }
        else {
            div_offre_2.style.display = 'none';}
        }
    {
        var div_offre_3 = document.getElementById('promotion');
        if (div_offre_3.style.display !== 'none') {
            div_offre_3.style.display = 'none';
        }
        else {
            div_offre_3.style.display = 'none';
        }
    }  
};

var avancement = document.getElementById('btn-4');

avancement.onclick = function() {
    {
        var div_avancement_1 = document.getElementById('entreprise');
        if (div_avancement_1.style.display !== 'none') {
            div_avancement_1.style.display = 'none';
        }
        else {
            div_avancement_1.style.display = 'none';}
        }
    {
        var div_avancement_2 = document.getElementById('offre');
        if (div_avancement_2.style.display !== 'none') {
            div_avancement_2.style.display = 'none';
        }
        else {
            div_avancement_2.style.display = 'none';}
        }
    {
        var div_avancement_3 = document.getElementById('promotion');
        if (div_avancement_3.style.display !== 'none') {
            div_avancement_3.style.display = 'none';
        }
        else {
            div_avancement_3.style.display = 'none';
        }
    }  
};

var promotion = document.getElementById('btn-5');

promotion.onclick = function() {
    {
        var div_promotion_1 = document.getElementById('entreprise');
        if (div_promotion_1.style.display !== 'none') {
            div_promotion_1.style.display = 'none';
        }
        else {
            div_promotion_1.style.display = 'none';}
        }
    {
        var div_promotion_2 = document.getElementById('offre');
        if (div_promotion_2.style.display !== 'none') {
            div_promotion_2.style.display = 'none';
        }
        else {
            div_promotion_2.style.display = 'none';}
        }
    {
        var div_promotion_3 = document.getElementById('avancement');
        if (div_promotion_3.style.display !== 'none') {
            div_promotion_3.style.display = 'none';
        }
        else {
            div_promotion_3.style.display = 'none';
        }
    }  
};






document.getElementById("btn-4").addEventListener("click", function()
{
  var box4=document.getElementById("avancement");
  if(box4.style.display=="block")
  {
    box4.style.display="none";
  }
  else
  {
    box4.style.display="block";
  }
})

document.getElementById("btn-5").addEventListener("click", function()
{
  var box5=document.getElementById("promotion");
  if(box5.style.display=="block")
  {
    box5.style.display="none";
  }
  else
  {
    box5.style.display="block";
  }
})