<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        <div id="app">
            @include('dashboard.partials.nav-header-user')
            <center><img src="https://m.media-amazon.com/images/S/stores-image-uploads-na-prod/c/AmazonStores/ATVPDKIKX0DER/ee4b774f3bb178d5895ad7bc1348c9bf.w3000.h600.jpg" alt="" width="100%" height="100%">
            
            <main class="ps-4">
                <div class="container">
                    <center>
                        <h1 class="mt-5">
                            <img class="mb-3" src="https://media1.giphy.com/media/jEl8zlvatJBVS/giphy.gif" alt="" width="10%" height="10%"> 
                                Bienvenido a la Farmacia Jedi 
                            <img class="mb-3" src="https://media1.giphy.com/media/jEl8zlvatJBVS/giphy.gif" alt="" width="10%" height="10%">
                        </h1>
                        
                        
                        <img src="https://cdn.custom-cursor.com/packs/2829/pusheen-yoda-and-lightsaber-pack.png" alt="" width="15%" height="15%" >
    
                        <p class="mt-2">Nosotros En esta sección podrás conocer más sobre Farmacias Jedi</p>
    
    
                        <section class="row 4 mt-5">
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <center><img src="https://cdn-icons-png.flaticon.com/512/2201/2201581.png" alt="" width="18%" height="15%">
    
                                <h4 class="mt-3">Informacion</h4>
                                <p class="mt-3">
                                    Somos una empresa de venta de medicamentos eticos y populares
                                </p>
                                <button type="button" class="btn btn-outline-success">Ver</button>
    
    
                            </article>
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <center><img src="https://cdn-icons-png.flaticon.com/512/4320/4320323.png" alt="" width="17%" height="15%">
                                <h4 class="mt-4">Contactanos</h4>
                                <p class="">
                                    <p>Estamos para atenderte las 24H</p>
                                    <button type="button" class="btn btn-outline-success">45785478</button>
                                </p>
                            </article>
                            
                        </section>
    
                        <section class="row 4 mt-5">
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                <center><img src="https://i.pinimg.com/originals/4c/cf/96/4ccf96b49f3c29cb83c446f034d5ee28.png" alt="" width="65%" height="25%">
    
                            </article>
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                <center><img src="https://i.pinimg.com/originals/b9/95/d8/b995d86eea468662800ae42cb9a0ea5a.png" alt="" width="55%" height="25%">
                            </article>
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                <center><img src="https://i.pinimg.com/originals/27/b7/54/27b754d0a0b4358df43f160b7911081c.png" alt="" width="50%" height="25%">
                            </article>
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                <center><img src="https://i.pinimg.com/originals/bf/19/4d/bf194d624be448d2684d203b446a5cbf.png" alt="" width="95%" height="25%">
                            </article>                        
                        </section>
    
                        <h2 class="mt-5">“Porque las mayores preocupaciones también pueden superarse con una de las mejores recetas Guatemaltecas…</h2>
        
    
                        <section class="row 4 mt-5 mb-5">
                            
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                </article>
                                
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-1">
                                <a title="Click para Chatear" target="_blank" rel="noopener" href="https://api.whatsapp.com/send?phone=50242779761&text=Proyecto%20Farmacia,%20Gabriela%20y%20Andrew%20:)">
                                    <center><img src="https://www.labolsera.com/modules/cdesigner/views/img/upload/418628dceb02a596976e72a10e896afff49562bc_whatsapp.png" alt="" width="100%" height="25%">
                                </a>
                            </article>
    
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-1">
                                <a title="Click para Facebook" target="_blank" rel="noopener" href="https://www.facebook.com/">
                                    <center><img src="https://i.pinimg.com/originals/cb/4d/e1/cb4de1bc975812503a7a6cb2ff0ef43b.png" alt="" width="100%" height="25%">
                                </a> 
                            </article>
                                
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                               
                            </article>  
    
                        </section>
                    </center>
    
                </div>
                
            </main>
        </div>
    </body>
</html>
