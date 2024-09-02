@extends('base')
@section('content')
<div class="justify-center items-center md:flex bg-about h-full md:h-screen md:flex flex-col">
    <div class="grid md:grid-rows-3 md:grid-flow-col flex items-center justify-center md:pt-16 md:pt-0 text-center">

        <div class=" flex items-center justify-center w-full fade3 md:row-span-3 left1">
            <img src="{{url('anibusss.png')}}" class="w-72 text-center" alt="">
        </div>

        <div class=" md:col-span-2 md:row-span-1 flex-box md:flex-col items-center right2 justify-center md:mx-16 text-center">
            <h5 class="title text-7xl font-bold">AniBuss</h5>
            <p class="para italic">Where anime and bussiness collides</p>
        </div>

        <div class="my-8 md:row-span-2 flex-box desc right2 items-center h-40 text-wrap rounded-xl max-w-5xl justify-center  md:mx-16 w-full text-center overflow-y-auto overflow-auto overscroll-contain  md:ps-16">
            <p class="text-left">AniBuss adalah platform revolusioner yang menjembatani dunia anime yang penuh imajinasi dengan dinamika bisnis modern. Di tengah berkembangnya industri kreatif global, AniBuss hadir sebagai ruang di mana para penggemar anime dan profesional bisnis dapat bersatu untuk mengeksplorasi dan mengembangkan potensi yang ada di persimpangan dua dunia ini.</p>
            <br>
            <p class="text-left">Dalam dunia AniBuss, anime bukan hanya sekadar hiburan; ia menjadi sumber inspirasi, inovasi, dan kreativitas yang dapat diterapkan dalam berbagai aspek bisnis. Baik Anda seorang entrepreneur yang mencari ide-ide segar dari karakter dan alur cerita anime, atau seorang penggemar berat yang ingin melihat bagaimana elemen-elemen favorit dari anime dapat diintegrasikan ke dalam strategi pemasaran atau branding, AniBuss menawarkan wawasan yang mendalam dan solusi praktis untuk memadukan kedua dunia ini.</p>
            <br>
            <p class="text-left">Jargon "Where Anime and Business Collide" mencerminkan esensi dari AniBuss. Ini adalah tempat di mana batasan antara fantasi dan kenyataan menjadi kabur, memungkinkan pemikiran out-of-the-box yang sering kali diabaikan dalam dunia bisnis tradisional. Dengan memanfaatkan kekayaan karakter, cerita, dan budaya dari anime, AniBuss menginspirasi pendekatan baru terhadap branding, storytelling, dan engagement yang tidak hanya memikat tetapi juga efektif di pasar global.</p>
            <br>
            <p class="text-left">AniBuss juga bertujuan untuk menciptakan komunitas di mana para kreator, inovator, dan pengusaha dapat berbagi ide dan berkolaborasi untuk menciptakan produk dan layanan yang unik. Dengan memadukan daya tarik visual dan naratif dari anime dengan prinsip-prinsip bisnis yang solid, AniBuss membuka pintu bagi peluang baru yang tak terbatas.</p>
            <br>
            <p class="text-left">Dalam setiap langkah perjalanan ini, AniBuss berkomitmen untuk mempertahankan integritas dan kedalaman dari kedua dunia yang digabungkan. Melalui acara, seminar, dan konten yang dikurasi, platform ini menghubungkan para profesional dari kedua bidang untuk membangun jembatan yang kuat antara seni dan perdagangan, kreativitas dan strategi, fantasi dan realitas.</p>
            <br>
            <p class="text-left">AniBuss bukan hanya sebuah konsep; ini adalah gerakan yang mendorong batas-batas inovasi, menantang norma-norma konvensional, dan menciptakan masa depan di mana anime dan bisnis tidak hanya hidup berdampingan, tetapi berkembang bersama. Di AniBuss, dunia anime bertemu dengan dunia bisnis, menciptakan ledakan ide dan peluang di persimpangan di mana keduanya bertabrakan, berkolaborasi, dan menciptakan sesuatu yang benar-benar luar biasa.</p>
        </div>
    </div>
    <div class=" flex place-items-center items-center justify-center grid md:grid-cols-4 gap-4 py-8 mx-4 grid-cols-1">

        <div class="i1 hover-lift w-full max-w-sm bg-white border border-gray-200 px-14 py-4 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center pb-10">
                <img class=" w-32 mb-3 rounded-full shadow-lg" src="{{url('ig.png')}}" alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">AniBuss</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Instagram</span>
                <div class="flex mt-4 md:mt-6">
                    <a href="https://www.instagram.com/hanya.nicolai/" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Visit</a>
                </div>
            </div>
        </div>

        <div class=" i2 hover-lift w-full max-w-sm bg-white border border-gray-200 px-14 py-4 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center pb-10">
                <img class=" w-32 mb-3 rounded-full shadow-lg" src="{{url('x.png')}}" alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">AniBuss</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Twitter</span>
                <div class="flex mt-4 md:mt-6">
                    <a href="https://www.instagram.com/event_cosplay_surabaya/" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Visit</a>
                </div>
            </div>
        </div>

        <div class="i3 hover-lift w-full max-w-sm bg-white border border-gray-200 px-14 py-4 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center pb-10">
                <img class=" w-32 mb-3 rounded-full shadow-lg" src="{{url('tiktok.png')}}" alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">AniBuss</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Tik Tok</span>
                <div class="flex mt-4 md:mt-6">
                    <a href="https://www.instagram.com/wutheringwave.id/" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Visit</a>
                </div>
            </div>
        </div>

        <div class="i4 hover-lift w-full max-w-sm bg-white border border-gray-200 px-14 py-4 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center pb-10">
                <img class=" w-32 mb-3 rounded-full shadow-lg" src="{{url('facebook.png')}}" alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">AniBuss</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Facebook</span>
                <div class="flex mt-4 md:mt-6">
                    <a href="https://www.instagram.com/zenless.gg/" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Visit</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Elemen tambahan di bagian bawah -->
@endsection