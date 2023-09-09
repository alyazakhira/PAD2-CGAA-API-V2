<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            body{
                background-color: #1A1E54;
                /* background-image: linear-gradient(180deg, rgba(74, 87, 239, 0.00) 0%, #4A57EF 100%); */
                background-attachment: fixed;
                height: 100vh;
                width: 100vw;
            }
            div.container{
                height: 100%;
            }
            img{
                width: 10rem;
            }
            .vector{
                max-width: 15rem;
            }
            .box{
                background-color: #F3C700;
                margin-top: -2rem;
            }
            .box, .box-shadow{
                min-width: 30rem;
            }
            .box-shadow{
                clip-path: ellipse();
                min-height: 1rem;
                margin-top: 3rem;
            }
            .title{
                font-size: 1.5rem;
            }
            .btn_submit{
                color: white;
                background-color: #4A57EF;
            }
            .polygon{
                background-image: linear-gradient(
                    rgba(243, 199, 0, 0.78), 
                    rgba(251, 238, 176, 0.55), 
                    rgba(254, 249, 230, 0)
                    );
                clip-path: polygon(
                    0% 100%,
                    100% 100%,
                    50% 0%
                    );
                width: 100vw;
                height: calc(100vh / 3);
                margin-top: -3rem;
                z-index: -1;
            }
            @media screen and (max-height: 800px){
                .lamp{
                    margin-top: -2rem;
                }
                img{
                    width: 8rem;
                }
                .polygon{
                    margin-top: -2.5rem;
                    width: calc(100vw / 2);
                    height: calc(100vh / 3);
                }
                .box-shadow{
                    margin-top: 2rem;
                }
            }
        </style>
    </head>
    <body >
        <!-- Chandelier and shadow -->
        <div class="box-lamp d-flex justify-content-center w-100 position-absolute top-0">
            <div class="d-flex flex-column align-items-center lamp">
                {{-- <img src="G:\DUMP KULIAH LUPI\chandelier1.svg"> --}}
                <div class="polygon"></div>
            </div>
        </div>
        <!-- Box Form -->
        <div class="container d-flex flex-column justify-content-center">
            <div class="text-center">
                <img src="G:\DUMP KULIAH LUPI\log-in_new.png" class="vector">
                <!-- <img src="G:\DUMP KULIAH LUPI\log-in.svg" class="vector"> -->
            </div>
            <div class="box rounded-4 p-4 align-self-center">
                <div class="d-flex flex-column text-center">
                    <p class="title fw-semibold mb-1">Email terkirim!</p>
                    <p class="mb-4">Silakan periksa kotak masuk email Anda.</p>
                </div>
            </div>
            <!-- Box Shadow -->
            <div class="bg-black align-self-center box-shadow"></div>
        </div>
        
    </body>
</html>