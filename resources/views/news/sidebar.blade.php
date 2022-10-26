@php
$bannerGdnTopSidebar = \App\Models\BannerGdn::where('group',2)->act()->first();
@endphp
@if (isset($bannerGdnTopSidebar))
@if ($bannerGdnTopSidebar->use_code == 1)
{!!$bannerGdnTopSidebar->banner_content!!}
@else
<a href="{{$bannerGdnTopSidebar->buidLink()}}" {{Support::showNofollow($bannerGdnTopSidebar)}} class="link-banner__sidebar hidden lg:block img__ mb-6" title="{{$bannerGdnTopSidebar->name}}">
    @include('image_loader.big',['itemImage'=>$bannerGdnTopSidebar,'key'=>'img'])
</a>
@endif
@endif
@php
$listNewNews = \App\Models\News::act()->publish()->orderBy('time_published','desc')->limit(5)->get();
@endphp
@if (count($listNewNews) > 0)
<div class="box overflow-hidden mb-6">
    <p class="head-title__sidebar text-center font-semibold uppercase py-2 px-3 text-white bg-[#028cde] 2xl:text-[1.25rem] text-[1rem] mb-4">Tin tức mới</p>
    <div class="list-new__side grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 ">
        @foreach ($listNewNews as $itemNewNews)
        <div class="col-span-1">
            <div class="new-sidebar flex items-center">
                <div class="image w-[100px] shrink-0 mr-2">
                    <a href="{{Support::show($itemNewNews,'slug')}}" title="{{Support::show($itemNewNews,'name')}}" class="img img__ block c-img pt-[53%]">
                        @include('image_loader.tiny',['itemImage'=>$itemNewNews,'key'=>'img'])
                    </a>
                </div>
                <div class="new-content">
                    <h3>
                        <a href="{{Support::show($itemNewNews,'slug')}}" title="{{Support::show($itemNewNews,'name')}}" class="title text-[#262626] line-clamp-2 font-semibold uppercase text-[0.75rem] mb-2">{{Support::show($itemNewNews,'name')}}</a>
                    </h3>
                    <p class="count text-[0.625rem] text-[#888] italic">Lượt xem: {{Support::show($itemNewNews,'count_view')}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@php
$listFrequentQuestion = \App\Models\Question::act()->orderBy('id','desc')->limit(5)->get();
@endphp
@if (count($listFrequentQuestion) > 0)
<div class="box overflow-hidden bg-white mb-6">
    <p class="head-title__sidebar text-center font-semibold uppercase lg:py-2 py-1 px-3 text-white bg-[#028cde] 2xl:text-[1.25rem] text-[1rem]">Câu hỏi liên quan</p>
    <div class="border-box border-[1px] border-solid border-[#028cde] 2xl:p-7 p-4">
        @foreach ($listFrequentQuestion as $key => $itemFrequentQuestion)
        <a href="{{Support::show($itemFrequentQuestion,'slug')}}" title="{{Support::show($itemFrequentQuestion,'name')}}" class="question-related relative block text-[#131313] text-[0.875rem] mb-5 last:mb-0 pl-10">
            <span class="stt min-w-[26px] h-[26px] text-[0.625rem] text-white inline-flex items-center justify-center bg-[#028cde] absolute top-0 left-0">{{$key + 1}}</span>
            {{Support::show($itemFrequentQuestion,'name')}}
        </a>
        @endforeach
    </div>
</div>
@endif
<div class="box overflow-hidden bg-white mb-6">
    <p class="head-title__sidebar text-center font-semibold uppercase lg:py-2 py-1 px-3 text-white bg-[#028cde] 2xl:text-[1.25rem] text-[1rem]">
        Đăng ký tư vấn
    </p>
    <div class="border-box border-[1px] border-solid border-[#028cde] p-4">
        <p class="text-center md:text-[0.875rem] 2xl:mb-6 mb-4">
            Vui lòng để lại thông tin và nhu cầu
            của Quý khách để được nhận tư vấn
        </p>
        <form name="form-contact-register" action="{{VRoute::get('resgisterAdvise')}}" method="post" class="form-regis-sidebar form-validate" absolute data-success="NOTIFICATION.toastrMessageReload" accept-charset="utf8">
            @csrf
            <input type="hidden" name="form" value="form-contact-register">
            <input type="hidden" name="type" value="Đăng ký tư vấn">
            <input type="hidden" name="type" value="1">
            <input type="text" name="fullname" placeholder="Họ và tên (*)" class="form-control text-[#888] placeholder:text-[#888] w-full p-3 rounded-md outline-none border-[1px] border-solid border-[#bce0f6] mb-4" rules="required">
            <input type="text" name="phone" placeholder="Số điện thoại (*)" class="form-control text-[#888] placeholder:text-[#888] w-full p-3 rounded-md outline-none border-[1px] border-solid border-[#bce0f6] mb-4" rules="required||phone">
            <?php $branchs = \App\Models\BranchSystem::act()->get(); ?>
            @if($branchs != null)
            <select name="register_address" rules="required" class="form-control text-[#888] placeholder:text-[#888] w-full p-3 rounded-md outline-none border-[1px] border-solid border-[#bce0f6] mb-4">
                <option value="Không xác định" disabled selected>Chọn cơ sở</option>
                @foreach($branchs as $k =>$branch)
                <option value="{{ Support::show($branch, 'full_address') }}">{{Str::limit($branch->full_address, 30, ' (...)')}}</option>
                @endforeach
            </select>
            @endif
            <input type="text" name="email" placeholder="Email" class="form-control text-[#888] placeholder:text-[#888] w-full p-3 rounded-md outline-none border-[1px] border-solid border-[#bce0f6] mb-4">
            <textarea name="note" placeholder="Triệu chứng:" class="form-control resize-none text-[#888] placeholder:text-[#888] w-full h-24 p-3 rounded-md outline-none border-[1px] border-solid border-[#bce0f6] mb-4"></textarea>
            <button type="submit" class=" btn-red flex min-w-[160px] lg:min-w-fit w-fit mx-auto items-center justify-center lg:text-[0.875rem] uppercase lg:py-3 py-2 lg:px-6 px-3 rounded-lg lg:rounded-3xl text-white bg-[#fb2317] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">Đăng ký ngay</button>
        </form>
    </div>
</div>
@php
$bannerGdnSocialBottomSidebar = \App\Models\BannerGdn::where('group',3)->act()->get();
@endphp
@if (count($bannerGdnSocialBottomSidebar) > 0)
@foreach ($bannerGdnSocialBottomSidebar as $itemGdnSocialBottomSidebar)
@if ($itemGdnSocialBottomSidebar->use_code == 1)
{!!$itemGdnSocialBottomSidebar->banner_content!!}
@else
<a href="{{$itemGdnSocialBottomSidebar->buidLink()}}" title="{{Support::show($itemGdnSocialBottomSidebar,'name')}}" class="link-banner__sidebar hidden lg:block img__ mb-2">
    @include('image_loader.big',['itemImage'=>$itemGdnSocialBottomSidebar,'key'=>'img'])
</a>
@endif
@endforeach
@endif