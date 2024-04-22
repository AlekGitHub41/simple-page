@extends('basic-html')
@section('content')
    <div class="main_container">
        <div class="container_">
            <div class="header pt-[50px] w-full h-[1000px] px-[6.2%]">
                <div class="flex items-center justify-between text-white w-full">
                    <img src="{{ asset('svg/logo.svg') }}" alt="">
                    <div class="menu flex justify-between items-center max-w-[477px] w-full h-[29px]">
                        @if($menu_items->isEmpty())
                            <p><a href="">Все туры</a></p>
                            <p><a href="">Отзывы</a></p>
                            <p><a href="">Контакты</a></p>
                        @else
                            @for($i = 0; $i < 3; $i++)
                                <p><a href="">{{ $menu_items[$i]->menu_item }}</a></p>
                            @endfor
                        @endif
                    </div>
                    <img class="cursor-pointer" src="{{ asset('svg/burger.svg') }}" alt="">
                </div>
                <div class="container_header_text flex justify-start w-full mt-[83px] relative">
                    <div class="header_text h-[575px] max-w-[610px] w-full">
                        <p class="text1 text-white text-[70px] font-bold leading-[96px]">
                            Открой для себя Новую Ирландию
                        </p>
                        <p class="text2 text-[#FFFFFF] text-[24px] font-[400] leading-[29px] max-w-[550px] w-full">
                            Авторские туры по экзотическим уголкам
                            от Ивана Иванова
                        </p>
                        <div class="claim flex justify-between w-full h-[72px] mt-[26px]">
                            <form class="contactForm max-w-[405px] w-full h-[72px]" id="contactForm"
                                  enctype="multipart/form-data"
                                  method="get">
                                @csrf
                                <button class="claim_btn myBtn rounded-full bg-yellow-600 max-w-[405px] w-full h-[72px]"
                                        type="submit">
                                <span
                                    class="text-[30px] font-[400] h-[68px] leading-[37px] text-[#01002C]">Оставить заявку</span>
                                </button>
                            </form>
                            <div class="iconplay flex items-center justify-between max-w-[213px] w-full ml-[36px]">
                                <img src="svg/iconPlay1.svg" alt="" class="mr-[15px] w-[72px] h-[72px]">
                                <p class="text3 justify-between w-[125px] font-[500] text-[14px] leading-[17px] text-[#A4ABB9]">
                                    Посмотрите видео-отчет 2018-2019
                                </p>
                            </div>
                        </div>
                        <div class="social w-[238px] h-[57px] mt-[58px]">
                            <p class="text4 text-[16px] font-[400] leading-[20px] text-[#A4ABB9]">Подписывайтесь в
                                соцсетях</p>
                            <div class="social_svg flex justify-between items-center w-full mt-[15px]">
                                <a href="">
                                    <img src="svg/iconYouTube.svg" alt="">
                                </a>
                                <a href="">
                                    <img src="svg/iconFB.svg" alt="">
                                </a>
                                <a href="">
                                    <img src="svg/iconTwitter.svg" alt="">
                                </a>
                                <a href="">
                                    <img src="svg/iconVK.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="image_block flex justify-between max-w-[945px] w-full absolute">
                        <div class="block1 max-w-[285px] w-full h-[200px] rounded-[18px]">
                            <x-mini-images-block text1="02" text2="Водопады Исландии"/>
                        </div>
                        <div class="block2 max-w-[285px] w-full h-[200px] rounded-[18px]">
                            <x-mini-images-block text1="03" text2="Сказочные доломиты"/>
                        </div>
                        <div class="block3 max-w-[285px] w-full h-[200px] rounded-[18px]">
                            <x-mini-images-block text1="04" text2="Неизведанная норвегия"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content w-full">
                <div class="index2 flex justify-between max-w-[1500px] w-full my-[193px] mx-auto">
                    <div class="group1 max-w-[872px] w-full h-[472px] p-[30px]">
                        <x-large-text text1="10-24" text2="апреля" text3="Большое ущелье на острове Гавайи"/>
                    </div>
                    <x-large-text-description text1="Посмотрите все направления туров"
                                              text2="Берега океанов и дикие пляжи с редкими породамидеревьев. Местная архитектура и первозданный вид дикой природы"/>
                </div>
                <div class="index3 w-full h-[518px] pt-[30px]">
                    <div class="index3_content flex justify-between max-w-[740px] w-full h-[390px]">
                        <div class="index3_content_left max-w-[384px] w-full">
                            <p class="index3_text1 text1 max-w-[384px] w-full h-[210px] text-[42px] font-bold leading-[56px]">
                                Оставьте заявку на бесплатную консультацию
                            </p>
                            <p class="index3_tex2 text2 max-w-[228px] w-full text-[21px] font-[400] leading-[26px]">
                                Мы перезвоним вам в ближайшее время
                            </p>
                        </div>
                        {{--                        <div class="index3_content_right flex flex-col justify-center items-center max-w-[311px] w-full pt-[10px]">--}}
                        <form
                            class="index3_content_right contactForm flex flex-col justify-center items-center max-w-[311px] w-full pt-[10px]"
                            id="contactForm" enctype="multipart/form-data" method="get">
                            @csrf
                            <x-custom-input text1="Ваше имя"/>
                            <x-custom-input text1="+7(___)___-__-__"/>
                            <button id="myBtn" type="submit"
                                    class="flex justify-center items-center myBtn max-w-[278px] w-full h-[72px] border-2 border-[rgba(197,142,0,0)] rounded-[40px] bg-[rgb(255,184,0)]">
                                <span class="text2 inline-block text-[23px] font-bold leading-[28px] text-[rgb(0,0,0)]">Отправить заявку</span>
                            </button>
                            <span
                                class="inline-block max-w-[190px] w-full h-[31px] text-[11px] font-normal leading-[13px] mt-[10px]">Нажимая кнопку, вы даете согласие <span
                                    class="text-[#896300] w-full">на обработку персональных данных</span></span>
                        </form>
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="index2 flex justify-between max-w-[1500px] w-full my-[193px] mx-auto">
                    <x-large-text-description text1="Что пишут участники наших путешествий"
                                              text2="87% участников приходят по личной рекомендации отдрузей. А каждый 4-ый путешествует с нами больше двух раз!"/>
                    <div class="group11 max-w-[872px] w-full h-[472px] p-[30px]">
                        <x-large-text text1="Отзыв" text2="Елена Иванова"
                                      text3="Пожалуй, это был самый лучший отпуск в моей жизни..."/>
                    </div>
                </div>
            </div>
            <div class="footer flex justify-around w-full h-[179px] bg-[#E0E4E9] pt-[80px]">
                <div class="footer_block1 flex justify-between max-w-[900px] w-full h-[50px]">
                    <img src="svg/IconLogDark1.svg" alt="" class="w-[160px] h-[35px]">
                    <p class="max-w-[245px] w-full h-[37px] text-[21px] font-medium text-[rgb(110,136,161)] leading-none">
                        Политика конфиденциальности
                    </p>
                    <p class="max-w-[298px] w-full h-[37px] text-[21px] font-semibold text-[#6e88a1] leading-[20px]">
                        Соглашение на обработку
                        персональных данных
                    </p>
                </div>
                <div class="footer_block2 max-w-[235px] w-full h-[57px]">
                    <div class="social_svg flex justify-between items-center w-full">
                        <a href="">
                            <img src="svg/iconYouTubeDark.svg" alt="">
                        </a>
                        <a href="">
                            <img src="svg/VectorDark.svg" alt="">
                        </a>
                        <a href="">
                            <img src="svg/iconTwitterDark.svg" alt="">
                        </a>
                        <a href="">
                            <img src="svg/iconVKDark.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="navbar-menu relative z-50 hidden">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <nav
                    class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                    <div class="flex items-center mb-8">
                        <a class="mr-auto text-3xl font-bold leading-none" href="#">
                            <img src="svg/IconLogDark1.svg" alt="" class="w-[160px] h-[35px]">
                        </a>
                        <button class="navbar-close">
                            <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul>
                            @if($menu_items->isEmpty())
                                <x-custom-li text1="Все туры"/>
                                <x-custom-li text1="Отзывы"/>
                                <x-custom-li text1="Контакты"/>
                            @else
                                @foreach($menu_items as $item)
                                    <x-custom-li text1="{{ $item->menu_item }}"/>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
