<!-- component -->
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="./icons/icons.js"></script>
  <script src="./js/react.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  @vite('resources/css/app.css')

</head>

<body class="bg-[#607FBB] ">

  <div class="">
    <!-- navbar -->
    <nav class="flex fixed bg-white w-full justify-between mb-10 drop-shadow-xl">
      <div class="flex items-center py-0 p-7">
        <img class="w-16 object-contain" src={{url('/img/LogoPolibatam.png')}} alt="LogoPolibatam">
        <img class="object-cover" src={{url('/img/PBL.png')}} alt="PBL">
        <!-- <img class="object-cover " src={{url('/img/vanba.png')}} alt="PBL"> -->
      </div>
      <div class="bg-[#7488C5] relative left-20 skew-x-[-45deg] w-1/5 h-auto "></div>
      <div class="bg-[#486FBC] skew-x-[-45deg] w-[100%] relative left-20 h-auto "></div>

      <!-- <div class="w-80 relative left-16 ml-16 h-auto bg-[#7488C5]" style="clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);"></div>
        <div class="w-1/2 h-auto bg-[#486FBC]" ></div>
        <div> -->

      <div class="flex flex-col gap-0 z-20 justify-center items-center relative bg-[#486FBC] px-11 py-2">
        <img class="object-cover relative bg-[#486FBC] w-[2rem]" src={{url('/img/logout.png')}} alt="PBL">
        <a href="/login" class="relative text-white text-xl bg-[#486FBC]">
          Logout</a>
      </div>
  </div>
  </nav>


  <!-- Sidebar content -->
  <div class="bg-white float-left pt-16 pb-96 h-full">
    <div class="p-8">
      <div class="flex items-center mb-6">
        <img class="w-10 object-contain m-2" src={{url('/img/headset1.png')}}>
        <h1 class=" pt-2 font-medium text-2xl text-blue-900">Operator</h1>
      </div>
      <hr class="mb-5" style="height:2px;border:none;color:#333; background-color:#333;">
      <ul>

            <!-- robot 1 -->
          <div class="flex items-center mb-12 ">
                <button type="button" class="flex w-full gap-x-1.5 bg-white text-2xl font-semibold text-gray-900 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                      <img class="w-10 object-contain " src={{url('/img/robot-removebg.png')}}>
                          <li class="font-medium text-2xl"><a href="#" class=" text-blue-900 pl-1 py-2 md:py-4 focus:outline-none w-full rounded-xl">Robot 1</a></li>
                              <svg class="-mr-1 mt-2 h-5 w-5 text-blue-900 -rotate-90" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                              </svg>
                </button>
          </div>
          <div class="relative inline-block text-left">
    <div>




  </div>
      </ul>
    </div>
  </div>
  </div>
  <!-- content -->
  <div class="overflow-hidden pt-24">
    <h1 class="text-center text-5xl text-white underline font-medium mb-6 italic">MAPPING</h1>
    <div class="bg-white w-[95%] h-auto p-7 rounded-xl mx-auto max-w-[2000px]">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, nesciunt hic deserunt odio cumque quisquam laboriosam iure adipisci vero nisi ratione tempora incidunt, similique debitis. Optio molestiae sint magni et dolor? Quod quaerat sit tempora, nihil dolorem eius temporibus quasi ad minus eaque. Illum, molestias magnam eos debitis iste voluptatibus aliquam explicabo iusto, repellendus sequi optio id modi. Temporibus nobis, adipisci aperiam esse iusto ipsam quaerat possimus repellendus nesciunt numquam laborum quam sequi. Minima rerum quas, voluptates incidunt nostrum consequatur quisquam repellat adipisci blanditiis eligendi error dolore id rem illo, enim numquam voluptatem libero minus. Esse ducimus necessitatibus, cupiditate doloribus voluptates dolore pariatur fugiat magnam ex nemo, consectetur iusto officia amet ratione explicabo illo in minima nulla hic. Ipsa deleniti rerum exercitationem tempore sint voluptatum neque earum rem, ab aut sunt voluptas eaque repudiandae necessitatibus. Nihil itaque quam exercitationem, culpa veritatis dolore maiores ipsam quasi pariatur ipsum labore explicabo autem, incidunt facere aspernatur vel reiciendis possimus placeat tempore voluptatibus optio sunt assumenda deleniti doloribus. Esse quasi, magni soluta dicta alias dolorem eveniet vero voluptates perspiciatis veritatis labore numquam ipsam iste dolore in consequuntur incidunt necessitatibus assumenda delectus quis quaerat. Corrupti reprehenderit suscipit possimus modi ad eum mollitia ex sint repudiandae autem architecto dolorem provident quam, alias magnam repellat vel libero ipsum tempora in. Eaque, fugiat cum! Perspiciatis maiores placeat facilis necessitatibus delectus at, ex quo numquam quibusdam, modi eaque quas reiciendis molestias, neque labore sed optio ab! Quo, beatae aliquam. Debitis incidunt voluptates praesentium voluptas fugit? Sunt debitis magnam facilis? Dolorum harum hic iusto voluptatibus eligendi exercitationem totam corporis quas nisi minima voluptas animi eveniet perferendis, ipsa rerum consequuntur ratione ipsum facilis cumque velit. Est, ex quibusdam cupiditate dolorem reiciendis debitis quas ea atque aspernatur harum! A laborum facere ut omnis placeat sed quos praesentium, iusto non, provident alias excepturi possimus rerum veniam voluptates velit eius. Facere, eos libero, unde fugit corrupti reiciendis ea eum dolor aperiam voluptates sequi ullam quo. Ad debitis eos excepturi corporis beatae ipsa expedita molestias modi eius, consequatur perferendis exercitationem, pariatur blanditiis totam magnam quo! Ducimus illo molestias id nemo quisquam repellendus culpa perspiciatis qui hic itaque odit rerum repellat, at mollitia tempora nesciunt quis, sequi explicabo facilis. Alias, dolore optio? Maxime pariatur molestias, tenetur, rem esse eligendi quisquam blanditiis deleniti, asperiores autem voluptatem expedita voluptatibus iste ipsum enim illum. Voluptas, necessitatibus id veniam similique, at odio temporibus excepturi aut, aliquid reprehenderit quod illo! Aliquid quisquam praesentium omnis voluptatum, officia unde esse! Necessitatibus, blanditiis architecto expedita doloribus deleniti porro magni iste itaque voluptatibus iure assumenda sint maxime qui accusantium amet asperiores aperiam modi cupiditate. Qui excepturi amet architecto molestiae, ducimus ullam reiciendis. Delectus pariatur architecto minus sit ipsum alias ullam eveniet, fuga commodi veniam unde officiis? Quisquam doloribus at corporis unde vitae quasi non, sit numquam commodi beatae. Ullam necessitatibus minima quisquam dolor tempora dolorem. Non omnis cumque distinctio, quasi fugiat quas magnam id sequi tempore porro nostrum error quae illum expedita officiis vitae! Neque, dolore illum laboriosam architecto quos ratione quis animi enim maxime.</p>
    </div>
  </div>








  <!-- component -->
  <!-- <div class="bg-white-400 h-screen overflow-hidden flex items-center justify-center">
  <div class="bg-white lg:w-5/12 md:6/12 w-10/12 shadow-3xl">
      <img class="mx-auto" src={{url('/img/robotic.png')}} alt="fgfgf">
   
    <form class="p-12 md:p-24">
      <div class="flex items-center text-lg mb-6 md:mb-8">
        <svg class="absolute ml-3" width="24" viewBox="0 0 24 24">
          <path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/>
        </svg>
        <input type="text" id="username" class="bg-gray-200 pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Username" />
      </div>
      <div class="flex items-center text-lg mb-6 md:mb-8">
        <svg class="absolute ml-3" viewBox="0 0 24 24" width="24">
          <path d="m18.75 9h-.75v-3c0-3.309-2.691-6-6-6s-6 2.691-6 6v3h-.75c-1.24 0-2.25 1.009-2.25 2.25v10.5c0 1.241 1.01 2.25 2.25 2.25h13.5c1.24 0 2.25-1.009 2.25-2.25v-10.5c0-1.241-1.01-2.25-2.25-2.25zm-10.75-3c0-2.206 1.794-4 4-4s4 1.794 4 4v3h-8zm5 10.722v2.278c0 .552-.447 1-1 1s-1-.448-1-1v-2.278c-.595-.347-1-.985-1-1.722 0-1.103.897-2 2-2s2 .897 2 2c0 .737-.405 1.375-1 1.722z"/>
        </svg>
        <input type="password" id="password" class="bg-gray-200 pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Password" />
      </div>
      <button class="bg-[#7488C5] font-medium p-2 md:p-4 text-white uppercase w-full">Login</button>
    </form>
  </div>
 </div>
    <script>
        document.querySelector('#person').appendChild(person)
    </script>
</body>

</html-->