<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="stylesheet" href="style.css">
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body class="flex justify-center">


    <div id="main-container" class="container min-h-screen   ">
        <header class="flex h-20 max-h-20 bg-white" >
          <div class="flex w-3/4 justify-between">
            <div><img src="download.svg" alt="" srcset=""></div>
          <div class="flex justify-center w-3/4 ">
            <form class="flex w-full justify-center self-center  "> 
              <button class="ml-3  self-center btn-search"><center>
                <svg  width="1em" height="1em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 2.007a4 4 0 100 8 4 4 0 000-8zm-6 4a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 010 6.007z" fill="currentColor"></path></svg>
              </center></button>
               <input id="search-input"  class="self-center w-full  focus:outline-none " type="text" placeholder="search dans le catalogue">  
             </form>
          </div>
            </div>
            <div id="nav-menu" class=" m-1 flex ">
              <i class="self-center icon"><svg width="14" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.66 4.75h.5V3.714a2.714 2.714 0 115.43 0V4.75h1.919a.84.84 0 01.835.752h0l.902 8.571a.838.838 0 01-.835.927h0H1.339h0a.84.84 0 01-.834-.927s0 0 0 0l.902-8.571s0 0 0 0 0 0 0 0a.84.84 0 01.835-.752H3.66zm.572-.5v.5h5.286V3.714c0-.7-.278-1.373-.774-1.869l-.338.339.338-.339a2.643 2.643 0 00-4.512 1.87v.535zm1.482 4.376a1.643 1.643 0 01-.482-1.162V6.93a1.036 1.036 0 10-2.071 0v.535a3.714 3.714 0 007.428 0V6.93a1.035 1.035 0 10-2.071 0v.535a1.643 1.643 0 01-2.804 1.162z" stroke="#66676B"></path></svg></i>
              <a class="self-center" href="">categories</a>
            </div>
            <div id="icons-header" class=" m-1 flex justify-between justify-self-end ">
              <div class="flex justify-between ">
                <a class="flex self-center" href=""><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 24 24" fill="none">
              
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0724 4.02447C15.1063 3.04182 13.7429 2.5 12.152 2.5C10.5611 2.5 9.19773 3.04182 8.23167 4.02447C7.26636 5.00636 6.73644 6.38891 6.73644 8C6.73644 10.169 7.68081 11.567 8.8496 12.4062C9.07675 12.5692 9.3115 12.7107 9.54832 12.8327C8.24215 13.1916 7.18158 13.8173 6.31809 14.5934C4.95272 15.8205 4.10647 17.3993 3.53633 18.813C3.43305 19.0691 3.55693 19.3604 3.81304 19.4637C4.06914 19.567 4.36047 19.4431 4.46375 19.187C5.00642 17.8414 5.78146 16.4202 6.98653 15.3371C8.1795 14.265 9.82009 13.5 12.152 13.5C14.332 13.5 15.9058 14.1685 17.074 15.1279C18.252 16.0953 19.0453 17.3816 19.6137 18.6532C19.9929 19.5016 19.3274 20.5 18.2827 20.5H6.74488C6.46874 20.5 6.24488 20.7239 6.24488 21C6.24488 21.2761 6.46874 21.5 6.74488 21.5H18.2827C19.9348 21.5 21.2479 19.8588 20.5267 18.2452C19.9232 16.8952 19.0504 15.4569 17.7087 14.3551C16.9123 13.7011 15.9603 13.1737 14.8203 12.8507C15.43 12.5136 15.9312 12.0662 16.33 11.5591C17.1929 10.462 17.5676 9.10016 17.5676 8C17.5676 6.38891 17.0377 5.00636 16.0724 4.02447ZM15.3593 4.72553C16.1144 5.49364 16.5676 6.61109 16.5676 8C16.5676 8.89984 16.2541 10.038 15.544 10.9409C14.8475 11.8265 13.7607 12.5 12.152 12.5C11.5014 12.5 10.3789 12.2731 9.43284 11.5938C8.51251 10.933 7.73644 9.83102 7.73644 8C7.73644 6.61109 8.18963 5.49364 8.94477 4.72553C9.69916 3.95818 10.7935 3.5 12.152 3.5C13.5105 3.5 14.6049 3.95818 15.3593 4.72553Z" fill="#0055A6"/>
              </svg>
              <span>inviter</span></a> 
            </div>
            <div class="flex justify-between ">
              <a class="flex self-center" href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="27" viewBox="0 0 30 27" width="30"><path d="M1.39999 1.70001H6.60001" stroke="#0055A6" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M6.60001 1.70001L11 18.9" stroke="#0055A6" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M11.8 18.9H28.3" stroke="#0055A6" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M13.8 25.7C15.4569 25.7 16.8 24.3569 16.8 22.7C16.8 21.0432 15.4569 19.7 13.8 19.7C12.1431 19.7 10.8 21.0432 10.8 22.7C10.8 24.3569 12.1431 25.7 13.8 25.7Z" stroke="#0055A6" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M25.3 25.7C26.9568 25.7 28.3 24.3569 28.3 22.7C28.3 21.0432 26.9568 19.7 25.3 19.7C23.6431 19.7 22.3 21.0432 22.3 22.7C22.3 24.3569 23.6431 25.7 25.3 25.7Z" stroke="#0055A6" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M25.7 14.6H11.3C10.7 14.6 10.1 14.2 10 13.6L8.1 6.90001C7.9 6.00001 8.49999 5.20001 9.39999 5.20001H27.5C28.4 5.20001 29.1 6.10001 28.8 6.90001L26.9 13.6C26.9 14.2 26.4 14.6 25.7 14.6Z" stroke="#0055A6" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
            <span>panier</span></a> 
          </div>
            </div>
      </header>
     
      @yield("content")
      



    </div>
    


</body>
</html>





