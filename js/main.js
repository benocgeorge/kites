window.onscroll = function (e) {  
    flexheader();
    } 
  
  
    window.onload = function() {
      preloader();  //example function call.
    }
  
    setInterval(function(){
      next();
  }, 7500);
  
    function flexheader()
    {
       if(window.scrollY > 300)
       {
        if(!document.getElementById('header').classList.contains('flex-header'))
        {
            document.getElementById('header').classList.add('flex-header');
        }
       }
       else{
        if(document.getElementById('header').classList.contains('flex-header'))
        {
            document.getElementById('header').classList.remove('flex-header');
        }
       }
       
    }
  
  
  
  function preloader()
  {
    setInterval(function(){
        document.getElementById('preloader').classList.add("hidePreloader");
        setInterval(function(){
          document.getElementById('preloader').style.display = "none";
        }, 500);
    }, 1000);
  
  
  }
  
  
  function showMobMenu() {
  document.getElementById('navbar_menu').classList.toggle("dropdown");
  if(document.getElementById('navbar_menu').classList.contains("dropdown"))
  {
    document.getElementById('navbar_mob_icon').classList.remove("fa-bars");
    document.getElementById('navbar_mob_icon').classList.add("fa-times");
    document.getElementById('navbar_mob_icon').style.color = "#01012E";
  }
  else {
    document.getElementById('navbar_mob_icon').classList.remove("fa-times");
    document.getElementById('navbar_mob_icon').classList.add("fa-bars");
    document.getElementById('navbar_mob_icon').style.color = "white";
  }
  }
  
  
  
  function previous()
  {
    var i = 1;
    slidelength = document.querySelectorAll('.carousel-item').length;
    check = 0;
    while(i <= slidelength)
    {
      if(document.getElementById('slide'+i).classList.contains("carousel-active"))
      {
        check = i;
        document.getElementById('slide'+i).style.zIndex = "1";
        document.getElementById('slide'+i).classList.add("carousel-hide");
        document.getElementById('slide'+i).classList.remove("carousel-active");
      }
      i = i + 1;
    }
    if(check == 1)
    {
      check = 2;
    }
    else if(check == 2)
    {
      check = 1;
    }
    else{
      check = check - 1;
    }
    document.getElementById('slide'+check).style.zIndex = "2";
    document.getElementById('slide'+check).classList.remove("carousel-hide");
    document.getElementById('slide'+check).classList.add("carousel-active");
  
  }
  
  function next()
  {
    var i = 1;
    check = 0;
    slidelength = document.querySelectorAll('.carousel-item').length;
    while(i <= slidelength)
    {
      console.log(slidelength);
      if(document.getElementById('slide'+i).classList.contains("carousel-active"))
      {
        check = i;
        document.getElementById('slide'+i).style.zIndex = "1";
        document.getElementById('slide'+i).classList.add("carousel-hide");
        document.getElementById('slide'+i).classList.remove("carousel-active");
      }
      i = i + 1;
    }
    if(check == slidelength)
    {
      check = 1;
    }
    else{
      check = check + 1;
    }
    document.getElementById('slide'+check).style.zIndex = "2";
    document.getElementById('slide'+check).classList.remove("carousel-hide");
    document.getElementById('slide'+check).classList.add("carousel-active");
  
  }
  
  
  function togglemobileMenu()
  {
      if(document.getElementById('headerMenu').classList.contains('show-header-menu'))
      {
          document.getElementById('headerMenu').classList.remove('show-header-menu');
          document.getElementById('ToggleIcon').src = "asset/img/icons/burger-simple-svgrepo-com.svg";
          
      }
      else{
          document.getElementById('headerMenu').classList.add('show-header-menu');
          
          document.getElementById('ToggleIcon').src = "asset/img/icons/close-bold-svgrepo-com.svg";
      }
  }



  function showDataContent(x)
  {
    document.getElementById('DataContent'+x).classList.add('content-show');
  }

  function hideDataContent(x)
  {
    document.getElementById('DataContent'+x).classList.remove('content-show');
  }



  function showPopup()
  {
    document.getElementById('popup').classList.add('show-popup');
  }
  function removePopup()
  {
    document.getElementById('popup').classList.remove('show-popup');
  }

  function freeQuote()
  {
    firstName = document.getElementById('firstName').value;
    mobile = document.getElementById('mobile').value;
    email = document.getElementById('email').value;
    message = document.getElementById('message').value;
    if(firstName == "")
      {
        alert("Enter name and Retry!");
      }
      else if(mobile == "")
        {
          alert("Enter Mobile number and Retry!");
        }
        else if(email == "")
          {
            alert("Enter Email and Retry!");
          }
          else if(message == ""){
            alert("Enter Message and Retry!");
          }
          else{
            var req = new XMLHttpRequest();
            req.onload = function() {
              if(this.responseText.trim() == "success")
                {
                  alert("Email send successfully!");
                  removePopup();
                  clearPopup();
                }
                else{
                  alert(this.responseText);
                }
            };

            req.open("get", "mail.php?firstName="+firstName+"&mobile="+mobile+"&email="+email+"&comments="+message, true);
            req.send();
          }



  }

  function clearPopup()
  {
    document.getElementById('firstName').value = "";
    document.getElementById('mobile').value = "";
    document.getElementById('email').value = "";
    document.getElementById('message').value = "";
  }

  function contactUs()
  {
    firstName = document.getElementById('firstName1').value;
    mobile = document.getElementById('mobile1').value;
    email = document.getElementById('email1').value;
    message = document.getElementById('message1').value;
    if(firstName == "")
      {
        alert("Enter name and Retry!");
      }
      else if(mobile == "")
        {
          alert("Enter Mobile number and Retry!");
        }
        else if(email == "")
          {
            alert("Enter Email and Retry!");
          }
          else if(message == ""){
            alert("Enter Message and Retry!");
          }
          else{
            var req = new XMLHttpRequest();
            req.onload = function() {
              if(this.responseText.trim() == "success")
                {
                  alert("Email send successfully!");
                  removePopup();
                  clearContactUs();
                }
                else{
                  alert(this.responseText);
                }
            };

            req.open("get", "mail.php?firstName="+firstName+"&mobile="+mobile+"&email="+email+"&comments="+message, true);
            req.send();
          }
  }

  function clearContactUs()
  {
    document.getElementById('firstName1').value = "";
    document.getElementById('mobile1').value = "";
    document.getElementById('email1').value = "";
    document.getElementById('message1').value = "";
  }