{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
Giới thiệu Hoàng Yến Medical
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
@section('main-content')
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('themes/cozastore/images/bg-01.jpg') }}');">
    <h2 class="ltext-105 cl0 txt-center">
        Giới thiệu
    </h2>
</section>


<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Về chúng tôi
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                    Cửa hàng thiết bị y tế Hoàng Yến tự hào là một trong những đơn vị tiên phong trong việc cung cấp các sản phẩm y tế chất lượng cao, phục vụ nhu cầu chăm sóc sức khỏe của cộng đồng. Với kinh nghiệm nhiều năm trong ngành, Hoàng Yến cam kết mang đến những giải pháp thiết bị y tế hiện đại, đáp ứng các tiêu chuẩn khắt khe về chất lượng và an toàn.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Chúng tôi cung cấp đa dạng các sản phẩm như: dụng cụ hỗ trợ y tế, thiết bị chẩn đoán, vật tư tiêu hao, và nhiều loại thiết bị chuyên dụng khác. Hoàng Yến không chỉ là nơi bạn tìm thấy những sản phẩm y tế tốt nhất, mà còn là người bạn đồng hành đáng tin cậy trong việc chăm sóc sức khỏe cho gia đình và cộng đồng.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Nếu có bất kỳ câu hỏi nào? Hãy đến cửa hàng tại Đường Hoàng Sa, Thị trấn An Châu, huyện Châu Thành, tỉnh An Giang hoặc gọi cho chúng tôi qua số (+84) 706 570 613
                    </p>
                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="{{ asset('themes/cozastore/images/about-01.jpg') }}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Sứ mệnh của chúng tôi
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                    Sứ mệnh của chúng tôi là trở thành cầu nối giữa công nghệ y tế tiên tiến và người tiêu dùng, mang đến giải pháp chăm sóc sức khỏe toàn diện cho mọi người. Cửa hàng Hoàng Yến luôn đặt sức khỏe và sự an toàn của khách hàng lên hàng đầu, không ngừng nỗ lực cải tiến dịch vụ, cập nhật sản phẩm mới và xây dựng niềm tin với khách hàng.
                    </p>
                    <p class="stext-113 cl6 p-b-26">
                    Hoàng Yến cam kết:
                    Cung cấp sản phẩm chính hãng, chất lượng cao.
                    Hỗ trợ tư vấn tận tâm và chuyên nghiệp.
                    Đồng hành cùng khách hàng trong việc bảo vệ và nâng cao sức khỏe.
                    </p>
                    <p class="stext-113 cl6 p-b-26">
                    Hãy để Hoàng Yến trở thành người bạn đồng hành đáng tin cậy trên hành trình chăm sóc sức khỏe của bạn và những người thân yêu.
                    </p>

                    <div class="bor16 p-l-29 p-b-9 m-t-22">
                        <p class="stext-114 cl6 p-r-40 p-b-11">
                            Creativity is just connecting things. When you ask creative people how they did something,
                            they feel a little guilty because they didn't really do it, they just saw something. It
                            seemed obvious to them after a while.
                        </p>

                        <span class="stext-111 cl8">
                            - Steve Job’s
                        </span>
                    </div>
                </div>
            </div>

            <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="{{ asset('themes/cozastore/images/about-02.jpg') }}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection