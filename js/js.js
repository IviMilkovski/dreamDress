$(document).ready(function() {
    // sortBy();
    // DohvatiS();
    // DohvatiD();

    $("#silho").change(function(){
        let value = $(this).val();

        $.ajax({
            url: "modules/sil.php",
            method: "POST",
            type: "JSON",
            data: {
                silho: value
            },
            success: function(data){
                console.log(data);
                let dresses = data.dresses;
                getDresses(dresses);

            },
            error: function(error){
                console.log(error);
            }
        })
    })



    
$("#search").keyup(function(){
    let serached = $(this).val();

    $.ajax({
        url: "modules/search.php",
        data:serached,
        method: "POST",
        success: function(dresses){

            getDresses(dresses);
            
        },
        error: function(error) {
            console.log(error);
        }
    })
});
});


//sortiranje, filtriranje i ispis proizvoda


function sortAndFilter(){
    let des = $("#silhou").val();
    let sil = $("#design").val();
    let sortItBy = $("#sortItBy").val(); 

    ajaxDresses((dresses) => {
        if(des!=0){
            var filter = dresses.filter(d => {
            return d.id_designer == des;
            });
        }else{
                filter = dresses;
                }
        if(sil!=0){
            var filter = dresses.filter(d => {
            return d.id_Silhouette == des;
            });
        }else{
                filter = dresses;
        }    
        if (sortItBy == "LtH")
         { priceLToH(filter); }
        else if (sortItBy == "HtL")
         { priceHToL(filter); }
        else if (sortItBy == "AZ")
         { aToZ(filter); }
        else if (sortItBy == "ZA")
         { zToA(filter); }
        else if (sortItBy == "0")
         { getDresses(filter) }
         getDresses(filter);
         addTooCartForAll(filter);
    });
}

function priceLToH(dresses) {
    let sorted = dresses.sort((a, b) => {
    let price1 = a.price.new;
    let price2 = b.price.new;
    return price1 - price2;
    });
    getDresses(sorted);
    addTooCartForAll(sorted);
   }
   
//price high to low
function priceHToL(dresses) {
    let sorted = dresses.sort((a, b) => {
    let price1 = a.price.new;
    let price2 = b.price.new;
    return price2 - price1;
    });
    getDresses(sorted);
    addTooCartForAll(sorted);
   }


//od A do Z
   function aToZ(dresses) {
    let sorted = dresses.sort((a, b) => {
    let name1 = a.name;
    let name2 = b.name;
    return name1 > name2 ? 1 : -1;
    });
    getDresses(sorted);
    addTooCartForAll(sorted);
   }

//od Z do A

function zToA(dresses) {
    let sorted = dresses.sort((a, b) => {
    let name1 = a.name;
    let name2 = b.name;
    return name1 < name2 ? 1 : -1;
    });
    getDresses(sorted);
    addTooCartForAll(sorted);
   }




function ajaxDresses(callBack) {
    $.ajax({
    url: "dohvatanje/dres.php",
    method: "GET",
    dataType: "json",
    success: callBack
    });
   }  




function sortBy(){
    let array = ["Price Low to High","Price High to Low","Title A-Z","Title Z-A"];
    let values = ["LtH","HtL","AZ","ZA"];
    let ispisi =``;
    for (let i in array) {
    ispisi+=`<option value="${values[i]}">${array[i]}</option>`;
    }
    $("#sortItBy").append(ispisi);
   };



   function DohvatiS(){
    $.ajax({
        url:"dohvatanje/sil.php",
        dataType:"json",
        success:function(data){
        putS(data);
        }
        });
   };

   function putS(silhouette){
    let ispisi = ``;
 for (let s of silhouette) {
 ispisi+=`<option value="${s.id_Silhouette}">${s.name}</option>`;
 }
 $("#silhou").append(ispisi);
   };




   function DohvatiD(){
    $.ajax({
        url:"dohvatanje/des.php",
        dataType:"json",
        success:function(data){
        putD(data);
        console.log(data);
        }
        });
   };

   function putD(designers){
    let ispisi = ``;
 for (let d of designers) {
 ispisi+=`<option value="${d.id_designer}">${d.name}</option>`;
 }
 $("#design").append(ispisi);
   };






//    function allDresses(){
//     $.ajax({
//         url : 'dohvatanje/dres.php',
//         method: 'GET',
//         dataType: 'json',
//         success: (dresses) => {
//             getDresses(dresses);
//             console.log(dresses);
//         },
//         error: (xlr, status, error) => {
//             console.log(error);
//         }
//     });
// }
// allDresses();














//sign up

$(document).on('click', '#signupbtn', function(){
    let usernameVrednost =$('#username').val();
    let emailVrednost =$('#email').val();
    let passwordVrednost =$('#password').val();
    let erors=[];
    let proveraUsername = /^[A-z0-9\_]{3,15}$/;
    let proveraMail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zAZ]{2,5})$/;
    let proveraPass = /^[A-z0-9\_]{8,20}$/;
if(proveraUsername.test(usernameVrednost)){
    $('#username').css({border:"1px solid green"});
    }
    else{
        erors.push("Username is invalid");
    }
    if(proveraMail.test(emailVrednost)){
        $('#email').css({border:"1px solid green"});
        }
    else{
            erors.push("Email is invalid");
        }
    if(proveraPass.test(passwordVrednost)){
            $('#pass').css({border:"1px solid green"});
            }
    else{
           erors.push("Password is invalid");
            }
if(erors.length){
                for(let er of erors){
                alert(er);
            }
        }
else{
            $.ajax({
            url:"modules/sign.php",
            method: "post",
            data:{
            username:usernameVrednost,
            email:emailVrednost,
            password:passwordVrednost,
            send:true
            },
            success:function(data){
                console.log(data);
                $("#feedback").html("<h1>You signed up</h1>");
            },
            error : function(xhr,status,error){
                var poruka = "There is an error";
                console.log(status);
                console.log(xhr);
                switch(xhr.status){
                    case 404 :
                    poruka = "The page was not found";
                    break;
                    case 409 :
                    poruka = "The username or email already excists";
                    break;
                    case 422 :
                    poruka = "The data isn't valid";
                    break;    
                    case 500:
                    poruka = "Error";
                    break;
                }
                alert(poruka);
            }
        })
        }
    });


//log in
$(document).on('click', '#logsubmit', function(){

    let emailLog =$('#logemail').val();
    let passwordLog =$('#logpass').val();
    let checkEmail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zAZ]{2,5})$/;
    let checkPass = /^[A-z0-9\_]{8,20}$/;
    let errors=[];

    if(checkEmail.test(emailLog)){
        $('#logemail').css({border:"1px solid green"});
        }
    else{
            errors.push("Email is invalid");
        }
    if(checkPass.test(passwordLog)){
            $('#passlog').css({border:"1px solid green"});
            }
    else{
           r.push("Password is invalid");
            }
if(errors.length){
                for(let er of errors){
                alert(er);
            }
        }
else{
            $.ajax({
            url:"modules/log.php",
            method: "post",
            data:{
            email:emailLog,
            password:passwordLog,
            send:true
            },
            success:function(data){
                console.log(data);
                
            },
            error : function(xhr,status,error){
                var poruka = "There is an error";
                console.log(status);
                console.log(xhr);
                switch(xhr.status){
                    case 404 :
                    poruka = "The page was not found";
                    break;
                    case 409 :
                    poruka = "The username or email already excists";
                    break;
                    case 422 :
                    poruka = "The data isn't valid";
                    break;    
                    case 500:
                    poruka = "Error";
                    break;
                }
                alert(poruka);
            }
        })
        }

});
















//scroll to top

$("#scrollToTop").click(function(){

    $("html").animate({
        scrollTop: 0
    }, 1000);
});

$("#scrollToTop").hide();

$(window).scroll(function(){
    let top = $(this)[0].scrollY;
    
    if(top > 500){
        $("#scrollToTop").show();
    } else {
        $("#scrollToTop").hide();
    }
});

//Futer - mreze
function social(){
    var asocijala=document.querySelector("#mreze");
    var mreze=["facebook","instagram","twitter","tumblr"];
    for(let i=0;i<mreze.length;i++){
            asocijala.innerHTML+=`<a href="#" class="text-white"><i class="fa fa-${mreze[i]} mx-2" aria-hidden="true"></i></a>`;
    }
}

social();

$("#fade").modal({
    fadeDuration: 1000,
    fadeDelay: 0.50
  });

  

  ///contact
  $(document).on('click', '#dugme', function(){

    let mail = $('#mail').val();
    let area = $('#areaMes').val();
    let erorsc=[];
   
    let regMail = /^[a-z][a-z\-\d-\.\_]+\@[a-z]+(\.[a-z]{2,11}){1,2}$/;
    let regArea = /^([A-z\d\.\-\_\,\/\@\"\'\s\n\!\?])+$/;

    if(regMail.test(mail)){
        $('#mail').css({border:"1px solid green"});
        }
    else{
            erorsc.push("Email is invalid.");
        }
        if(regArea.test(area)){
            $('#areaMes').css({border:"1px solid green"});
        }
        else{
            erorsc.push("The message is too short or too long or not writen.");
        }
        if(erorsc.length){
            for(let er of erorsc){
            alert(er);
        }
    }
    else{
        $.ajax({
            url:"modules/contactcheck.php",
            method:"post",
            data:{
                mail:mail,
                areaMes:area,
                send:true
            },
            success:function(data){
                console.log(data);
                $("#uspeh").html("<h5>You have sent the message!</h5>");
            },
            error : function(xhr,status,error){
                var poruka = "There is an error";
                console.log(status);
                console.log(xhr);
                switch(xhr.status){
                    case 404 :
                    poruka = "The page was not found";
                    break;
                    case 409 :
                    poruka = "The username already excists";
                    break;
                    case 422 :
                    poruka = "The data isn't valid";
                    break;    
                    case 500:
                    poruka = "Error";
                    break;
                }
                alert(poruka);
            }
        })
    }
});
function getDresses(dresses){

        let ispisi = "";
        for(let dr of dresses){
            ispisi += `<div class="col-lg-4 col-md-6 mt-4">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4 col-4">
                  <img src="${dr.src}
                  " class="card-img" alt="${dr.alt}">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h6 class="card-title">${dr.name}</h6>
                    <p class="card-text">Silhouette:${dr.sNames}</p>
            
                    <p class="card-text"><small class="text-muted">
                    ${ifInStock(dr.in_stock)}</small></p>
                                     <p>Price: ${dr.price}$</p>
                                     <button class="btn btn-secondary m-3 addItToFavorite" data-idbook="${dr.id_dress}"
                                  >Add to Favourite ❤</button>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>`;
                                function ifInStock(in_stock){
                                    if(in_stock == 1){
                                        return"<span class='okay'>In stock</span>";
                                    }else{
                                        return "<span class='no'>Sold out</span>";
                                    }
                                };
         
        $("#cardbook").html(ispisi); 
        
        }
    }
